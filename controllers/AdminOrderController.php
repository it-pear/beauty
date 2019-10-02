<?php 

class AdminOrderController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		require_once(ROOT . '/views/admin_orders/index.php');
    return true;
	}

}





















