<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id' => 'app-backend',
	'homeUrl' => '/admin',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap' => ['log'],
	'modules' => [

		'custompages' => [
			'class' => 'andrewdanilov\custompages\backend\Module',
			// access role for module controllers, optional, default is ['@']
			'access' => ['admin'],
			// path to Views for pages and categories
			'templatesPath' => '@frontend/views/custompages',



			// file manager configuration, optional, default is:
			'fileManager' => [
				'basePath' => '@frontend/web',
				'paths' => [
					[
						'name' => 'News',
						'path' => 'upload/images/news',
					],
					[
						'name' => 'Articles',
						'path' => 'upload/images/articles',
					],
				],
			],
		],
	],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-backend',
			'baseUrl' => '/admin',
		],
		'user' => [
			'class' => 'yii\web\User',
			'identityClass' => 'andrewdanilov\adminpanel\models\User',
			'accessChecker' => 'andrewdanilov\adminpanel\AccessChecker',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
			'loginUrl' => ['user/login'],
		],
		'session' => [
			// this is the name of the session cookie used for login on the backend
			'name' => 'advanced-backend',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [],
		],
	],
	'controllerMap' => [
		'user' => 'andrewdanilov\adminpanel\controllers\UserController',
	],
	'params' => $params,
];
