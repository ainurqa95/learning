<?php

	class CartController
	{
		public function actionAdd ($id_products) //добавляем товары в козину
		{
			Cart::AddProductToCart($id_products);
			// Корзину в сессии храним как array ( [1] => 3, [4] => 4) где ключ это idproducts значение количество товара
			// 

			//echo "hellp";
			$refferer = $_SERVER['HTTP_REFERER'];// смотрим с какой страницы пришел пользователь перенаправляем его туда же
			header( "Location: $refferer");
			//return true;


		}
		public function actionAddAjax ($id_products)
		{
			
			echo Cart::AddProductToCart($id_products); // ответ на асинхронный запос 
			

			return true;


		}
		public function actionIndex ()
		{
			$our_products_in_cart = array(); // его передадим по ссылке в методе SumOfPricesInCart он передается по ссылке в него закидывается инфа о товарах которые доабвил в корзину пользователь
			$sum = Cart::SumOfPricesInCart($our_products_in_cart);


			require_once(ROOT.'/views/cart/index.php');
			return true;
		}
		public function actionDelete ($idproducts) //
		{
			// удаляем товар из корзины	
			
			Cart::DeleteProductInCart($idproducts);
			$refferer = $_SERVER['HTTP_REFERER'];// смотрим с какой страницы пришел пользователь перенаправляем его туда же
			header( "Location: $refferer");
			//return true;
		


		}
		public function actionOrder ()
		{
			$our_products_in_cart = array(); // его передадим по ссылке в методе SumOfPricesInCart он передается по ссылке в него закидывается инфа о товарах которые доабвил в корзину пользователь
			$sum = Cart::SumOfPricesInCart($our_products_in_cart);
			$ship_method = ShipMethodTable::find(); // способы доставки для селекта во вьюхе
			$payment_method = PaymentMethodTable::find();
	
			if(isset($_POST['submit'])){
						//проверяем корректность заполнения формы
				$fields = array("second_name" => "Фамилия", "name" => "Имя" , "third_name" => "Отчество",   "email" => "email", "phone" => "телефон", 'payment_method');
				$error = false;
				$errors=array();
				  User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields); // проверка на заполненность полей

     		if(!User::checkName($UsersData['second_name']) or !User::checkName($UsersData['name']) or !User::checkName($UsersData['third_name'])  ){
     			$errors[] = 'ФИО не должно быть короче 2-х символов';
     			 $error = true;
     		}

            if(!User::checkEmail($UsersData['email'])){
                $errors[] = 'email не соответсвует формату';
                 $error = true;
            }
              if(!User::checkPhone($UsersData['phone']))
            {
                $errors[] = 'не корректный номер телефона';
                $error = true;

            }
            if(!$_SESSION['products'])
            {
                $errors[] = 'корзина пуста';
                $error = true;

            }
            if(!$error){// пользователь заполнил корректно поля формы заказа
            	// закидываем корзину в тблицу orders

            	$UserName = $UsersData['second_name']. ' '. $UsersData['name'].' '. $UsersData['third_name'];
            	if(!User::isLogged()) // если пользователь авторизован
            	{
            		$user_id = 0;

            	}else{
            		$user_id = User::CheckLogged();
            	}

            		# code...
            	// закидываем данные заказа 
            	Cart::Save($UsersData, $user_id,$UserName,$_SESSION['products']);
            	
            	// отправляем сообщение о заказе админу
            		
            	$admin_email= 'ainur_ahmetgalie@mail.ru';
            	$message = 'https://ainur-shop.ru/admin/orders';
            	$subject = 'Новый заказ';
            	mail($admin_email, $subject, $message);
            	$_SESSION['products'] = array();// обнуялем корзину



            }
     	



			}else { // пользователь еще не отправил форму заказа
					if(isset($our_products_in_cart))// елси поьзователь добавлял товары в корзину
					{
						if(User::isLogged())// если пользователь авторизовался, то нужно добавить в поля формы его данные
						{
							$user_id = User::CheckLogged();
							$UsersData = User::getInfoAboutUser($user_id);
							

						}
						else {
							$UsersData = array();

						}


					}else{// елси поьзователь ничего не добавил в корзину, отправляем его на главную
						header("Location: / "); 



					}



				# code...
			}



			require_once(ROOT.'/views/cart/order.php');
			return true;
		}
		

	}


?>