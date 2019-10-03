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

	public function actionCreate()
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список товаров
		$categoriesList = Category::getCategoriesListAdmin();

		require_once(ROOT . '/views/admin_products/create.php');
    return true;
	}

	public function actionUpdate()
	{
		// проверяем доступ
		self::checkAdmin();

		require_once(ROOT . '/views/admin_products/update.php');
    return true;
	}

	// удаление товара
	public function actionDelete($id)
	{
		// проверяем доступ
		self::checkAdmin();

		if (isset($_POST['submit'])) {

			Product::deleteProductById($id);

			// перенаправление
			header("Location: /admin/products");
		}

		require_once(ROOT . '/views/admin_products/delete.php');
    return true;
	}

}





















