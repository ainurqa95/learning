<?php
require_once(ROOT.'/models/News.php');
	class NewsController
	{
		public function actionIndex ()
		{
			echo "this is action index";
			$newsList = News::getNewsList();
			print_r($newsList);
			return true;


		}
		public function actionView ($id)
		{
			$news = News::getNewsbyId($id);
			print_r($news);
			return true;
		}

	}


?>