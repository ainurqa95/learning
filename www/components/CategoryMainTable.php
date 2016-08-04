<?php

class CategoryMainTable extends MyORM {

           protected $table = 'main_category';

           protected static $tableName = 'main_category';

           public $fieldsList = array('idmain_cat', 'name', 'status', 'sort_order', 'name_uri', 'image');
 
  
  }



?>