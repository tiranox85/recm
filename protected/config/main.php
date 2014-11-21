<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Indicadores Economicos',
	'theme'=>'abound',
	'language'=>'es',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	'aliases' => array(
    //If you used composer your path should be
    'xupload' => 'ext.vendor.asgaroth.xupload',
    //If you manually installed it
    'xupload' => 'ext.xupload'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'sedecodf',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','good.experto-hosting.com','::1'),
		),
		
	),
  //$baseUrl2 = Yii::app()->theme->baseUrl; 
	// application components
	'components'=>array(
		'cache'=>array(
			'class'=>'CFileCache',

		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
	/*	'widgetFactory'=>array(
     	'widgets'=>array(
        'CGridView'=>array(
             'cssFile' => Yii::app()->theme->baseUrl.'/css/grids.css',
        ))),*/
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database

		/* 'db'=>array(
		      'connectionString' => 'pgsql:host=localhost;dbname=reporte_economico',
                      //'connectionString' => 'pgsql:host=localhost;dbname=sigiems',
	        	'emulatePrepare' => true,
		        'username' => 'kylix',
        	    'password' => '2020kylix',
        	    'charset' => 'utf8',
		),*/

		'db'=>array(
			//'class'=>'CDbConnection',
			'connectionString'=>'dblib:host=sedeco2;dbname=ReporteEconimicoDev',
			'username'=>'reporteEcoApp',
			'password'=>'4ppr3P0rT3Ec0',

			'charset' => 'utf8',
			),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
		'uploads'=>'/uploads',  
	),
);