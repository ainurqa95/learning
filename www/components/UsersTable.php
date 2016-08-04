<?php

class UsersTable extends MyORM {

           protected $table = 'users';

           protected static $tableName = 'users';

           public $fieldsList = array('idusers', 'login', 'email', 'password', 'name', 'second_name', 'third_name' , 'address', 'phone', 'index', 'date_reg', 'is_active', 'role');
 
  
  }



?>