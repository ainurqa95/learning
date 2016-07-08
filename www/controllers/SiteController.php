<?php

require_once(ROOT.'/models/Products.php');
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
		//print_r($latestProducts);
		require_once(ROOT.'/views/site/index.php');
			
			return true;


		}


	}


?>