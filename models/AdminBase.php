<?php 

abstract class AdminBase 
{

	// проверка на админа
	public static function checkAdmin()
	{
		
		// проверка авторизации пользоватедля
		$userId = User::checkLogged();

		// получаем инфу с пользователя
		$user = User::getUserById($userId); 

		// авторизовать если админ
		if ($user['role'] == 'admin') {
			return true;
		}

		// закрыть доступ
		die('Доступ закрыт!');
	}

}


















