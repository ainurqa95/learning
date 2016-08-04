<?php

class PaymentMethodTable extends MyORM {

           protected $table = 'payment_method';

           protected static $tableName = 'payment_method';

           public $fieldsList = array('idpayment_method', 'name');
 
  
  }



?>