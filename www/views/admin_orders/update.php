<?php
    include_once(ROOT.'/layout/admin_header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                 
                                    <h5><small> Just Do it</small><a href="#"> Редактирование заказа</a></h5>

                                    <div class=" clearfix">
                                        <fieldset>
                                        <?php if (isset($errors) && $error==true)
                                                    {
                                                        foreach ($errors as $er) {
                                                            echo "<label id='special' style='margin-left=40px'>$er</label><br/>";
                                                            
                                                        }

                                                    }
                                                    elseif(isset($_POST['submit'])) {
                                                            echo "<label id='special' style='margin-left=40px'>Вы зарегестрированы!</label><br/>";
                                                    }
                                         ?>
                                         <fieldset>
                                         <form action="#" method="post" enctype="multipart/form-data" class="billing-form clearfix">
                                            <fieldset>
                                             <label> Имя клиента </label>
                                                <input name="user_name" type="text" value="<?php 
                                                echo $order_to_update->user_name;?>" placeholder=""><br/>
                                                <fieldset class="last">
                                                <label>Способ оплаты</label>
                                                
                                                <select name="payment_method">

                                                <?php foreach ($payment_method as $method): ?>
                                                    <option  <?php  if($method->idpayment_method == $order_to_update->payment_method) echo "selected"; ?>  value="<?php echo $method->idpayment_method; ?>"> <?php echo $method->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label>Способ доставки </label>
                                                <select name="ship_method">
                                                <?php foreach ($ship_method as $method): ?>
                                                    <option  <?php  if($method->idpayment_method == $order_to_update->ship_method) echo "selected"; ?>  value="<?php echo $method->idship_method; ?>"> <?php echo $method->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
    
                                            </fieldset>

                                             <label> Комментарий к заказу </label>
                                                <textarea cols="70" rows="5" name='user_comment' ><?  echo $order_to_update->user_comment; ?></textarea> <br/>
                                             <fieldset>
                                               <label> Статус заказа </label>
                                                <select name="status">
                                                <?php foreach ($statues as $status): ?>
                                                    <option  <?php  if($status->idorder_status == $order_to_update->status) echo "selected"; ?>  value="<?php echo $status->idorder_status; ?>"> <?php echo $status->status; ?></option>
                                                    <?php endforeach; ?>
                                                </select><br/>
                                             </fieldset>

                                  
                                            <fieldset class="last">
                                 <input name="submit" type="submit" value="Отредактировать заказ" class="red-button">
                                             
                                            </fieldset>

                                      
                                            

                                        </form>
                                    </div>
                                    <!--
                                    <h5><small>STEP 3</small><a href="#">Delivery Details</a></h5>

                                    <div class="clearfix">
                                        <form class="billing-form clearfix">
                                            <fieldset>
                                                <label>First name</label>
                                                <input type="text"/>
                                                <label>Company</label>
                                                <input type="text"/>
                                            </fieldset>

                                            <fieldset class="last">
                                                <label>Last Name</label>
                                                <input type="text"/>
                                                <label>E-mail Address</label>
                                                <input type="text"/>
                                            </fieldset>

                                            <label>Address</label>
                                            <input type="text"/>
                                            <input type="text"/>

                                            <fieldset>
                                                <label>City</label>
                                                <input type="text"/>
                                                <label>Zip/Postal Code</label>
                                                <input type="text"/>
                                                <label>Telephone</label>
                                                <input type="text"/>
                                            </fieldset>

                                            <fieldset class="last">
                                                <label>State/Province</label>
                                                <select>
                                                    <option>State</option>
                                                </select>
                                                <label>Country</label>
                                                <select>
                                                    <option>Pakistan</option>
                                                </select>
                                                <label>Fax</label>
                                                <input type="text"/>
                                            </fieldset>

                                            <input type="checkbox"/> <p>My delivery and billing addresses are the same.</p>

                                            <input type="submit" value="continue" class="red-button">

                                        </form>

                                    </div>

                                    <h5><small>STEP 4</small><a href="#">Payment Methods</a></h5>

                                    <div class="clearfix">
                                        <div class=" payment">
                                            <p>Please select the preferred payment method to use on this order.</p>

                                            <form>
                                                <div class="radio-btn">
                                                    <input type="radio"/>
                                                    <label>Cash On Delivery</label>
                                                </div>
                                                <span>$255.99</span>
                                                <label>Add Comments About Your Order </label>
                                                <textarea></textarea>
                                                <input type="submit" value="continue" class="red-button">
                                            </form>
                                        </div>
                                    </div>


                                    <h5><small>STEP 5</small><a href="#">Shipping Method</a></h5>

                                    <div class="clearfix">
                                        <div class=" payment">
                                            <p>Please select the preferred shipping method to use on this order.</p>

                                            <form>
                                                <label>Flat Rate</label>
                                                <div class="radio-btn">
                                                    <input type="radio"/>
                                                    <label>Flat Shipping Rate</label>
                                                    <span>$255.99</span>
                                                </div>
                                                <label>Add Comments About Your Order  </label>
                                                <textarea></textarea>
                                                <input type="submit" value="continue" class="red-button">
                                            </form>
                                        </div>

                                    </div>

                                    <h5><small>STEP 6</small><a href="#">Confirm Orders</a></h5>

                                    <div class="clearfix">
                                        <div class="billing">
                                            <p>Please select the preferred payment method to use on this order.</p>
                                            <ul class="title">
                                                <li>Product Name Here</li>
                                                <li>Model</li>
                                                <li>Quantity</li>
                                                <li>Price</li>
                                                <li class="last">Total</li>
                                            </ul>

                                            <ul>
                                                <li>Product Name Here 2</li>
                                                <li>Model name</li>
                                                <li>3</li>
                                                <li>$145.99</li>
                                                <li class="last">$145.99</li>
                                            </ul>


                                            <ul>
                                                <li>Product Name Here 3</li>
                                                <li>Model name</li>
                                                <li>2</li>
                                                <li>$98.99</li>
                                                <li class="last">$98.99</li>
                                            </ul>



                                            <ul>
                                                <li>Product Name Here 4</li>
                                                <li>Model name</li>
                                                <li>4</li>
                                                <li>$27.99</li>
                                                <li class="last">$27.99</li>
                                            </ul>

                                            <ul>
                                                <li>Product Name Here 1</li>
                                                <li>Model name</li>
                                                <li>1</li>
                                                <li>$255.99</li>
                                                <li class="last">$255.99</li>
                                            </ul>

                                            <div class="totle">
                                                <ul>
                                                    <li>Sub-Total: <span>$27.00</span></li>
                                                    <li>Flat Shipping Rate: <span>$27.00</span></li>
                                                    <li>Eco Tax (-2.00): <span>$27.00</span></li>
                                                    <li>VAT (17.5%):     <span>$27.00</span></li>
                                                    <li>Total: <span>$27.00</span></li>
                                                </ul>
                                                <a class="red-button" href="#">Continue</a>
                                            </div>

                                        </div>


                                    </div>
                                    -->
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
