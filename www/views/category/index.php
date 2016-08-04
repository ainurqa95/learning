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
                                        <label> Сортировать по</label>
                                        <select>
                                            <option>Position</option>
                                        </select>
                                    </div>

                                    <div class="show">
                                        <label>Количество продуктов на странице </label>
                                        <select>
                                            <option>6 </option>
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
                                                <a href="/products/<?php echo $product['idproducts'];?>"><img src="http://placehold.it/270x180" alt=""></a>
                                                <div class="overlay">
                                    
                                                    <a href="/products/<?php echo $product['idproducts'];?>" class="link"></a>
                                                </div>
                                            </figure>
                                            <div class="detail">
                                                <span><?php echo  $product['price']; ?></span>
                                                <h4> <?php echo $product['name']; ?></h4>
                                                <div class="icon">
                                                    <a href="/cart/add/<?php echo $product['idproducts']; ?>" data-id="<?php echo $product['idproducts'];?>"  class="one_tooltip" title="Add to wish list" id="add-to-cart"></a>
                                                    <a href="/cart/add/<?php echo $product['idproducts']; ?>" class="two tooltip " title="Add to cart"  data-id="<?php echo $product['idproducts'];?>"> </a>
                                                    <a href="#" class="three tooltip" title="Add to compare"></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                                </div>

                                <div class="pagination clearfix">
                                    <p>Items <?php echo count($productsListbyCat);?> of <?php echo $total;?>  </p>
                                  <?php echo $Pagination->get();  ?>
                                  <!--  <ul class="clearfix">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">></a></li>
                                    </ul> -->
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