<?php
    include_once(ROOT.'/layout/admin_header.php');

?>
     <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1> Список заказов </h1>
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
                                <div class="shopping-cart">
                
                                    <ul class="title clearfix">
                                        <li class="first"> ID </li>
                                        <li > Имя  </li>
                                        <li> Телефон </li>
                                        <li class="second"> Дата </li>
                                        
                                        <li class="last" >Редактировать</li>
                                         
                                        <!-- <li class="last">Удалить</li> -->
                                    </ul>

                                    <?php  foreach ($All_Orders as $my_order) :
                                        # code...
                                     ?>
                                    <ul class=" clearfix"  > 
                                        <li class="first">
                                            <figure> <a href="/admin/orders/view/<?php echo $my_order->idorders; ?>" > <?php echo $my_order->idorders; ?> </a>    </figure>
                                        </li>
                                        <li> <a href="/admin/orders/view/<?php echo $my_order->idorders; ?>" > <?php echo $my_order->user_name; ?> </a></li>
                                        <li><a href="/admin/orders/view/<?php echo $my_order->idorders; ?>" > <?php echo $my_order->user_phone; ?> </a></li>
                                        <li class="second">
                                            <h4><a href="/admin/orders/view/<?php echo $my_order->idorders; ?>" > <?php echo $my_order->datetime; ?></h4>
                                            <p><span> статус :</span>
                                             <?php 
                                             foreach ($statues as $status) { // выводим статус заказа 
                                                 if ($status->idorder_status ==$my_order->status){
                                                    echo $status->status;break;}
                                             }?>
                                                     
                                            </p>
                                          
                                        </li>

                                         
                                         <a href="/admin/orders/delete/<?php echo $my_order->idorders; ?>" class ="red-button black"> УДАЛИТЬ </a>
                                         <a href="/admin/orders/update/<?php echo $my_order->idorders; ?>" class ="red-button black"> ИЗМЕНИТЬ </a>
                                        
                                    </ul>
                                <? endforeach; ?>

                    
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
