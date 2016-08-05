<?php


	class ProductsController
	{
		public function actionIndex ($idproducts)
		{
			
			$product = Products::getProductById($idproducts); // берем один товар
			$idCategoryMain = $product->second_category_main_category_idmain_cat; /// для главной категории в менюшке справа для вьюхи чтобы была выделена та категория к которой относится товар

			require_once(ROOT.'/views/products/index.php');
			
			return true;


		}


	}


?>