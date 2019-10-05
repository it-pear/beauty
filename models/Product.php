<?php 


class Product{

	const SHOW_BY_DEFAULT = 8;

	// result array product
	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT){

		$db = Db::getConnection();
		$productsList = array();

		$result = $db->query('SELECT id, name, price, image, is_new FROM product '
			. 'WHERE status = "1" '
			. 'ORDER BY id DESC '
			. 'LIMIT ' . $count);

		$i = 0;
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['image'] = $row['image'];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['is_new'] = $row['is_new'];
			$i++;
		}

		return $productsList;
	}

	/**
   * Returns an array of products
   */
  public static function getProductsListByCategory($categoryId = false, $page = 1)
  {
      if ($categoryId) {

      		$page = intval($page);
      		$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

          $db = Db::getConnection();            
          $products = array();
          $result = $db->query("SELECT id, name, price, image, is_new FROM product "
                  . "WHERE status = '1' AND category_id = '$categoryId' "
                  . "ORDER BY id DESC "                
                  . "LIMIT ".self::SHOW_BY_DEFAULT
                  . ' OFFSET '. $offset
                );

          $i = 0;
          while ($row = $result->fetch()) {
              $products[$i]['id'] = $row['id'];
              $products[$i]['name'] = $row['name'];
              $products[$i]['image'] = $row['image'];
              $products[$i]['price'] = $row['price'];
              $products[$i]['is_new'] = $row['is_new'];
              $i++;
          }

          return $products;       
      }
  }

  // получение id товара со всеми данными
  public static function getProductById($id)
  {
      $id = intval($id);

      if ($id) {                        
          $db = Db::getConnection();
          
          $result = $db->query('SELECT * FROM product WHERE id=' . $id);
          $result->setFetchMode(PDO::FETCH_ASSOC);
          
          return $result->fetch();
      }
  }

  /**
   * Возвращает путь к изображению
   */
  public static function getImage($id)
  {
      // Название изображения-пустышки
      $noImage = 'no-image.jpg';
      // Путь к папке с товарами
      $path = '/upload/images/products/';
      // Путь к изображению товара
      $pathToProductImage = $path . $id . '.jpg';
      if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
          // Если изображение для товара существует
          // Возвращаем путь изображения товара
          return $pathToProductImage;
      }
      // Возвращаем путь изображения-пустышки
      return $path . $noImage;
  }
  
  /**
   * Returns total products
   */
  public static function getTotalProductsInCategory($categoryId)
  {
      $db = Db::getConnection();

      $result = $db->query('SELECT count(id) AS count FROM product '
              . 'WHERE status="1" AND category_id ="'.$categoryId.'"');
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $row = $result->fetch();

      return $row['count'];
  }

  /**
   * Returns products
   */
  public static function getProductsByIds($idsArray)
  {
      $products = array();
      
      $db = Db::getConnection();
      
      $idsString = implode(',', $idsArray);

      $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

      $result = $db->query($sql);        
      $result->setFetchMode(PDO::FETCH_ASSOC);
      
      $i = 0;
      while ($row = $result->fetch()) {
        $products[$i]['id'] = $row['id'];
        $products[$i]['code'] = $row['code'];
        $products[$i]['name'] = $row['name'];
        $products[$i]['price'] = $row['price'];
        $i++;
      }

      return $products;
  }

  // получение списка продуктов
  public static function getProductsList()
  {
    $db = Db::getConnection();

    $result = $db->query('SELECT id, name, price FROM product ORDER BY id ASC');
    $productsList = array();

    $i = 0;
    while ($row = $result->fetch()) {
      $productsList[$i]['id'] = $row['id'];
      $productsList[$i]['name'] = $row['name'];
      $productsList[$i]['price'] = $row['price'];
      $i++;
    }

    return $productsList;
  }

  // удаление товара по id
  public static function deleteProductById($id)
  {
    $db = Db::getConnection();

    $sql = 'DELETE FROM product WHERE id = :id';

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    return $result->execute();
  }

  // обновить товар
  public static function updateProductById($id, $options)
  {
    $db = Db::getConnection();

    // текс тзапроса к бд
    $sql = "UPDATE product 
        SET 
          name = :name,
          price = :price,
          category_id = :category_id,
          brand = :brand,
          availability = :availability,
          description = :description
        WHERE id = :id";

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
    $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
    $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
    $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
    $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
    $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
    return $result->execute();
  }

  // создать товар
  public static function createProduct($options)
  {
    $db = Db::getConnection();

    // текс тзапроса к бд
    $sql = 'INSERT INTO product ' 
           . '(name, price, category_id, brand, availability, description)'
           . 'VALUES '
           . '(:name, :price, :category_id, :brand, :availability, :description)';

    $result = $db->prepare($sql);
    $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
    $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
    $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
    $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
    $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
    $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
    if ($result->execute()) {
      return $db->lastInsertId();
    }
    return 0;
  }

  

  
}
















 ?>