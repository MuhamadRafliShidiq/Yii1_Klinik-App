<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;

		// Cek jika form sudah di-submit
		if (isset($_POST['LoginForm'])) {
			$model->attributes = $_POST['LoginForm'];
			
			// Validasi dan login
			if ($model->validate() && $model->login()) {
				// Dapatkan role dari model user yang login
				$role = Yii::app()->user->role;
				
				// Jika role belum ada, ambil dari database atau model user yang terkait
				if (!$role) {
					// Misalnya, ambil role dari user yang baru login (sesuaikan dengan struktur user model)
					$user = Users::model()->findByPk(Yii::app()->user->id);// Pastikan User sudah login dan memiliki id
					Yii::app()->user->setState('role', $user->role);
					$role = $user->role;
				}
				Yii::log('Role after login: ' . $role, CLogger::LEVEL_INFO);
				// Redirect berdasarkan role pengguna
				switch ($role) {
					case 'Admin':
						$this->redirect(array('adminDashboard')); // Halaman Dashboard Admin
						break;
					case 'Dokter':
						$this->redirect(array('dokterDashboard')); // Halaman Dashboard Dokter
						break;
					case 'Kasir':
						$this->redirect(array('kasirDashboard')); // Halaman Dashboard Kasir
						break;
					case 'Petugas Pendaftaran':
						$this->redirect(array('pendaftaranDashboard')); // Halaman Dashboard Pendaftaran
						break;
					default:
						$this->redirect(Yii::app()->user->returnUrl); // Default jika tidak ada role yang cocok
						break;
				}
			}
		}

		// Render form login jika belum berhasil login
		$this->render('login', array('model' => $model));
	}

	// Dashboard Admin
	public function actionAdminDashboard()
	{
		$this->layout = 'admin';
		$this->render('adminDashboard');
	}

	// Dashboard Dokter
	public function actionDokterDashboard()
	{
		$this->layout = 'dokter';
		$this->render('dokterDashboard');
	}

	// Dashboard Kasir
	public function actionKasirDashboard()
	{
		$this->layout = 'kasir';
		$this->render('kasirDashboard');
	}

	// Dashboard Pendaftaran	
	public function actionPendaftaranDashboard()
	{
		$this->layout = 'petugas_pendaftaran';
		$this->render('pendaftaranDashboard');
	}

	public function actionRiwayatPembayaran()
{
    $criteria = new CDbCriteria();

    // Filter pencarian, kalau ada
    if (isset($_GET['search']) && $_GET['search'] !== '') {
        $criteria->addSearchCondition('no_tagihan', $_GET['search']);
    }

    // Urutkan berdasarkan tanggal terbaru
    $criteria->order = 'tanggal_bayar DESC';

    $dataProvider = new CActiveDataProvider('Pembayaran', array(
        'criteria' => $criteria,
        'pagination' => array(
            'pageSize' => 10,
        ),
    ));

    $this->render('riwayatPembayaran', array(
        'dataProvider' => $dataProvider,
    ));
}





	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}