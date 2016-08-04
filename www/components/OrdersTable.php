<?php

class OrdersTable extends MyORM {

           protected $table = 'orders';

           protected static $tableName = 'orders';

           public $fieldsList = array('idorders', 'users_idusers', 'datetime', 'user_phone' , 'user_comment', 'ship_method', 'payment_method', 'status', 'user_name', 'email', 'products' );
 
  
  }



?>