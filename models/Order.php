<?php 

class order
{


	public static function save($userName, $userEmail, $userPhone, $userMessege, $userCity, $userOffice, $products)
	{
		$products = json_encode($products);
		$db = Db::getConnection();

		$sql = 'INSERT INTO product_order (user_name, user_email, user_phone, user_messege, user_city, user_office, products) '
		. 'VALUES (:user_name, :user_email, :user_phone, :user_messege, :user_city, :user_office, :products)'; 

		$result = $db->prepare($sql);
		$result->bindParam(':user_name', $userName, PDO::PARAM_STR);
		$result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
		$result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
		$result->bindParam(':user_messege', $userMessege, PDO::PARAM_STR);
		$result->bindParam(':user_city', $userCity, PDO::PARAM_STR);
		$result->bindParam(':user_office', $userOffice, PDO::PARAM_STR);
		$result->bindParam(':products', $products, PDO::PARAM_STR);

		return $result->execute();
	}

	/**
   * Возвращает текстое пояснение статуса для заказов
   */
  public static function getStatusText($status)
  {
    switch ($status) {
      case '1':
        return 'Новый заказ';
        break;
      case '2':
        return 'На рассмотрении';
        break;
      case '3':
        return 'Оплачено';
        break;
    }
  }


 	// получение данных о заказах
  public static function getOrdersList()
  {
    $db = Db::getConnection();

    $result = $db->query('SELECT id, user_name, user_phone, date, status FROM product_order ORDER BY id DESC');
    $ordersList  = array();

    $i = 0;
    while ($row = $result->fetch()) {
      $ordersList[$i]['id'] = $row['id'];
      $ordersList[$i]['user_name'] = $row['user_name'];
      $ordersList[$i]['user_phone'] = $row['user_phone'];
      $ordersList[$i]['date'] = $row['date'];
      $ordersList[$i]['status'] = $row['status'];
      $i++;
    }

    return $ordersList;
  }

  // удаление товкатегорииара по id
  public static function deleteOrderById($id)
  {
    $db = Db::getConnection();

    $sql = 'DELETE FROM product_order WHERE id = :id';

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    return $result->execute();
  }


  // получение id заказа со всеми данными
  public static function getOrderById($id)
  {
    $id = intval($id);

    if ($id) {                        
      $db = Db::getConnection();
      
      $result = $db->query('SELECT * FROM product_order WHERE id=' . $id);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      
      return $result->fetch();
    }
  }


  // обновить заказ
  public static function updateOrderById($id, $user_name, $user_phone, $user_email, $user_messege, $user_city, $user_office, $date, $status)
  {
    $db = Db::getConnection();

    // текс тзапроса к бд
    $sql = "UPDATE product_order 
        SET 
          user_name = :user_name,
					user_phone = :user_phone,
					user_email = :user_email,
					user_messege = :user_messege,
					user_city = :user_city,
					user_office = :user_office,
					date = :date,
					status = :status
        WHERE id = :id";

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':user_name', $user_name, PDO::PARAM_STR);
    $result->bindParam(':user_phone', $user_phone, PDO::PARAM_STR);
    $result->bindParam(':user_email', $user_email, PDO::PARAM_STR);
    $result->bindParam(':user_messege', $user_messege, PDO::PARAM_STR);
    $result->bindParam(':user_city', $user_city, PDO::PARAM_STR);
    $result->bindParam(':user_office', $user_office, PDO::PARAM_STR);
    $result->bindParam(':date', $date, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_INT);
    return $result->execute();
  }


}





















