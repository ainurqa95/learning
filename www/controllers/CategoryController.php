<?php
require_once(ROOT.'/models/Category.php');
require_once(ROOT.'/models/Products.php');
//require_once(ROOT.'/components/Pagination.php');
	class CategoryController
	{
		public function actionIndex ()
		{
			echo "this is action index";
			$categoryList = Category::getCategoryList();
			//$SecondCategoryList = Category::getSecondCategoryList();
			//print_r($SecondCategoryList);
			return true;


		}
		
		public function actionFirst ($idCategoryOne)
		{
			$catSecbyMainIdList = Category::getFewCategorySecondbyId($idCategoryOne);
			print_r($catSecbyMainIdList);
			require_once(ROOT.'/views/category/index.php');
			return true;
		}
		public function actionSecond ($idCategoryMain, $idCategorySecond,$page = 1)// показываем страницы категории
		{
			

			//$catSecbyMainIdList = Category::getFewCategorySecondbyId($idCategoryOne);
			if($page!=1){
			$page= explode('-', $page);
			$page = $page[1];
		}
			
			$total = Products::getCountOfProducts($idCategorySecond);
			echo $total;
			$productsListbyCat = Products::getFromProductsByAllCatygory($idCategoryMain, $idCategorySecond, $page);
			
			require_once(ROOT.'/views/category/index.php');
			return true;
		}
		public function actionProducts ($idCategoryMain, $idCategorySecond, $idProducts)// показываем страницы категории
		{
			

			

			//$productsListbyCat = Products::getFromProductsByAllCatygory($idCategoryMain, $idCategorySecond);
			//print_r($productsListbyCat);
			require_once(ROOT.'/views/category/index.php');
			return true;
		}
		

	}


?>