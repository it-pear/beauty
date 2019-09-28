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


	// оформление заказа
	public function actionCheckout()
	{
		require_once(ROOT . '/views/cart/checkout.php');
    return true;
	}
	
}





