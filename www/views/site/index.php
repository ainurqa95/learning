<?php
    include_once(ROOT.'/layout/header.php');
?>


                <div class="wrapper">
                    <div class="container">
                        <div class="row ">

                            <!-- SLIDER -->
                            <div class="span9 slider">
                                <div class="slider-slides">
                                    <div class="slides">
                                        <a href="#"><img src="http://placehold.it/870x373" alt=""></a>
                                        <div class="overlay">
                                            <h1>AWESOME FURNITUR</h1>
                                            <p><span>50%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                                        </div>
                                    </div>
                                    <div class="slides">
                                        <a href="#"><img src="http://placehold.it/870x373" alt=""></a>
                                        <div class="overlay">
                                            <h1>LATEST FASHION</h1>
                                            <p><span>30%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                                        </div>
                                    </div>
									<div class="slides">
                                        <a href="#"><img src="http://placehold.it/870x373" alt=""></a>
                                        <div class="overlay">
                                            <h1>AWESOME FURNITUR</h1>
                                            <p><span>50%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                                        </div>
                                    </div>
                                    <div class="slides">
                                        <a href="#"><img src="http://placehold.it/870x373" alt=""></a>
                                        <div class="overlay">
                                            <h1>LATEST FASHION</h1>
                                            <p><span>30%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="next"></a>
                                <a href="#" class="prev"></a>
                                <div class="slider-btn"></div>
                            </div>
                            <!-- SLIDER -->

                            <!-- SPECIAL-OFFER -->
                            <div class="span3">
                                <div class="offers">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/270x171" alt=""></a>
                                        <div class="overlay">
                                            <h1>SUMMER<span> COLLECTION 35% OFF</span> <small>  - Limited Offer</small></h1>
                                        </div>
                                    </figure>
                                </div>

                                <div class="offers">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/270x171" alt=""></a>
                                        <div class="overlay">
                                            <h1>SUMMER<span> COLLECTION 35% OFF</span> <small>  - Limited Offer</small></h1>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <!-- SPECIAL-OFFER -->

                        </div>
                    </div>
                </div>

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">
                    <div class="container">
                        <div class="row heading-wrap">
                            <div class="span12 heading">
                                <h2>Featured Products <span></span></h2>
                            </div>
                        </div>
                        <div class="row">
                                <?php
                                foreach ($latestProducts as $lastProd) { ?>
                                    
                                
                            <div class="span3 product">

                                <div>
                                    <figure>
                                        <a href="/"><img src="http://placehold.it/270x186" alt=""></a>
                                        <div class="overlay">
                                            
                                            <a href="/category/<?php echo $lastProd['second_category_idsecond_cat'];?>/<?php echo $lastProd['second_category_main_category_idmain_cat'];?>" class="link"></a>
                                        </div>
                                    </figure>
                                    <div class="detail">
                                        <span><?php echo $lastProd['price']; ?></span>
                                        <h4><?php echo $lastProd['name']; ?></h4>
                                        <div class="icon">
                                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                                            <a href="#" class="two tooltip " title="Add to cart"></a>
                                            <a href="#" class="three tooltip" title="Add to compare"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                       <?php }?>

                 
                            </div>

                        </div>
                    </div>
                </div>
                <!-- PRODUCT-OFFER -->

                <!-- CLIENTS -->
                <div class="clients-wrap">
                    <div class="container">
                        <div class="row heading-wrap">
                            <div class="span12 heading">
                                <h2>Производители <span></span></h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span12 clients">
                                <ul class="elastislide-list clearfix" id="carousel">
                                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                                    <?foreach ($brandsList as $brand) { ?>
                                        <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                                         <h1><? echo $brand['name'];?> <span></span></h1>
                                   <?} ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CLIENTS -->

                <!-- CATEGORIES -->
                <div class="categories-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="span4">
                                <div class="categories">
                                    <figure>
                                        <img src="http://placehold.it/370x133" alt="">
                                        <div class="cate-overlay">
                                            <a href="#">Single Seat</a>
                                        </div>
                                    </figure>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="categories">
                                    <figure>
                                        <img src="http://placehold.it/370x133png" alt="">
                                        <div class="cate-overlay">
                                            <a href="#">Surfaces</a>
                                        </div>
                                    </figure>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="categories">
                                    <figure>
                                        <img src="http://placehold.it/370x133" alt="">
                                        <div class="cate-overlay">
                                            <a href="#">Storage</a>
                                        </div>
                                    </figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- CATEGORIES -->
                <?php
                include_once(ROOT.'/layout/footer.php');
                    ?>

	
		</body>
</html>
