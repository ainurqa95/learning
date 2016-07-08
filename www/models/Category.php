<?php
class Category
{
	
	public static function getCategoryList ()
	{
		$db = DB::getConnection();

		$result = $db->query('SELECT idmain_cat,name,name_uri  FROM main_category where status = 1 ORDER BY sort_order ASC LIMIT 10');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$categoryList = array();
		$i=0;
		while($row = $result->fetch()) {
			$categoryList[$i]['idmain_cat'] = $row['idmain_cat'];
			$categoryList[$i]['name'] = $row['name'];
			
			$categoryList[$i]['name_uri'] = $row['name_uri'];
			$i++;
		}
		return $categoryList;

	}
	public static function getSecondCategoryList ()
	{
		$db = DB::getConnection();

		$result = $db->query('SELECT idsecond_cat, name, name_uri, main_category_idmain_cat FROM second_category WHERE status=1 ORDER BY sort_order ');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$categoryList = array();
		$i=0;
		while($row = $result->fetch()) {
			$categoryList[$i]['idsecond_cat'] = $row['idsecond_cat'];
			$categoryList[$i]['name'] = $row['name'];
			
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
	
	/*
	public static function getCategorybyName ($NameCategory)
	{

		if($id){
		$db = DB::getConnection();

		$result = $db->query('SELECT idmain_cat, name,name_uri FROM main_category WHERE name_uri=' . $NameCategory);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$Category = $result->fetch();

		return $Category;
	}


	}*/


}