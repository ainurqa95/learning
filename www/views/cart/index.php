<?php
    include_once(ROOT.'/layout/header.php');
?>
     <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1>Корзина</h1>
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
                                        <li> Изображение </li>
                                        <li class="second"> Название </li>
                                        <li> Количество </li>
                                        <li> Цена одного товара</li>
                                        <li> Общая цена</li>
                                        <li class="last">Удалить</li>
                                    </ul>

                                    <?php if($our_products_in_cart): foreach ($our_products_in_cart as $cart_product) :
                                        # code...
                                     ?>
                                    <ul class=" clearfix">
                                        <li>
                                            <figure><img src="http://placehold.it/131x86" alt=""></figure>
                                        </li>
                                        <li class="second">
                                            <h4><?php echo $cart_product->name; ?></h4>
                                            <p><span> Brand:</span> <?php echo $cart_product->brand; ?></p>
                                          
                                        </li>
                                        <li>
                                            <input type="number" value="<?php echo $_SESSION['products'][$cart_product->idproducts]; ?>">
                                        </li>
                                        <li><?php echo $cart_product->price; ?></li>
                                        <li><?php echo $cart_product->price*$_SESSION['products'][$cart_product->idproducts]; ?></li>
                                        
                                         <a href="/cart/delete/<?php echo $cart_product->idproducts; ?>" class="red-button black"> Х </a>
                                    </ul>
                                <? endforeach; ?>

                                    <a href="/cart/order" class="red-button">Оформить заказ</a>
                                <?  else : ?>
                                <a href="/" class="red-button"> Корзина пуста </a>
                                 <?php endif; ?>
                                    <a href="/cart" class="red-button black"> Обновить корзину </a>

                                </div>
                            </div>
                        </div>

                        <div class="row cart-calculator clearfix">
                            <!--
                            <div class="span4">
                                <h6>Estimate Shipping & Taxes</h6>
                                <div class="estimate clearfix">
                                    <form>
                                        <select>
                                            <option>-- Select Your Country --</option>
                                            <option>Pakistan</option>
                                        </select>

                                        <select>
                                            <option>-- Select Your Region --</option>
                                        </select>

                                        <input type="text" placeholder="Your Postcode">
                                        <input type="submit"  class="red-button" value="Get Quotes" >
                                    </form>
                                </div>
                            </div>

                            <div class="span4">
                                <h6>Discount Codes</h6>
                                <div class="estimate clearfix">
                                    <form>
                                        <input type="text" placeholder="Your Postcode">
                                        <input type="submit"  class="red-button" value="Get Quotes" >
                                    </form>
                                </div>
                            </div>
                            -->

                            <div class="span4 total clearfix">
                                <ul class="black">
                                    <li>в рублях</li>
                                    <li>Общая цена:</li>
                                </ul>
                                <ul class="gray">
                                    <li>рублей</li>
                                    <li><?php echo $sum; ?></li>
                                </ul>
                                <!--<a href="#" class="red-button">Proceed to Checkout</a> -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- PRODUCT-OFFER -->


    <?    include_once(ROOT.'/layout/footer.php');
                    ?>

	
		</body>
</html>
