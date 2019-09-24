<?php 

class User 
{

	public static function register($nickname, $email, $password)
	{
		$db = Db::getConnection();

		$sql = 'INSERT INTO user (nick, email, password)' . 'VALUES (:nick, :email, :password)';
		$result = $db->prepare($sql);
		$result->bindParam(':nick', $nickname, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);

		return $result->execute();
	}

	// public static function register($nickname, $email, $password)
	// {
	// 	$db = Db::getConnection();
        
 //    $sql = 'INSERT INTO user (nick, email, password) '
 //            . 'VALUES (:nick, :email, :password)';
    
 //    $result = $db->prepare($sql);
 //    $result->bindParam(':nick', $nickname, PDO::PARAM_STR);
 //    $result->bindParam(':email', $email, PDO::PARAM_STR);
 //    $result->bindParam(':password', $password, PDO::PARAM_STR);
    
 //    return $result->execute();
	// }

	public static function checkUserData($email, $password)
	{
		$db = Db::getConnection();

		$sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_INT);
		$result->bindParam(':password', $password, PDO::PARAM_INT);
		$result->execute();

		$user = $result->fetch();

		if ($user) {
			return $user['id'];
		}
		return false;

	}

	public static function auth($userId)
	{
		$_SESSION['user'] = $userId;
	}

	// проверка авторизации 
	public static function checkLogged()
	{
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
		header("Location: /user/login");
	}

	// проверяем поля переданные с формы

	// проверка поля никнейм
	public static function checkNick($nickname)
	{
		if (strlen($nickname) >= 3){
			return true;
		}
		return false;
	}

	// проверка поля емаил
	public static function checkEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	// проверка поля никнейм
	public static function checkPassword($password)
	{
		if (strlen($password) >= 6){
			return true;
		}
		return false;
	}

	public static function checkEmailExists($email)
	{
		$db = Db::getConnection();
		$sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

		if ($result->fetchColumn()) {
			return true;
		}return false;

	}

}