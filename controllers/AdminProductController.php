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

	// создание товара
	public function actionCreate()
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список товаров
		$categoriesList = Category::getCategoriesListAdmin();

		// Обработка формы
        if (isset($_POST['submit'])) {
          // Получаем данные из формы
          $options['name'] = $_POST['name'];
          $options['price'] = $_POST['price'];
          $options['category_id'] = $_POST['category_id'];
          $options['brand'] = $_POST['brand'];
          $options['availability'] = $_POST['availability'];
          $options['description'] = $_POST['description'];
          // Флаг ошибок в форме
          $errors = false;
          // При необходимости можно валидировать значения нужным образом
          if (!isset($options['name']) || empty($options['name'])) {
              $errors[] = 'Заполните поля';
          }
          if ($errors == false) {
            // Если ошибок нет
            // Добавляем новый товар
            $id = Product::createProduct($options);
            // Если запись добавлена
            if ($id) {
              // Проверим, загружалось ли через форму изображение
              if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                // Если загружалось, переместим его в нужную папке, дадим новое имя
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
              }
            };
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/products");
          }
        }

		require_once(ROOT . '/views/admin_products/create.php');
    return true;
	}

	// обновить товар
	public function actionUpdate($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список товаров
		$categoriesList = Category::getCategoriesListAdmin();

		$product = Product::getProductById($id);

		// Обработка формы

    if (isset($_POST['submit'])) {

      // Получаем данные из формы
      $options['name'] = $_POST['name'];
      $options['price'] = $_POST['price'];
      $options['category_id'] = $_POST['category_id'];
      $options['brand'] = $_POST['brand'];
      $options['availability'] = $_POST['availability'];
      $options['description'] = $_POST['description'];


      // Сохраняем изменения
      if (Product::updateProductById($id, $options)) {
        // Если запись сохранена
        // Проверим, загружалось ли через форму изображение
        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
          // Если загружалось, переместим его в нужную папке, дадим новое имя
          move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
        }
      }
      // Перенаправляем пользователя на страницу управлениями товарами
      header("Location: /admin/products");
    }

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





















