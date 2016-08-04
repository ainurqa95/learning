<?php


	class UserController
	{
		public function actionRegister ()
		{	
	   
   		$fields = array("second_name" => "Фамилия", "name" => "Имя" , "third_name" => "Отчество", "login" => "Логин", "password" => "Пароль", "password2" => "Повтор пароля",  "email" => "email" );

		$error = false;
		$UsersData =  array();
        $errors = array();
        
		//$massiv = 
		if(isset($_POST['submit'])){

		
             User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields); // проверка на заполненность полей
         //   print_r($UsersData);
     		if(!User::checkName($UsersData['second_name']) or !User::checkName($UsersData['name']) or !User::checkName($UsersData['third_name'])  ){
     			$errors[] = 'ФИО не должно быть короче 2-х символов';
     			 $error = true;
     		}
     		if(!User::checkLogin($UsersData['login'])){
     			$errors[] = 'Неверный логин';
     			 $error = true;
     		}
           
            if(!User::checkEmail($UsersData['email'])){
                $errors[] = 'email не соответсвует формату';
                 $error = true;
            }
     		if(!User::checkPassword($UsersData['password'])){
     			$errors[] = 'Пароль не соответсвует формату';
     			 $error = true;
     		}
     		if( $UsersData['password'] != $UsersData['password2'] ){
     			$errors[] = 'Пароли не совпадают';
     			 $error = true;
     		}
     		if(!isset($UsersData['check'])){
                $errors[] = 'вы не согласились с обработкой данных';
     			$error = true;
     		}
     		if(!User::CheckloginInBd($UsersData['login']))
            {
                $errors[] = 'пользователь с таким loginom уже существует';
                $error = true;

            }
            if(!User::CheckEmailInBd($UsersData['email']))
            {
                $errors[] = 'пользователь с таким email уже существует';
                $error = true;

            }
                if(!User::checkPhone($UsersData['phone']))
            {
                $errors[] = 'не корректный номер телефона';
                $error = true;

            }


            if (!$error){ //нет ошибок то регаем пользователя
                $UsersData['password'] = md5("hello".$UsersData['password']);
                $NewUser = new User();
                $result = $NewUser-> UserRegister($UsersData);

            }

		}

		require_once(ROOT.'/views/user/register.php');
		
		return true;


		}

        public function actionLogin()
        {

            $fields = array ("login" => "Логин", "password" => "Пароль");
            $error = false;
            $UsersData =  array();
             $errors = array();
             if(isset($_POST['submit'])){
           User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields); // проверка на заполненность полей


            $user = User::CheckPasswordLoginInBd($_POST['login'], md5("hello".$UsersData['password']));
            if(!$user){
                 $errors[] = 'неверный логин или пароль';
                 $error = true;

            }else{
               // print_r($user);
               User::Auth($user); // если данные правильные включаем сессию
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet/"); 

            }

        }
            
            require_once(ROOT.'/views/user/login.php');
        
            return true;



        }
        public function actionLogout(){

            $_SESSION = array();
            session_unset();
            session_destroy();
            header("Location: /"); 



        }




	}


?>