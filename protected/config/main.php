<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistem Informasi Klinik',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		
		'gii'=>array(
		'class'=>'system.gii.GiiModule',
		'password'=>'123456',
		'ipFilters'=>array('*'), // <--- ini membolehkan akses dari semua IP
	),

	),

	// application components
	'components'=>array(

		'user'=>array(
			'class'=>'CWebUser',
			'stateKeyPrefix'=>'app', // Set prefix untuk session
			'allowAutoLogin'=>true,  // Izinkan auto login
			'loginUrl'=>array('site/login'), // Halaman login
		),

	
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'admin/dashboard' => 'site/adminDashboard',
				'dokter/dashboard' => 'site/dokterDashboard',
				'kasir/dashboard' => 'site/kasirDashboard',
				'pendaftaran/dashboard' => 'site/pendaftaranDashboard',
			),
		),

	

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
