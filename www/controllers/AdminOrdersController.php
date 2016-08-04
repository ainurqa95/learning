<?php

    /* наследуют AdminBase чтобы пользоватья бщим методом CheckAdmin
    */
	class AdminOrdersController extends AdminBase {

		public function actionIndex ()
		{	
	   
   	     // проверка доступа

        self::CheckAdmin();
        // получаем список товаров
        $All_Orders = Orders::getAllOrders();
        
        $statues = StatusTable::find();	
		require_once(ROOT.'/views/admin_orders/index.php');
		
		return true;


		}
		public function actionDelete($idorders) // удалаем товар из базы данных
		{	
	   
   	     // проверка доступа
			self::CheckAdmin();
		
		$order_to_delete = Orders::getOrderById($idorders); 
		;
		if(isset($_POST['submit'])){
			
				Orders::DeleteOrder($idorders);

				header("Location: /admin/orders/ "); 
				 
		}

		require_once(ROOT.'/views/admin_orders/delete.php');
		
		return true;


		}
		public function actionUpdate ($idorders)
		{	
	   
   	     // проверка доступа
	
        self::CheckAdmin();
 
		$order_to_update = Orders::getOrderById($idorders);
		$ship_method = ShipMethodTable::find(); // способы доставки для селекта во вьюхе
		$payment_method = PaymentMethodTable::find();
		$statues = StatusTable::find();
		 
		if(isset($_POST['submit'])){
				$fields = array("user_phone" => "Телефон", "ship_method" => "Способ доставки" , "payment_method" => "Способ оплаты", "user_name" => "Имя клиента");
   				$error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		

			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
   		 
   		 	if(!$error){

			Orders::UpdateOrder($UsersData,$idorders); // добавляем в бд  s
				header("Location: /admin/orders/ "); 

			}





		}

		require_once(ROOT.'/views/admin_orders/update.php');
		
		return true;


		}
		public function actionView ($idorders)
		{	
	   
   	     // проверка доступа
		 
        self::CheckAdmin();

        $order_to_view = Orders::getOrderById($idorders);
		$statues = StatusTable::find();	
		$ship_method = ShipMethodTable::find(); // способы доставки для селекта во вьюхе
		$payment_method = PaymentMethodTable::find();

		$products_of_orders = json_decode($order_to_view->products,true);
		//print_r($products_of_orders);//  array ( [30] => 1 [15] => 2) 
		//$products_of_orders_ids = array_keys($products_of_orders);
		//print_r($products_of_orders); Array ( [0] => 30, [1] => 15 ) 
		$products_of_orders_list = Products::getProductsListByIds($products_of_orders);


		require_once(ROOT.'/views/admin_orders/view.php');
		
		return true;


		}

       


	}


?>