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

}




