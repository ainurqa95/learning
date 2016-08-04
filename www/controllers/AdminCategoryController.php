<?php

    /* наследуют AdminBase чтобы пользоватья бщим методом CheckAdmin
    */
	class AdminCategoryController extends AdminBase {

		
		public function actionIndex ()
		{	
	   
   	     // проверка доступа

        self::CheckAdmin();
        // получаем список товаров
        $categoryList = Category::getCategoryList(true); // категории для выпадающего списка
		$SecondCategoryList = Category::getSecondCategoryList(true); 
		
       
		require_once(ROOT.'/views/admin_category/index.php');
		
		return true;


		}
		public function actionDelete_main($idmain_category) // удалаем категорию главную из базы данных
		{	
	   
   	     // проверка доступа
			self::CheckAdmin();
		
		$category_to_delete = Category::getOnlyOneCategoryMainbyId($idmain_category); 
		
		if(isset($_POST['submit'])){
			
				Category::DeleteMainCategory($idmain_category);

				header("Location: /admin/category/ "); 
				 
		}
		require_once(ROOT.'/views/admin_category/delete.php');
		
		return true;


		}
		public function actionDelete_second($idsecond_category) // удалаем категорию вторую из базы данных
		{	
	   
   	     // проверка доступа
			self::CheckAdmin();
		
		$category_to_delete = Category::getOnlyOneCategorySecondbyId($idsecond_category); 
		
		if(isset($_POST['submit'])){
			
				Category::DeleteSecondCategory($idsecond_category);

				header("Location: /admin/category/ "); 
				 
		}
		require_once(ROOT.'/views/admin_category/delete.php');
		
		return true;


		}
		public function actionUpdate_main ($idcategory)
		{	
	   
   	     // проверка доступа
	
        self::CheckAdmin();
        $categoryList = Category::getCategoryList(); // категории для выпадающего списка

		$category_to_update = Category::getCategoryMainById($idcategory);

		 
		if(isset($_POST['submit'])){
				$fields = array("name" => "Наименование категории", "status" => "доступность" );
   				$error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		

			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
   		 
   		 	if(!$error){

			Category::UpdateMainCategory($UsersData,$idcategory); // добавляем в бд  товар и запоминем вго новый id
			/*if($last_insert){// если запись добавлена
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение

						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. "/uploads/images");

					}



				}
				*/
				header("Location: /admin/category/ "); 

			}





		}

		require_once(ROOT.'/views/admin_category/update_main.php');
		
		return true;


		}
		public function actionUpdate_second ($idcategory)
		{	
	   
   	     // проверка доступа
	
        self::CheckAdmin();
        $categoryList = Category::getCategoryList(); // категории для выпадающего списка

		$category_to_update = Category::getCategorySecondById($idcategory);
		
		 
		 
		if(isset($_POST['submit'])){
				$fields = array("name" => "Наименование категории", "status" => "доступность" );
   				$error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		
			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
			
   		 	if(!$error){

			Category::UpdateSecondCategory($UsersData,$idcategory); // добавляем в бд  товар и запоминем вго новый id
			/*if($last_insert){// если запись добавлена
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение

						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. "/uploads/images");

					}



				}
				*/
				header("Location: /admin/category/ "); 

			}





		}

		require_once(ROOT.'/views/admin_category/update_second.php');
		
		return true;


		}
		public function actionCreate_main ()
		{	
	   
   	     // проверка доступа

        self::CheckAdmin();

        $categoryList = Category::getCategoryList();
		
		if(isset($_POST['submit'])){
				$fields = array("name" => "Наименование категории", "status" => "доступность" );
   				$error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		

			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
   		 	
   		 	if(!$error){
			$last_insert = Category::AddMainCategory($UsersData); // добавляем в бд  товар и запоминем вго новый id
			/*if($last_insert){// если запись добавлена
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение

						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. "/uploads/images");

					}



				}
				*/
				header("Location: /admin/category/ "); 

			}





		}


		require_once(ROOT.'/views/admin_category/create_main.php');
		
		return true;


		}
		public function actionCreate_second ()
		{	
	   
   	     // проверка доступа

        self::CheckAdmin();

        $categoryList = Category::getCategoryList();
		
		if(isset($_POST['submit'])){
				$fields = array("name" => "Наименование категории", "status" => "Доступность" , "main_category_idmain_cat" => "Главная категория");
   				 $error = false;
   				 $errors = array();
   				 $UsersData =  array();
   		

			User::CheckIsFillFields ($_POST,$UsersData,$errors, $error, $fields);
   		 	if(!$error){
			$last_insert = Category::AddSecondCategory($UsersData); // добавляем в бд  товар и запоминем вго новый id
			/*if($last_insert){// если запись добавлена
					if(is_uploaded_file($_FILES["image"]["tmp_name"])){// загрузилось ли через форму изображение

						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. "/uploads/images");

					}



				}
				*/
				header("Location: /admin/category/ "); 

			}





		}


		require_once(ROOT.'/views/admin_category/create_second.php');
		
		return true;


		}



       
       


	}


?>