<?php

namespace controllers;
use core\Controller;

/**
 * Контроллер для модуля History
 */
class History extends Controller
{
	protected $user;
	protected $newsModel;
	protected $userModel;
	public function __construct()
	{
		$this->userModel = new \models\Users();
		$this->newsModel = new \models\News();
		$this->user = $this->userModel->GetCurrentUser();
	}

	/**
	 * Відображення початкової сторінки модуля
	 */
	public function actionIndex()
	{
		global $Config;
		$title = 'Історія';
		$lastNews = $this->newsModel->GetLastNews($Config['NewsCount']);
		return $this->render('index', ['lastNews'=>$lastNews], [
			'MainTitle' => $title,
			null
		]);
	}
};