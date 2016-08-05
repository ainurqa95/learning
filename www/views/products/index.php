<?php
    include_once(ROOT.'/layout/header.php');
?>

       <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1><?php echo $product->name; ?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span12">
                                <div class="sorting-bar clearfix">
                                    <div>
                                        <label></label>
                                     
                                    </div>

                                    <div class="show">
                                        <label><?php echo $product->brand; ?></label>
                                       
                                    </div>

                                    <div class="sorting-btn clearfix">
                                      
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
                            <div class="span9">
                                <div class="single clearfix">
                                    <div class="wrap span5">
                                        <div id="carousel-wrapper">
                                            <div id="carousel" class="cool-carousel">
                                                <span id="image1"><img src="http://placehold.it/470x311" alt=""/></span>
                                        
                                           
                                            </div>
                                            <a href="#" class="prev"></a><a href="#" class="next"></a>
                                        </div>

                                      
                                    </div>

                                    <div class="span4">
                                        <div class="product-detail">
                                            <h4><?php echo $product->name;  ?> </h4>
                                            <span><?php echo $product->price; ?> рублей</span>
                                            <p> <?php echo $product->description ?>  </p>
                                            <!--<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent </p>-->
                                        </div>
                                        

                                        <div class="buttons">
                                            <a href=""/cart/add/<?php echo $product->idproducts; ?>"" class="wish big-button">Добавить в корзину</a>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div id="product_tabs">
                                    <ul class="clearfix">
                                        <li><a href="#tabs-1">Характерстики</a></li>
                                    
                                        <li><a href="#tabs-3">Отзывы</a></li>
                                    </ul>
                                    <!--TABS-->
                                    <div id="tabs-1" class="tab" >
                                        <p> <?php echo $product->characteristic; ?></p>
                                    </div>

                            

                                    <div id="tabs-3" class="tab" >
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    </div>

                                </div>

                            </div>
                            <?php include_once('/layout/category.php'); ?>

                        </div>
                    </div>
                </div>
                <!-- PRODUCT-OFFER -->
              

                <?php
                include_once(ROOT.'/layout/footer.php');
                    ?>

	
		</body>
</html>
