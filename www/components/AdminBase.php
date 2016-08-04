<?php


  abstract class AdminBase 
{
  public static function CheckAdmin ()
  {
      $idusers = User::CheckLogged();// берем id пользователя, если этот пользователь не авторизовался выкидываем на страницу ввода логина
     
      $user = UsersTable::find_first_with_fields(array('idusers' => $idusers), array('role'));// находим его роль
   
      if ($user->role == 'admin')// если пользовател админ продолжаем раоту
        return true;

      die ('Access denied');// иначе запрящаем доступ




  }
  
  }


?>