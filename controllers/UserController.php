<?php 


class UserController
{

	public function actionRegister()
	{
		$nickname = '';
		$email = '';
		$password = '';
		$result = false;

		if (isset($_POST['submit'])){
			$nickname = $_POST['Nick'];
			$email = $_POST['mail'];
			$password = $_POST['pass'];

			$errors = false;

			// Никнейм
			if (!User::checkNick($nickname)) {
				$errors[] = 'НикНейм не должен быть меньше 3 символов';
			}
			// email
			if (!User::checkEmail($email)) {
				$errors[] = 'Неправильный email';
			}
			// password
			if (!User::checkPassword($password)) {
				$errors[] = 'Пароль не должен быть меньше 6 символов';
			}
			// email = email
			if (User::checkEmailExists($email)) {
				$errors[] = 'Такой email уже существует';
			}

			if ($errors == false) {
				$result = User::register($nickname, $email, $password);
			}

		}

		require_once(ROOT . '/views/user/register.php');

		return true;
	}

	public function actionLogin()
	{
		$email = '';
		$password = '';

		if (isset($_POST['submit'])){
			$email = $_POST['mail'];
			$password = $_POST['pass'];

			$errors = false;

			// email
			if (!User::checkEmail($email)) {
				$errors[] = 'Неправильный email';
			}
			// password
			if (!User::checkPassword($password)) {
				$errors[] = 'Пароль не должен быть меньше 6 символов';
			}

			$userId = User::checkUserData($email, $password);

			if ($userId == false) {
				$errors[] = 'Неправильные данные для входна на сайт';
			} else {
				User::auth($userId);
				// выполнение после входа
				echo $userId;
				// header ("Location: /cabinet/");
			}

		}

		require_once(ROOT . '/views/user/login.php');

		return true;
	}

	// выход с сайта 
	public function actionLogout()
	{
		session_start();
		unset($_SESSION["user"]);
		header("Location: /");
	}
}
