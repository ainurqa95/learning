<?php
return array(
	
	//'category/([a-Z]+)' => 'category/view/$1',
	//'category/([0-9]+)' => 'category/first/$1',
	//'category/([0-9]+)/([0-9]+)' => 'category/second/$1/$2',
	//'category/([0-9]+)' => 'category/first/$1',
	'category/([0-9]+)/([0-9]+)' => 'category/second/$1/$2',
	'category/([0-9]+)/([0-9]+)/page-([0-9]+)' => 'category/second/$1/$2/$3',//page-$3 номер страницы
	'category/([0-9]+)/([0-9]+)/([0-9]+)' => 'category/product/$1/$2/$3',
	'category' => 'category/index',
	
	'news' => 'news/index', 
	'' => 'site/index',


	);