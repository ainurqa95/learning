<?php

//require_once(ROOT.'/models/Products.php');
	class SiteController
	{

		public function actionIndex ()
		{
			//echo "this is action index";
			//$newsList = News::getNewsList();
			
			//$categoryList = Category::getCategoryList();
			//$SecondCategoryList = Category::getSecondCategoryList();
		$brandsList = Products::getBrands(6);
		$latestProducts = Products::getlatestProducts(6);
		$sliderProducts = Products::getProductForSlider(4);
		//$
		//print_r($sliderProducts);

		require_once(ROOT.'/views/site/index.php');
			
			return true;


		}
		public function actionContact ()
		{
			
			//if (mail($addr, $theme, $text, "From: ainur_ahmetgalie@mail.ru")) {
		$fields = array('phone' => 'телефон' ,  "email" => "email" , 'message' => 'сообщение' );
		$error = false;
		$UsersData =  array();
		$errors = array();
		if(isset($_POST['submit'])){	
		$mail = 'ainur_ahmetgalie@mail.ru';
		User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
		 if(!User::checkEmail($UsersData['email'])){
                $errors[] = 'email не соответсвует формату';
                 $error = true;
            }
            if(!User::checkName($UsersData['message']) ){
     			$errors[] = 'вы не ввели сообщение';
     			 $error = true;
     		}
     		if(!User::checkPhone($UsersData['phone']))
            {
                $errors[] = 'не корректный номер телефона';
                $error = true;

            }
     		if(!$error){
     			$message = "Сообщение от " . $UsersData['email']. " Текст:  " . $UsersData['message'];
     			$email = $UsersData['email'];
     			$subject = 'Тема письма';
     			$admin_email = 'ainur_ahmetgalie@mail.ru';
     			$result = mail($admin_email, $subject, $message);
     			$result = true;




     		}









		}
		require_once(ROOT.'/views/site/contact.php');
			
			return true;


		}


	}


?>