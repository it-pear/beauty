<?php 

class CartController 
{
	
	public function actionAdd($id)
	{
		Cart::addProduct($id);

		// возвращаем пользователя обратно на страницу
		// $referrer = $_SERVER['HTTP_REFERER'];
		// header("Location: $referrer");
	}

	// добавление товара
	public function actionAddAjax($id)
	{
		echo Cart::addProduct($id);
		return true;
	}

	// удаление одного товара
	public function actionremoveAjax($id)
	{
		echo Cart::removeProduct($id);
		return true;
	}

	// удаление выбранного товара
	public function actionDelete($id)
	{
		echo Cart::deleteProduct($id);
		header("Location: /cart");
	}

	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$productsInCart = false;

		// получаем данные из карзины
		$productsInCart = Cart::getProducts();

		if ($productsInCart) {
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductsByIds($productsIds);

			// получаем общую стоимость товара
			$totalPrice = Cart::getTotalPrice($products);
		}
		require_once(ROOT . '/views/cart/index.php');
		return true;
	}

	public function actionThanks()
	{
		require_once(ROOT . '/views/cart/thanks.php');
		return true;
	}


	// оформление заказа
	public function actionCheckout()
	{
		// стартовый статус заказа
		$result = false;

		if (isset($_POST['submit'])) {
			$userName = $_POST['names'];
			$userEmail = $_POST['emails'];
			$userPhone = $_POST['phone'];
			$userCity = $_POST['city'];
			$userOffice = $_POST['mail_office'];
			$userMessege = $_POST['messege'];

			$errors = false;

			if (!User::checkNick($userName)) {
				$errors[] = 'Неправильное имя';
			}
			if (!User::checkEmail($userEmail)) {
				$errors[] = 'Неправильный email';
			}
			if (!User::checkPhone($userPhone)) {
				$errors[] = 'Неправильный телефон';
			}
			if (!User::checkNick($userCity)) {
				$errors[] = 'Неккоректно заполенный город';
			}
			if (!User::checkNick($userOffice)) {
				$errors[] = 'Отделение почты не менее 3 символов';
			}

			// форма заполнена верно и отправлена - да
			if ($errors == false) {
				$productsInCart = Cart::getProducts();

				$result = Order::save($userName, $userEmail, $userPhone, $userMessege, $userCity, $userOffice, $productsInCart);

				if ($result) {
					// оповещаем администратора о новом заказе 
					$adminEmail = 'yurecblinovgel1998@gmail.com';
					$messege = '/admin/orders';
					$subject = 'Новый заказ';
					mail($adminEmail, $messege, $subject);

					Cart::clear();
				}
			} else {
				// форма заполненна не корректно
				$productsInCart = Cart::getProducts();
				$productsIds = array_keys($productsInCart);
				$products = Product::getProductsByIds($productsIds);
				$totalPrice = Cart::getTotalPrice($products);
				$totalQuantity = Cart::countItems();
			}
		} else {
			// Форма отправлена ? - нет

			// получаем данные из корзины
			$productsInCart = Cart::getProducts();

			// в корзине есть товары - нет
			if ($productsInCart == false) {
				header('Location: /');
			} else {
				// в корзине есть товары ? - да
				$productsIds = array_keys($productsInCart);
				$products = Product::getProductsByIds($productsIds);
				$totalPrice = Cart::getTotalPrice($products);
				$totalQuantity = Cart::countItems();

				$userName = false;
				$userEmail = false;
				$userPhone = false;
				$userCity = false;
				$userOffice = false;
				$userMessege = false;
			}
		}

		require_once(ROOT . '/views/cart/checkout.php');
    return true;
	}
	
}





