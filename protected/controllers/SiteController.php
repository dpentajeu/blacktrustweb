<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function init()
	{
		parent::init();
		if (isset(Yii::app()->session['_lang']))
			Yii::app()->language = Yii::app()->session['_lang'];
	}

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
		//get technology news
		if(Yii::app()->language == 'cn')
			$financeUrl = 'http://news.google.com.hk/news?pz=1&cf=all&hl=zh-TW&topic=t&output=rss';
		else
			$financeUrl = 'https://news.google.com/news/feeds?pz=1&cf=all&hl=en&topic=tc&output=rss';
		$xml = new SimpleXMLElement(file_get_contents($financeUrl));
		$activeNews = array();

		foreach ($xml->channel->item as $key) $activeNews[] = $key;
		// var_dump($activeNews);
		$this->render('index', array('activeNews'=>$activeNews));
	}

	public function actionLang($_lang)
	{
		$app = Yii::app();
		$app->session['_lang'] = $_lang;
		$this->redirect(Yii::app()->request->urlReferrer);
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
					"Content-type: text/plain; charset=UTF-8";

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
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionPage($page, $id = null)
	{
		$param = array();

		if (method_exists($this, 'action'.ucfirst($page)))
		{
			$base = Yii::app()->request->baseUrl;
			if (is_null($id))
				call_user_func(array($this, 'action'.ucfirst($page)));
				// $this->redirect("$base/site/$page");
			else
				call_user_func(array($this, 'action'.ucfirst($page)), $id);
				// $this->redirect("$base/site/$page/$id");
			Yii::app()->end();
		}
		else if($page == 'index')
		{
			$this->redirect(array('index'));
		}
        else if($page == 'news')
		{
			if(Yii::app()->language == 'cn')
				$financeUrl = 'http://news.google.com.hk/news?pz=1&cf=all&hl=zh-TW&topic=t&output=rss';
			else
				$financeUrl = 'https://news.google.com/news/feeds?pz=1&cf=all&hl=en&topic=tc&output=rss';
			$xml = new SimpleXMLElement(file_get_contents($financeUrl));
			$activeNews = array();
			
			foreach ($xml->channel->item as $key) $activeNews[] = $key;

			$param['activeNews'] = $activeNews;
		}

		$this->render($page, $param);
	}
}