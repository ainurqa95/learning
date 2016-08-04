<?php
return array(
	
	//'category/([a-Z]+)' => 'category/view/$1',
	//'category/([0-9]+)' => 'category/first/$1',
	//'category/([0-9]+)/([0-9]+)' => 'category/second/$1/$2',
	//'category/([0-9]+)' => 'category/first/$1',
	// категория и продукция
	'category/([0-9]+)/([0-9]+)' => 'category/second/$1/$2',
	'category/([0-9]+)/([0-9]+)/page-([0-9]+)' => 'category/second/$1/$2/$3',//page-$3 номер страницы
	'products/([0-9]+)' => 'products/index/$1',
	
	// регистраци и автори
	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',
	// личный кабинет
	'cabinet/edit' => 'cabinet/edit',
	'cabinet' => 'cabinet/index',
	'contact' => 'site/contact',
	'news' => 'news/index', 
      // операции с корзиной
	'cart/delete/([0-9]+)' => 'cart/delete/$1',
	'cart/add/([0-9]+)' => 'cart/add/$1',
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart/order' => 'cart/order',
	'cart' => 'cart/index',
	

	// управление товарами
	'admin/products/create' => 'adminProducts/create',
	'admin/products/update/([0-9]+)' => 'adminProducts/update/$1',
	'admin/products/delete/([0-9]+)' => 'adminProducts/delete/$1',
	'admin/products' => 'adminProducts/index',// операция чтения 
	// управление заказами
	'admin/orders/view/([0-9]+)' => 'adminOrders/view',
	'admin/orders/update/([0-9]+)' => 'adminOrders/update/$1',
	'admin/orders/delete/([0-9]+)' => 'adminOrders/delete/$1',
	'admin/orders' => 'adminOrders/index',
	// управление категориями

	'admin/category/create_main' => 'adminCategory/create_main',
	'admin/category/create_second' => 'adminCategory/create_second',
	'admin/category/update_main/([0-9]+)' => 'adminCategory/update_main/$1',
	'admin/category/update_second/([0-9]+)' => 'adminCategory/update_second/$1',
	'admin/category/delete_main/([0-9]+)' => 'adminCategory/delete_main/$1',
	'admin/category/delete_second/([0-9]+)' => 'adminCategory/delete_second/$1',
	
	// админ панель
	
	'admin/category' => 'adminCategory/index',
	'admin' => 'admin/index',

	'category' => 'category/index',// CategoryController // indexAction


	'' => 'site/index',


	);