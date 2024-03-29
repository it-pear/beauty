<?php 

class Cart
{
	
	// добавление кол-ва товаров в массив с их количеством
	public static function addProduct($id)
	{
		$id = intval($id);

		$productsInCart = array();

		if (isset($_SESSION['products'])) {
			$productsInCart = $_SESSION['products'];
		}

		if (array_key_exists($id, $productsInCart)) {
			$productsInCart[$id] ++;
		} else {
			$productsInCart[$id] = 1;
		}

		$_SESSION['products'] = $productsInCart;
		return self::countItems();
	}

	// Удаление одного товара из массива 
	public static function removeProduct($id)
	{
		$id = intval($id);

		$productsInCart = array();
		$productsInCart = $_SESSION['products'];

		// проверка состояния товара
		if ($productsInCart[$id]<=1) {
			unset($productsInCart[$id]);
			return self::countItems();
		} else {
			if(array_key_exists($id, $productsInCart)) {
				$productsInCart[$id]--;
			}
			$_SESSION['products'] = $productsInCart;
			return self::countItems();

		}
			
	}

	public static function deleteProduct($id)
	{
		// получаем массив
		$productsInCart = self::getProducts();
		// удаляем нужный id из массива
		unset($productsInCart[$id]);
		// записываем кастомизированные данные в сессию
		$_SESSION['products'] = $productsInCart;
	}

	// вывод кол-ва товаров в корзине
	public static function countItems()
	{
		if (isset($_SESSION['products'])) {
			$count = 0;
			foreach ($_SESSION['products'] as $id => $quantity) {
				$count = $count + $quantity;
			}
			return $count;
		} else {
			return 0;
		}
	}

	public static function getProducts()
	{
		if (isset($_SESSION['products'])) {
			return $_SESSION['products'];
		}
		return false;
	}

	public static function getTotalPrice($products)
  {
    $productsInCart = self::getProducts();

    $total = 0;
    
    if ($productsInCart) {            
      foreach ($products as $item) {
        $total += $item['price'] * $productsInCart[$item['id']];
      }
    }
    return $total;
  }

  public static function clear()
  {
  	if (isset($_SESSION['products'])) {
  		unset($_SESSION['products']);
  	}
  }

}





