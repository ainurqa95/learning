<?php
    include_once(ROOT.'/layout/admin_header.php');

?>
     <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1> Список категорий на сайте </h1>
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
                                <a href="/admin/category/create_main" class="red-button"> Добавить главную категорию </a>
                                 <a href="/admin/category/create_second" class="red-button"> Добавить вторую </a>
                                    <ul class="title clearfix">
                                        <li> ID </li>
                                        <li class="second"> Наименование главной категории </li>
                
                                        <li class="last" >Редактировать</li>
                                         
                                        <!-- <li class="last">Удалить</li> -->
                                    </ul>

                                    <?php  
                                    foreach ($categoryList as $main_cat) :
                                        
                                     ?>
                                    <ul class=" clearfix">
                                        <li>
                                            <figure><?php echo $main_cat['idmain_cat']; ?></figure>
                                        </li>
                                        <li class="second">
                                            <h4><?php echo $main_cat['name']; ?></h4>
                                            <p><span> Порядок сортировки:</span> <?php echo $main_cat['sort_order']; ?></p>
                                             <p><span> Доступность:</span> <?php echo $main_cat['status']; ?></p>
                                          
                                        </li>
                                      
                                        
                                      
                                         <a href="/admin/category/delete_main/<?php echo $main_cat['idmain_cat']; ?>" class ="red-button black"> УДАЛИТЬ </a>

                                         <a href="/admin/category/update_main/<?php echo $main_cat['idmain_cat']; ?>" class ="red-button black"> ИЗМЕНИТЬ </a>
                                        
                                    </ul>
                                <? endforeach; ?>
                                  <ul class="title clearfix">
                                        <li> ID </li>
                                        <li class="second"> Наименование второй категории </li>
                                        <li> Главная категория </li>
                                        <li class="last" >Редактировать</li>
                                         
                                        <!-- <li class="last">Удалить</li> -->
                                    </ul>
                                     <?php  foreach ($SecondCategoryList as $second_cat) :
                                        # code...
                                     ?>
                                    <ul class=" clearfix">
                                        <li>
                                            <figure><?php echo $second_cat['idsecond_cat']; ?></figure>
                                        </li>
                                        <li class="second">
                                            <h4><?php echo $second_cat['name']; ?></h4>
                                            <p><span> Порядок сортировки:</span> <?php echo $second_cat['sort_order']; ?></p>
                                             <p><span> Доступность:</span> <?php echo $second_cat['status']; ?></p>
                                          
                                        </li>
                                        <li>
                                            <figure>
                                            <?php 
                                            foreach ($categoryList as $main_cat) {
                                                # code...
                                            if($main_cat['idmain_cat'] == $second_cat['main_category_idmain_cat'])
                                              echo $main_cat['name'];
                                      }

                                             ?>
                                                
                                            </figure>
                                        </li>
                                      
                                        
                                      
                                         <a href="/admin/category/delete_second/<?php echo $second_cat['idsecond_cat']; ?>" class ="red-button black"> УДАЛИТЬ </a>

                                         <a href="/admin/category/update_second/<?php echo $second_cat['idsecond_cat']; ?>" class ="red-button black"> ИЗМЕНИТЬ </a>
                                        
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
