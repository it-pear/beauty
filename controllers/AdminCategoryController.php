<?php 

class AdminCategoryController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		require_once(ROOT . '/views/admin_categories/index.php');
    return true;
	}

}





















