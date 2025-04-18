<?php

class UserIdentity extends CUserIdentity
{
    private $_id;
    public $role;

    public function authenticate()
    {
        $user = Users::model()->findByAttributes(['username' => $this->username]);

        if ($user === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif ($user->password !== $this->password) { // Ganti ini jika password-nya di-hash
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $user->id;
            $this->username = $user->username;
            $this->role = $user->role;

            // Simpan ke sesi
            Yii::app()->user->setState('role', $user->role);
            Yii::app()->user->setState('nama_lengkap', $user->nama_lengkap);
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}

