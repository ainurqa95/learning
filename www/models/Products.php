<?php

class Products
{
	const SHOW_BY_DEFAULT = 6;
	const SHOW_BY_DEFAULT_Brands = 6;
	public static function getlatestProducts ($count= self::SHOW_BY_DEFAULT)
	{
		$db = DB::getConnection();

		$result = $db->query('SELECT idproducts, name,price,characteristic,description,is_new,is_recommended,second_category_idsecond_cat,second_category_main_category_idmain_cat
			FROM products WHERE status = "1"
                ORDER BY idproducts DESC LIMIT ' . $count);
		  //$result = $db->query('SELECT id, name, price, image, is_new FROM product '
           //     . 'WHERE status = "1"'
             //   . 'ORDER BY id DESC '                
             //  . 'LIMIT ' . $count);
		//idproducts, name,price,characteristic,description,is_new,is_recommended,second_category_idsecond_cat,second_category_main_category_idmain_cat
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$productList = array();
		$i=0;
		while($row = $result->fetch()) {
			$productList[$i]['idproducts'] = $row['idproducts'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['characteristic'] = $row['description'];
			$productList[$i]['is_new'] = $row['is_new'];
			$productList[$i]['is_recommended'] = $row['is_recommended'];
			$productList[$i]['second_category_idsecond_cat'] = $row['second_category_idsecond_cat'];
			$productList[$i]['second_category_main_category_idmain_cat'] = $row['second_category_main_category_idmain_cat'];
			$i++;
		}
		return $productList;

	}

	public static function getBrands ($count= self::SHOW_BY_DEFAULT_Brands)
	{
		$db = DB::getConnection();

		$result = $db->query('SELECT *
			FROM brands ORDER BY idbrands ASC LIMIT ' . $count);
		  //$result = $db->query('SELECT id, name, price, image, is_new FROM product '
           //     . 'WHERE status = "1"'
             //   . 'ORDER BY id DESC '                
             //  . 'LIMIT ' . $count);
		//idproducts, name,price,characteristic,description,is_new,is_recommended,second_category_idsecond_cat,second_category_main_category_idmain_cat
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$brandsList = array();
		$i=0;
		while($row = $result->fetch()) {
			$brandsList[$i]['idbrands'] = $row['idbrands'];
			$brandsList[$i]['name'] = $row['name'];
			$brandsList[$i]['image'] = $row['image'];
		
			$i++;
		}
		return $brandsList;

	}
	public static function getFromProductsByAllCatygory ($idCategoryMain,$idCategorySecond, $page =1)// берем из second_category только тех кто относится к одной из главных
	{

		if($idCategoryMain && $idCategorySecond ){
		$db = DB::getConnection();
		$smeshenie = ($page-1) * self::SHOW_BY_DEFAULT;
		//echo $page;
		//echo $smeshenie;
		// offset смещение вправо на n записей
		$result = $db->query('SELECT * #idproducts,name, brand, price, characteristic, description, is_new, is_recommended, second_category_idsecond_cat, second_category_main_category_idmain_cat
		 FROM products WHERE second_category_idsecond_cat=' . $idCategorySecond . ' AND second_category_main_category_idmain_cat = '. $idCategoryMain. ' limit '. self::SHOW_BY_DEFAULT. ' offset '. $smeshenie);
			//.'ORDER BY sort_order ASC LIMIT 10');
		 // idproducts,name, brand, price, characteristic, description, is_new, is_recommended, second_category_idsecond_cat, second_category_main_category_idmain_cat
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$productList = array();
		$i=0;
		while($row = $result->fetch()) {
			$productList[$i]['idproducts'] = $row['idproducts'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['characteristic'] = $row['description'];
			$productList[$i]['is_new'] = $row['is_new'];
			$productList[$i]['is_recommended'] = $row['is_recommended'];
			$productList[$i]['second_category_idsecond_cat'] = $row['second_category_idsecond_cat'];
			$productList[$i]['brand'] = $row['brand'];
			$productList[$i]['second_category_main_category_idmain_cat'] = $row['second_category_main_category_idmain_cat'];
			$i++;
		}
		return $productList;
			}
		}	
		public static function getCountOfProducts ($idsecond_cat)
		{	
			if($idsecond_cat)
			{
				$db = DB::getConnection();
				
				$result = $db->query('SELECT  count(idproducts) AS count #idproducts,name, brand, price, characteristic, description, is_new, is_recommended, second_category_idsecond_cat, second_category_main_category_idmain_cat
		 FROM products WHERE second_category_idsecond_cat =' . $idsecond_cat . ' AND status = 1');
			    $result->setFetchMode(PDO::FETCH_ASSOC);
			    $row = $result->fetch();
			    return $row['count'];
			}

		}

	
}