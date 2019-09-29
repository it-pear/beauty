<?php 

class AdminController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		require_once(ROOT . '/views/admin/index.php');
    return true;
	}

}





















