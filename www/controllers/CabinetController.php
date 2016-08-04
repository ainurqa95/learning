<?php


	class CabinetController
	{
		
            public function actionIndex ()
        {
            
            //$userid = User::CheckLogged();
         //   echo $userid;
            require_once(ROOT.'/views/cabinet/index.php');
        
            return true;


        }
        public function actionEdit()
        {
            $userid = User::CheckLogged(); // Вытаскиваем из сессии userid если мы вошли инач нас выикнет отсюда
        
            $UsersData = UsersTable::findFirst(array('idusers' => $userid));// достаем из таблицы пользователя всю информацию о нем
           // print_r($UsersData);
            $error = false;
            if(isset($_POST['submit'])){

                    if(!User::checkName($_POST['second_name']) or !User::checkName($_POST['name']) or !User::checkName($_POST['third_name'])  ){
                $errors[] = 'ФИО не должно быть короче 2-х символов';
                 $error = true;
            }
            if(!User::checkLogin($_POST['login'])){
                $errors[] = 'Неверный логин';
                 $error = true;
            }
            if(!User::checkPassword($_POST['password'])){
                $errors[] = 'Пароль не соответсвует формату';
                 $error = true;
            }
            if(!isset($_POST['password2'])){
                $errors[] = 'Вы не ввели повторный пароль';
                 $error = true;
            } else
            if( $_POST['password'] != $_POST['password2'] ){
                $errors[] = 'Пароли не совпадают';
                 $error = true;
            }


           // print_r($errors);
                if(!$error){
                    echo "hello";
                    $EditUser = new User();
                    $result = $EditUser->UserEdit($_POST, $userid); // делем update соответсующего пользователя
                    $UsersData = $EditUser->user; // чтобы наши изменения вступили в силу во вьюшке




                }




            }




            require_once(ROOT.'/views/cabinet/edit.php');
            return true;

        }
	}


?>