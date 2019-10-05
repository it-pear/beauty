<?php 

class AdminCategoryController extends AdminBase 
{

	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список категорий 
		$categoriesList = Category::getCategoriesList();

		require_once(ROOT . '/views/admin_categories/index.php');
    return true;
	}



	// создание категории
	public function actionCreate()
	{
		// проверяем доступ
		self::checkAdmin();

		// Обработка формы
      if (isset($_POST['submit'])) {
        // Получаем данные из формы
        $options['name'] = $_POST['name'];
        $options['sort_order'] = $_POST['sort_order'];
        $options['status'] = $_POST['status'];
        // Флаг ошибок в форме
        $errors = false;
        // При необходимости можно валидировать значения нужным образом
        if (!isset($options['name']) || empty($options['name'])) {
            $errors[] = 'Заполните поля';
        }
        if ($errors == false) {
          Category::createCategory($options);
          // Перенаправляем пользователя на страницу управлениями товарами
          header("Location: /admin/categories");
        }
      }

		require_once(ROOT . '/views/admin_categories/create.php');
    return true;
	}

	// обновить категорию
	public function actionUpdate($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список категорий
		// $categoriesList = Category::getCategoriesListAdmin();

    $category = Category::getCategoryById($id);

		// Обработка формы
    if (isset($_POST['submit'])) {
      // Получаем данные из формы
      $name = $_POST['name'];
      $sortOrder = $_POST['sort_order'];
      $status = $_POST['status'];
      // Сохраняем изменения
      Category::updateCategoryById($id, $name, $sortOrder, $status);
      // Перенаправляем пользователя на страницу управлениями категориями
      header("Location: /admin/categories");
    }

		require_once(ROOT . '/views/admin_categories/update.php');
    return true;
	}

	// удаление товара
	public function actionDelete($id)
	{
		// проверяем доступ
		self::checkAdmin();

		if (isset($_POST['submit'])) {

			Category::deleteCategoryById($id);

			// перенаправление
			header("Location: /admin/categories");
		}

		require_once(ROOT . '/views/admin_categories/delete.php');
    return true;
	}

}





















