<?php

class Cart
{
	

	public static function AddProductToCart ($id_products) // добавляет товар в корзину
	{
		// Корзину в сессии храним как array ( [1] => 3, [4] => 4) где ключ это idproducts значение количество товара
			// 
		$id = intval($id_products);
		$arr_product = array();
		if(isset($_SESSION['products'])){ // если в корзине уже есть что-то
			$arr_product = $_SESSION['products'];

		}

		if (array_key_exists($id, $arr_product)) // если продукт мы добавили то просто увеличиваем количество товара
		{
			$arr_product[$id]++;

		}
		else {	// если мы твоар не добавляли
			$arr_product[$id] = 1;


		}
		$_SESSION['products'] = $arr_product;
		return self::CountOfItemsInCart(); // еще и возвращаем количество товара
		//используйте $this->member для нестатического свойства, а self::$member - для статического.
	}
	

   public static function CountOfItemsInCart ()// количество товаров в корзине
   {
   		if(isset($_SESSION['products'])){
   			$count = 0;
   			foreach ($_SESSION['products'] as $id => $value) {
   				$count += $value;

   			}

   			return $count;
   		}
   		else return 0;

   }
   public static function SumOfPricesInCart (&$our_products_in_cart=array())//ценовая сумма товаров в корзине
   {
   		if(isset($_SESSION['products'])){
   			$sum = 0;

   			$fields = array('idproducts','name','price','image','brand','second_category_idsecond_cat', 'second_category_main_category_idmain_cat'); // ч
   			$where_in = 'idproducts'; // там будет запрос where in idproducts (, , ,)
   			 $our_products_in_cart =ProductsTable::find_all_with_fields_where_in($_SESSION['products'],$fields,$where_in); // вытаскиваем все продукты из бд, которые находятся у пользовтеля в корзине
   			foreach ($our_products_in_cart as  $product) {
   				$sum += $product->price * $_SESSION['products'][$product->idproducts]; // умножаем цену товара на количество заказанного товара

   			}

   			return $sum;
   		}
   		else return 0;

   }
    public static function Save (&$UsersData=array(), $user_id ,$UserName, $products)//сохраняем заказ в таблицу orders
   {
               global $pdo;
               $new_order = new OrdersTable($pdo);
                $products = json_encode($products); // перевли в формат json
            //   print_r($new_order);
                $date = date('Y-m-d H:i:s');
               $new_order->__set('users_idusers', $user_id);
               $new_order->__set('user_name', $UserName );
               $new_order->__set('email', $UsersData['email']);
               $new_order->__set('products', $products );
               $new_order->__set('datetime', $date);
               $new_order->__set('status', 1);
               $new_order->__set('user_phone', $UsersData['phone']);
               $new_order->__set('user_comment', $UsersData['user_comment']);
               $new_order->__set('payment_method', $UsersData['payment_method']);
               $new_order->__set('ship_method', $UsersData['ship_method']);
              $new_order->insert();



   }
    public static function DeleteProductInCart ( $idproducts)// удаляем товар из корзины
   {
                  if (isset($_SESSION['products'][$idproducts]))
                     unset($_SESSION['products'][$idproducts]);
                  

   }
  
}