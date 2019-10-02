<?php 

class AdminProductController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		require_once(ROOT . '/views/admin_products/index.php');
    return true;
	}

}





















