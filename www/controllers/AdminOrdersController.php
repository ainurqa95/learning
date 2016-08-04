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
		
			




		


		require_once(ROOT.'/views/admin_orders/view.php');
		
		return true;


		}

       


	}


?>