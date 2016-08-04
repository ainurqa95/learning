<?php

    /* наследуют AdminBase чтобы пользоватья бщим методом CheckAdmin
    */
	class AdminProductsController extends AdminBase {

		public function actionIndex ()
		{	
	   
   	     // проверка доступа

        self::CheckAdmin();
        // получаем список товаров
        $All_Products = Products::getAllProducts();	
		require_once(ROOT.'/views/admin_products/index.php');
		
		return true;


		}
		public function actionDelete($idproducts) // удалаем товар из базы данных
		{	
	   
   	     // проверка доступа
			self::CheckAdmin();
		
		$product_to_delete = Products::getProductById($idproducts); 
		;
		if(isset($_POST['submit'])){
			
				Products::DeleteProduct($idproducts);

				header("Location: /admin/products/ "); 
				 
		}

		require_once(ROOT.'/views/admin_products/delete.php');
		
		return true;


		}
		 /**
     * Action для страницы "Редактировать товар"
     */
		public function actionUpdate ($idproducts)
		{	
	   
   	     // проверка доступа
	
        self::CheckAdmin();
        $categoryList = Category::getCategoryList(); // категории для выпадающего списка
		$SecondCategoryList = Category::getSecondCategoryList(); 
		$product_to_update = Products::getProductById($idproducts);
		;

		 
		if(isset($_POST['submit'])){
				$fields = array("name" => "Наименование товара", "price" => "Цена товара" , "brand" => "Брэнд", "description" => "Полное описание", "avaialabilty" => "Доступность товара",  "is_new" => "Новый товар", "is_recommended" => "Рекомендуемый товар" , "idsecond_cat" => "Вторая категория","image" => "изображение", );
   				$error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		

			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
   		 
   		 	if(!$error){

			Products::UpdateProduct($UsersData,$idproducts); // добавляем в бд  товар и запоминем вго новый id
			
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение
						  // Если загружалось, переместим его в нужную папке, дадим новое имя
						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/uploads/images/products/{$last_insert_id}.jpg");

					}

				header("Location: /admin/products/ "); 

			}
		}

		

		require_once(ROOT.'/views/admin_products/update.php');
		
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
			$last_insert_id = Products::AddProduct($UsersData); // добавляем в бд  товар и запоминем вго новый id
			if($last_insert_id){// если запись добавлена
					//print_r($_FILES["image"]);
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение
						  // Если загружалось, переместим его в нужную папке, дадим новое имя
						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/uploads/images/products/{$last_insert_id}.jpg");

					}



				}
				  // Перенаправляем пользователя на страницу управлениями товарами
				header("Location: /admin/products/ "); 

			}





		}


		require_once(ROOT.'/views/admin_products/create.php');
		
		return true;


		}

       


	}


?>