<?php 

class AdminProductController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список товаров 
		$productsList = Product::getProductsList();

		require_once(ROOT . '/views/admin_products/index.php');
    return true;
	}

	public function actionUpdate()
	{
		// проверяем доступ
		self::checkAdmin();

		require_once(ROOT . '/views/admin_products/update.php');
    return true;
	}

}





















