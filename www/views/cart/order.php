<?php
    include_once(ROOT.'/layout/header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                   
                                        
                                
                                    <h5><small> Заказ</small><a href="#">  Заполните поля </a></h5>

                                    <div class=" clearfix">
                                        <fieldset>
                                        <?php if (isset($errors) && $error==true)
                                                    {
                                                        foreach ($errors as $er) {
                                                            echo "<label id='special' style='margin-left=40px'>$er</label><br/>";
                                                            
                                                        }

                                                    } // если заказ оформлен
                                                    elseif(isset($_POST['submit']))
                                                     {
                                                            echo "<label id='special' style='margin-left=40px'>Вы ваш заказ успешно оформлен! <a style='margin-left=40pxhref='/'> посмотреть статус заказа</a><br/> </label>";
                                                            
                                                    }
                                         ?>
                                         <fieldset>
                                        <form action="#" method="post" class="billing-form clearfix">
                                            <fieldset>
                                               <label>Введите e-mail адрес</label>
                                                <input name="email" type="text" value="<?php if(isset($UsersData['email'])) echo $UsersData['email'];?>" placeholder="e-mail"><br/>
                                             
                                            </fieldset>
                                            <fieldset>
                                                <label>Фамилия</label>
                                                <input name="second_name" type="text" value="<?php if(isset($UsersData['second_name'])) echo $UsersData['second_name'];?>"/>
                                                <label>Отчество</label>
                                                <input name="third_name" type="text" value="<?php if(isset($UsersData['third_name'])) echo $UsersData['third_name'];?>"/>
                                            </fieldset>

                                            <fieldset class="last">
                                                <label> Имя</label>
                                                <input name="name" type="text" value="<?php if(isset($UsersData['name'])) echo $UsersData['name'];?>"/>
                                                    <label> Телефон</label>
                                                <input name="phone" type="text" value="<?php if(isset($UsersData['phone'])) echo $UsersData['phone'];?>"/>
                                             
                                            </fieldset>

                                            <label> Адрес </label>
                                            <input name="address" type="text" value="<?php if(isset($UsersData['address'])) echo $UsersData['address'];?>"/>  
                                              <fieldset class="last">
                                                <label>Способ оплаты</label>
                                                
                                                <select name="payment_method">

                                                <?php foreach ($payment_method as $method): ?>
                                                    <option  <?php if(isset($UsersData['payment_method'])) if($method->idpayment_method == $UsersData['payment_method']) echo "selected"; ?>  value="<?php echo $method->idpayment_method; ?>"> <?php echo $method->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label>Способ доставки </label>
                                                <select name="ship_method">
                                                <?php foreach ($ship_method as $method): ?>
                                                    <option  <?php if(isset($UsersData['ship_method'])) if($method->idpayment_method == $UsersData['ship_method']) echo "selected"; ?>  value="<?php echo $method->idship_method; ?>"> <?php echo $method->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
    
                                            </fieldset>

                                             <label> Комментарий к заказу </label>
                                                <textarea cols="70" rows="5" name='user_comment' ></textarea> 

                                                 <div class="billing">
                                            
                                            <ul class="title">
                                                <li> Наименование</li>
                                                <li>Брэнд </li>
                                                <li>Количество</li>
                                                <li>Цена</li>
                                                <li class="last">Общая </li>
                                            </ul>
                                            <?php  if($_SESSION['products']):
                                            foreach ($our_products_in_cart as $prod_in_cart) :
                                                # code...
                                             ?>
                                            <ul>
                                                <li><?php echo $prod_in_cart->name; ?></li>
                                                <li><?php echo $prod_in_cart->brand; ?></li>
                                                <li><?php echo $_SESSION['products'][$prod_in_cart->idproducts]; ?></li>
                                                <li><?php echo $prod_in_cart->price; ?></li>
                                                
                                                
                                                <li class="last"><?php echo $prod_in_cart->price*$_SESSION['products'][$prod_in_cart->idproducts]; ?></li>
                                            </ul>
                                        <? endforeach; endif; ?>



                                           <div class="totle">
                                                <ul>
                                                    <li>Общая сумма (без учета доставки): <span><?php echo $sum; ?></span></li>

                                                </ul>
                                               
                                            </div>
                                               
                                            </div>
                                              <input name="submit" type="submit" value="Оформить заказ" class="red-button">

                                        </div>
                                 


                                        </form>
                                    </div>
                                 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT-OFFER -->




    <?    include_once(ROOT.'/layout/footer.php');
                    ?>

    
        </body>
</html>
