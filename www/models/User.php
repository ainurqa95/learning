<?php

class User
{
      private $pdo;
      public $user; 

      public function __construct() // конструктор создаем пользователя в UserCntroller пришлось сделать 'rptvgkzh rkfccf nfv'
  {
        $this->pdo = new PDOConfig();
        $this->user = new UsersTable($this->pdo);


  }
  public static function CheckIsFillFields (&$_POST =  array(), &$UsersData =  array(), &$errors = array(), &$error = false, $fields=array()) // проверка на заполненность полей
  {

      foreach ($_POST as $key => $value) {
            $value = trim($value);
            $value = htmlspecialchars($value);

           if(array_key_exists($key, $fields) && is_null($value)) // про
           {
            $errors[] = "поле $fields[$key]  не заполнено   <br/>";
               $error = true;

           }
           $UsersData[$key] = $_POST[$key];
        }
      



  }

  public static function CheckLogged() // проверяем вошел ли пользователь, если нет он не имеет права смотреть эту страницу 
  {
      
      if (isset($_SESSION['idusers']))
      {
        return $_SESSION['idusers'];

      }
      else
        header("Location: /user/login"); 


  }
  public static function isLogged() // проверяем вошел ли пользователь, если нет он не имеет права смотреть эту страницу 
  {
      
      if (isset($_SESSION['idusers']))
      {
        return true;

      }
      else
        return false;


  }
  public static function Auth($params)// создаем сессию если пользователь авторизовался заполняем параметры
  {
    
       //print_r($params);
       $_SESSION['idusers'] = $params->idusers;
       $_SESSION['login'] = $params->login;
       $_SESSION['name'] = $params->name;
       $_SESSION['second_name'] = $params->second_name;
       $_SESSION['third_name'] = $params->third_name;


  }
     public  function UserRegister ($UserData =  array()) // Регитрируем пользователя
     {
        

          foreach ($UserData as $key => $value) {
            $this->user->$key = $value;
          }
          $this->user->insert();



     }
     public function UserEdit ($UserData =  array(), $userid) // Регитрируем пользователя
     {
          
          foreach ($UserData as $key => $value) {
            if(($key!= 'password2' or $key!= 'submit') && $value != '')
                 $this->user->$key = $value;

          }

          $this->user->idusers = $userid;
        
          $this->user->update();
          


     }
     public static function CheckPasswordLoginInBd ($login,$password) // проверяет есть ли в бд человек с таким логином при регистрации
    {
    
       
        $x = UsersTable::find_first_with_fields(array('login' => $login), array('idusers','password','name','login','second_name','third_name'));
        //print_r($x); echo $password;
        if(isset($x) or $x->password == $password){
          return $x;

        }     
        else return false;
    }

    public static function CheckloginInBd ($login) // проверяет есть ли в бд человек с таким логином при регистрации
    {
    
       // $user->set('idusers', 1);
       // $user->set('name', 'dsaf');
    
        //print_r($user);
        //$user->update();
       // $x = UsersTable::find_first_with_fields(array('login' => $login), array('idusers', 'name', 'password'));
       // $x = UsersTable::find_all_with_fields(array(), array('idusers', 'name', 'password'), $offset=1, $limit=2);
        $x = UsersTable::find_first_with_fields(array('login' => $login), array('idusers'));
        if(isset($x))
        return false;
        else return true;
    }
        public static function CheckEmailInBd ($email) // проверяет есть ли в бд человек с таким логином при регистрации
    {
    
        $x = UsersTable::find_first_with_fields(array('email' => $email), array('idusers'));
        if(isset($x))
        return false;
        else return true;
    }


	    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }
	public static function checkLogin($login)
    {
        $pattern = "#^[a-zA-Z0-9]+$#";
        if (strlen($login) >= 2 && preg_match($pattern, $login)) {
           				 return true;
            }
        return false;
    }
public static function checkPassword($password)
    {
        $pattern = "#^[a-zA-Z0-9]+$#";
       if (strlen($password) >= 6 && preg_match($pattern, $password)) {
          	return true;
        }
        return false;
    }

     public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
      public static function checkPhone($phone)
    {
      $pattern = "#^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$#";
          if (strlen($phone) >= 6 && preg_match($pattern, $phone)) {
            return true;
        }
    
        return false;
    }
    public static function getInfoAboutUser($idusers)
    {

        $UserData = UsersTable::find_first_with_fields(array('idusers' => $idusers), array('name', 'email', 'second_name', 'third_name', 'address', 'phone'));
        return $UserData->attributes;


    }
    




	
}