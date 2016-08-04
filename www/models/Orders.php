<?php

class Orders
{
	
		public static function getAllOrders ()// берем продукцию для слайдера главной страницы
		{	
				$orders = OrdersTable::find();
				return $orders;
			
				
		}
		public static function getOrderById ($idorders)// берем продукцию для слайдера главной страницы
		{	
				$orders = OrdersTable::findFirst(array('idorders'=>$idorders));
				return $orders;
			
				
		}
		public static function UpdateOrder ($UsersData=array(), $idorders)// берем продукцию для слайдера главной страницы
		{	
				
				global $pdo;
				$up_order = new OrdersTable($pdo);
				$up_order->__set('idorders',$idorders);
				foreach ($UsersData as $key => $value) {
					$up_order->__set($key,$value);
				}
				
				$up_order->update();
				
				
				
		}
		public static function DeleteOrder ($idorders)
	{
			global $pdo;
				$del_order = new OrdersTable($pdo);
				$del_order->__set('idorders',$idorders);
				$del_order->delete();



	}
	

}