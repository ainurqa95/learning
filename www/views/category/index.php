<?php
    include_once(ROOT.'/layout/header.php');
?>
<!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1>JACKETS</h1>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span12">
                                <div class="sorting-bar clearfix">
                                    <div>
                                        <label>Sort by</label>
                                        <select>
                                            <option>Position</option>
                                        </select>
                                    </div>

                                    <div class="show">
                                        <label>SHOW</label>
                                        <select>
                                            <option>5 per page</option>
                                        </select>
                                    </div>

                                    <div class="sorting-btn clearfix">
                                        <label>View As</label>
                                        <a href="#" class="one"></a>
                                        <a href="#" class="two"></a>
                                    </div>
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
                            <div class="span9 product-grid">
                                <div class=" clearfix">
                                	<?php foreach ($productsListbyCat as $product): ?>
                                		
                                	
                                    <div class="span3 product">

                                        <div>
                                            <figure>
                                                <a href="/category/<?php echo $product['second_category_main_category_idmain_cat']; ?>/<?php echo $product['second_category_idsecond_cat'];?>/<?php echo $product['idproducts']?>"><img src="http://placehold.it/270x180" alt=""></a>
                                                <div class="overlay">
                                    
                                                    <a href="/category/<?php echo $product['second_category_main_category_idmain_cat']; ?>/<?php echo $product['second_category_idsecond_cat'];?>/<?php echo $product['idproducts']?>" class="link"></a>
                                                </div>
                                            </figure>
                                            <div class="detail">
                                                <span><?php echo  $product['price']; ?></span>
                                                <h4> <?php echo $product['name']; ?></h4>
                                                <div class="icon">
                                                    <a href="#" class="one tooltip" title="Add to wish list"></a>
                                                    <a href="#" class="two tooltip " title="Add to cart"></a>
                                                    <a href="#" class="three tooltip" title="Add to compare"></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                                </div>

                                <div class="pagination clearfix">
                                    <p>Items 1 to 9 of 12 total</p>
                                    <ul class="clearfix">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="span3">
                                <div id="sidebar">
                                    <div class="widget">
                                        <h4>Категории</h4>

                                        <div id="accordion">
                                        	<?php 
                                        	foreach ($categoryList as $categoryMain){
                                        		# code...
                                        	
                                        	?>
                                            <h5 <?php 
                                            if($categoryMain['idmain_cat'] == $idCategoryMain) echo  'class ="ui-accordion-header-active"';
                                             else echo 'class=""'; 
                                            ?> ><a href="/category/<?php echo $categoryMain['idmain_cat'];?>/1"><?php echo $categoryMain['name'];?></a></h5>
                                            <div>
                                                <ul>
                                                	<?php foreach ($SecondCategoryList as $categorySecond) {
                                                                        if($categorySecond['main_category_idmain_cat']==$categoryMain['idmain_cat'])

                                                                        { ?>
                                                    <li><a href="/category/<?php echo $categoryMain['idmain_cat']; ?>/<?php echo $categorySecond['idsecond_cat'];?>"/><?php echo $categorySecond['name'];?></a> </li>
                                                    <?php } }?>
  
                                                </ul>
                                            </div>
                                            <?php } ?>

                                           
                                        </div>

                                    </div>

                                    <div class="widget">
                                        <h4>Price Filter</h4>

                                        <div class="price-range">
                                            <div id="slider-range"></div>
                                            <p class="clearfix">
                                                <input type="text" id="amount" />
                                                <input type="text" id="amount2" />
                                            </p>
                                        </div>
                                    </div>

                                    <div class="widget">
                                        <h4>Featured Products</h4>

                                        <div class="featured">
                                            <ul>
                                                <li class="clearfix">
                                                    <figure>
                                                        <a href="#"><img src="http://placehold.it/50x50" alt=""></a>
                                                    </figure>
                                                    <div>
                                                        <h5>Brown Wood Chair</h5>
                                                        <span>$244.00</span>
                                                    </div>
                                                </li>

                                                <li class="clearfix">
                                                    <figure>
                                                        <a href="#"><img src="http://placehold.it/50x50" alt=""></a>
                                                    </figure>
                                                    <div>
                                                        <h5>Brown Wood Chair</h5>
                                                        <span>$244.00</span>
                                                    </div>
                                                </li>

                                                <li class="clearfix last">
                                                    <figure>
                                                        <a href="#"><img src="http://placehold.it/50x50" alt=""></a>
                                                    </figure>
                                                    <div>
                                                        <h5>Brown Wood Chair</h5>
                                                        <span>$244.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT-OFFER -->
                    <?php
                include_once(ROOT.'/layout/footer.php');
                    ?>

		</body>
</html>