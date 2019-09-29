<?php 

class order
{
	public static function save($userName, $userPhone, $userEmail, $userMessege, $userCity, $userOffice, $products)
	{
		$products = json_encode($products);
		$db = Db::getConnection();

		$sql = 'INSERT INTO product_order (user_name, user_phone, user_email, user_messege, user_city, user_office, products) '
		. 'VALUES (:user_name, :user_phone, :user_email, :user_messege, :user_city, :user_office, :products)';

		$result = $db->prepare($sql);
		$result->bindParam(':user_name', $userName, PDO::PARAM_STR);
		$result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
		$result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
		$result->bindParam(':user_messege', $userMessege, PDO::PARAM_STR);
		$result->bindParam(':user_city', $userCity, PDO::PARAM_STR);
		$result->bindParam(':user_office', $userOffice, PDO::PARAM_STR);
		$result->bindParam(':products', $products, PDO::PARAM_STR);

		return $result->execute();
	}
}





















