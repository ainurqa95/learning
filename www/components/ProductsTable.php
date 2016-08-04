<?php

class ProductsTable extends MyORM {

           protected $table = 'products';

           protected static $tableName = 'products';

           public $fieldsList = array('idproducts', 'name', 'image', 'code', 'price', 'availability', 'brand' , 'description', 'characteristic', 'is_new', 'is_recommended', 'status', 'second_category_idsecond_cat', 'second_category_main_category_idmain_cat', 'idbrands','skidka');
 
  
  }



?>