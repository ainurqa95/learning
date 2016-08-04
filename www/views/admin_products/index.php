<?php
    include_once(ROOT.'/layout/admin_header.php');

?>
     <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1> Список товаров на сайте </h1>
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
                                <a href="/admin/products/create" class="red-button"> Добавить товар </a>
                                    <ul class="title clearfix">
                                        <li> ID </li>
                                        <li class="second"> Наименование </li>
                                        <li> Цена </li>
                                        <li class="last" >Редактировать</li>
                                         
                                        <!-- <li class="last">Удалить</li> -->
                                    </ul>

                                    <?php  foreach ($All_Products as $my_product) :
                                        # code...
                                     ?>
                                    <ul class=" clearfix">
                                        <li>
                                            <figure><?php echo $my_product->idproducts; ?></figure>
                                        </li>
                                        <li class="second">
                                            <h4><?php echo $my_product->name; ?></h4>
                                            <p><span> Brand:</span> <?php echo $my_product->brand; ?></p>
                                          
                                        </li>
     
                                        <li><?php echo $my_product->price; ?></li>
                                      
                                        
                                      
                                         <a href="/admin/products/delete/<?php echo $my_product->idproducts; ?>" class ="red-button black"> УДАЛИТЬ </a>

                                         <a href="/admin/products/update/<?php echo $my_product->idproducts; ?>" class ="red-button black"> ИЗМЕНИТЬ </a>
                                        
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
