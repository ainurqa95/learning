<?php

class CategorySecondTable extends MyORM {

           protected $table = 'second_category';

           protected static $tableName = 'second_category';

           public $fieldsList = array('idsecond_cat', 'name', 'status', 'sort_order', 'name_uri', 'image', 'main_category_idmain_cat');
 
  
  }



?>