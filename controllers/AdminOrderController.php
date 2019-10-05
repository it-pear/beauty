<?php 

class AdminOrderController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список товаров 
		$ordersList = Order::getOrdersList();

		require_once(ROOT . '/views/admin_orders/index.php');
    return true;
	}


	// удаление товара
	public function actionDelete($id)
	{
		// проверяем доступ
		self::checkAdmin();

		if (isset($_POST['submit'])) {

			Order::deleteOrderById($id);

			// перенаправление
			header("Location: /admin/orders");
		}

		require_once(ROOT . '/views/admin_orders/delete.php');
    return true;
	}

	// обновить заказ
	public function actionUpdate($id)
	{
		// проверяем доступ
		self::checkAdmin();

    $order = Order::getOrderById($id);

		// Обработка формы
    if (isset($_POST['submit'])) {
      // Получаем данные из формы
      $user_name = $_POST['user_name'];
      $user_phone = $_POST['user_phone'];
      $user_email = $_POST['user_email'];
      $user_messege = $_POST['user_messege'];
      $user_city = $_POST['user_city'];
      $user_office = $_POST['user_office'];
      $date = $_POST['date'];
      $status = $_POST['status'];
      // Сохраняем изменения
      Order::updateOrderById($id, $user_name, $user_phone, $user_email, $user_messege, $user_city, $user_office, $date, $status);
      // Перенаправляем пользователя на страницу управлениями категориями
      header("Location: /admin/orders");
    }

		require_once(ROOT . '/views/admin_orders/update.php');
    return true;
	}

	// просмотреть заказ
	public function actionView($id)
	{
		// проверяем доступ
		self::checkAdmin();
		// получить данные определенного заказа
		$order = Order::getOrderById($id);

		// получить массив заказов 
		$productQuantity = json_decode($order['products'], true);

		// получить массив с id товаров
		$productsIds = array_keys($productQuantity);

		// получаем список товаров в заказе
		$products = Product::getProductsByIds($productsIds);

		require_once(ROOT . '/views/admin_orders/view.php');
    return true;

	}

}





















