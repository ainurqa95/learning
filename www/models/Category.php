<?php
class Category
{
	
	public static function getCategoryList ($flag=false)//переемнная для выводасо татусом и без
	{
		$db = DB::getConnection();
		if(!$flag){
		$result = $db->query('SELECT idmain_cat,name,name_uri, status, sort_order  FROM main_category where status = 1 ORDER BY sort_order ASC');
		}else{
			$result = $db->query('SELECT idmain_cat,name,name_uri, status, sort_order  FROM main_category  ORDER BY sort_order ASC');
		}
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$categoryList = array();
		$i=0;
		while($row = $result->fetch()) {
			$categoryList[$i]['idmain_cat'] = $row['idmain_cat'];
			$categoryList[$i]['status'] = $row['status'];
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['sort_order'] = $row['sort_order'];
			$categoryList[$i]['name_uri'] = $row['name_uri'];
			$i++;
		}
		return $categoryList;

	}
	public static function getSecondCategoryList ($flag=false)
	{
		$db = DB::getConnection();
		if(!$flag){
		$result = $db->query('SELECT idsecond_cat, name, name_uri, main_category_idmain_cat, status, sort_order FROM second_category WHERE status=1 ORDER BY sort_order ASC');
		}else{	$result = $db->query('SELECT idsecond_cat, name, name_uri, main_category_idmain_cat, status, sort_order FROM second_category ORDER BY sort_order ASC');

		}
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$categoryList = array();
		$i=0;
		while($row = $result->fetch()) {
			$categoryList[$i]['idsecond_cat'] = $row['idsecond_cat'];
			$categoryList[$i]['status'] = $row['status'];
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['sort_order'] = $row['sort_order'];
			$categoryList[$i]['name_uri'] = $row['name_uri'];
			$categoryList[$i]['main_category_idmain_cat'] = $row['main_category_idmain_cat'];
			$i++;
		}
		return $categoryList;

	}
	
	public static function getOnlyOneCategoryMainbyId ($idCategory)// берем одну запись категории из одной категории
	{

		if($idCategory){
		$db = DB::getConnection();

		$result = $db->query('SELECT idmain_cat, name,name_uri FROM main_category WHERE idmain_cat=' . $idCategory);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$Category = $result->fetch();

		return $Category;
	}
	}
	public static function getOnlyOneCategorySecondbyId ($idCategory)// берем одну запись категории из одной категории
	{

		if($idCategory){
		$db = DB::getConnection();

		$result = $db->query('SELECT idsecond_cat, name,status FROM second_category WHERE idsecond_cat=' . $idCategory);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$Category = $result->fetch();

		return $Category;
	}
	}
	public static function getFewCategorySecondbyId ($idCategoryMain)// берем из second_category только тех кто относится к одной из главных
	{

		if($idCategoryMain){
		$db = DB::getConnection();

		$result = $db->query('SELECT idsecond_cat, name, name_uri, image FROM second_category WHERE main_category_idmain_cat=' . $idCategoryMain);
			//.'ORDER BY sort_order ASC LIMIT 10');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$categoryList = array();
		$i=0;
		while($row = $result->fetch()) {
			$categoryList[$i]['idsecond_cat'] = $row['idsecond_cat'];
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['image'] = $row['image'];
			$categoryList[$i]['name_uri'] = $row['name_uri'];
			$i++;
		}
		return $categoryList;
	}
	}
	public static function DeleteMainCategory ($idmain_category)
	{
			global $pdo;
				$del_main_cat = new CategoryMainTable($pdo);
				$del_main_cat->__set('idmain_cat',$idmain_category);
				$del_main_cat->delete();



	}
	public static function DeleteSecondCategory ($idsecond_category)
	{
			global $pdo;
				$del_sec_cat = new CategorySecondTable($pdo);
				$del_sec_cat->__set('idsecond_cat',$idsecond_category);
				$del_sec_cat->delete();



	}
	public static function AddMainCategory ($UsersData)
	{
			global $pdo;
				$add_main_cat = new CategoryMainTable($pdo);
				foreach ($UsersData as $key => $value) {
					$add_main_cat->__set($key,$value);
				}


				$add_main_cat->insert();

	}
	public static function AddSecondCategory ($UsersData)
	{
			global $pdo;
				$add_sec_cat = new CategorySecondTable($pdo);
				foreach ($UsersData as $key => $value) {
					$add_sec_cat->__set($key,$value);
				}


				$add_sec_cat->insert();

	}
	public static function UpdateMainCategory ($UsersData=array(), $idcategory)// берем продукцию для слайдера главной страницы
		{	
				
				global $pdo;
				$up_main_cat = new CategoryMainTable($pdo);
				$up_main_cat->__set('idmain_cat',$idcategory);
				foreach ($UsersData as $key => $value) {
					$up_main_cat->__set($key,$value);
				}
				
				$up_main_cat->update();
				
				
				
		}
		public static function getCategoryMainById ($idcategory) // 
		{	
			if($idcategory)
			{
				
				$category = CategoryMainTable::findFirst(array('idmain_cat'=> $idcategory));
				
				return $category;

			}
			

		}
		public static function UpdateSecondCategory ($UsersData=array(), $idcategory)// берем продукцию для слайдера главной страницы
		{	
				
				global $pdo;
				$up_main_cat = new CategorySecondTable($pdo);
				$up_main_cat->__set('idsecond_cat',$idcategory);
				foreach ($UsersData as $key => $value) {
					$up_main_cat->__set($key,$value);
				}
				
				$up_main_cat->update();
				
				
				
		}
		public static function getCategorySecondById ($idcategory) // 
		{	
			if($idcategory)
			{
				
				$category = CategorySecondTable::findFirst(array('idsecond_cat'=> $idcategory));
				
				return $category;

			}
			

		}
		


}