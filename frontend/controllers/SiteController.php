<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
	/**
	 * {@inheritdoc}
	 */

	/* 	public function actionCreateAdmin()
	{
		$user = new \common\models\User();
		$user->username = 'admin';
		$user->email = 'admin@example.com';
		$user->status = \common\models\User::STATUS_ACTIVE;
		$user->setPassword('admin');
		$user->generateAuthKey();
		$user->save();
		echo 'ok';
	}

	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionCategory()
	{
		return $this->render('category');
	}

	public function actionArticle()
	{
		return $this->render('article');
	} */
}
