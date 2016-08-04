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

			Orders::UpdateOrder($UsersData,$idorders); // добавляем в бд  товар и запоминем вго новый id
			/*if($last_insert){// если запись добавлена
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение

						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. "/uploads/images");

					}



				}
				*/
				header("Location: /admin/orders/ "); 

			}





		}

		require_once(ROOT.'/views/admin_orders/update.php');
		
		return true;


		}
		public function actionCreate ()
		{	
	   
   	     // проверка доступа
		
   	
   		 
		 
        self::CheckAdmin();

        $categoryList = Category::getCategoryList();
		$SecondCategoryList = Category::getSecondCategoryList(); // категории для выпадающего списка
		if(isset($_POST['submit'])){
				$fields = array("name" => "Наименование товара", "price" => "Цена товара" , "brand" => "Брэнд", "description" => "Полное описание", "avaialabilty" => "Доступность товара",  "is_new" => "Новый товар", "is_recommended" => "Рекомендуемый товар" , "idsecond_cat" => "Вторая категория","image" => "изображение", );
   				$error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		

			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
   		 
   		 	if(!$error){
			$last_insert = Products::AddProduct($UsersData); // добавляем в бд  товар и запоминем вго новый id
			/*if($last_insert){// если запись добавлена
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение

						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. "/uploads/images");

					}



				}
				*/
				header("Location: /admin/products/ "); 

			}





		}


		require_once(ROOT.'/views/admin_products/create.php');
		
		return true;


		}

       


	}


?>