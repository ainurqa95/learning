<?php
      include_once(ROOT.'/layout/admin_header.php');
?>
     <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1> Просмотр заказа <? echo $order_to_view->idorders; ?> </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BAR -->



                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div class ="shopping-cart">
                                   
                                 
                                
                
                                    <ul class="title clearfix">
                                        <li class="first"> ID  </li>
                                        <li > Наименование товара  </li>
                                        <li> Брэнд </li>
                                        <li class="second"> Цена </li>
                                        
                                        <li class="last" >Количество</li>
                                         
                                        <!-- <li class="last">Удалить</li> -->
                                    </ul>

                                    <?php  foreach ($products_of_orders_list as $product_ord) :
                                        # code...
                                     ?>
                                    <ul class=" clearfix"  > 
                                        <li class="first">
                                            <figure>  <?php echo $product_ord->idproducts; ?>  </figure>
                                        </li>
                                        <li>  <?php echo $product_ord->name; ?></li>
                                        <li> <?php echo $product_ord->brand; ?> </li>
                                        <li class="second">
                                            <h4> <? echo $product_ord->price; ?></h4>
                                            <p><span> статус :</span>
                                             <?php if($product_ord->status==1)
                                             echo "товар доступен"; else echo "товар не доступен";?>                                                   
                                            </p>
                                          
                                        </li>
                                         <li class="last">  <?php echo $products_of_orders[$product_ord->idproducts]; ?></li><!--  цена товара -->
                                         
                                       
                                        
                                    </ul>
                                    </br></br>
                                <? endforeach; ?>
                                  <ol class="rounded">
                                      <li><p > ФИО клиента :</p></li>
                                      <li><p > Телефон :</p></li>
                                      <li><p > e-mail :</p></li>
                                      <li><p > Дата заказа :</p></li>
                                      <li><p > Комментарий клиента :</p></li>
                                      <li><p > Статус заказа :</p></li>
                                      <li><p > Способ оплаты :</p></li>
                                      <li><p > Способ доставки :</p></li>
                                    </ol>

                                    <ol class="rounded">
                                  <li><p > <? echo $order_to_view->user_name; ?></p></li>
                                  <li><p > <? echo $order_to_view->user_phone; ?></p></li>
                                  <li><p > <? echo $order_to_view->email; ?></p></li>
                                  <li><p > <? echo $order_to_view->datetime; ?></p></li>
                                  <li><p > <? if ($order_to_view->user_comment) echo($order_to_view->user_comment); else echo "нет комментария" ?></p></li>
                                  <?php foreach ($statues as $status) :
                                        if ($status->idorder_status == $order_to_view->status): ?>
                                              <li><p > <? echo $status->status; ?></p></li>
                                        <? break;
                                 endif;  endforeach; ?>
                                 <?php foreach ($payment_method as $method) :
                                        if ($method->idpayment_method == $order_to_view->payment_method): ?>
                                              <li><p > <? echo $method->name; ?></p></li>
                                        <? break;
                                 endif;  endforeach; ?>
                                 <?php foreach ($ship_method as $method) :
                                        if ($method->idship_method == $order_to_view->ship_method): ?>
                                              <li><p > <? echo $method->name; ?></p></li>
                                        <? break;
                                 endif;  endforeach; ?>
                                
                                </ol> </br></br>

                        

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT-OFFER -->




    <?    include_once(ROOT.'/layout/admin_footer.php');
                    ?>
    
        </body>
</html>
