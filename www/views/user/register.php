<?php
    include_once(ROOT.'/layout/header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                    <!--
                                    <h5><small>Шаг 1</small><a href="/registration"> Регистрация </a></h5>

                                    <div class="clearfix">
                                        
                                        <div class="span6 cheakout clearfix">
                                            <h6>New Customer ? <span>Choose your Checkout options:</span></h6>
                                            <form>
                                                <input type="radio"> <label>Check out as a Guest</label> <br/>
                                                <input type="radio"> <label>Register Account</label>

                                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                                <input type="submit" value="continue">
                                            </form>
                                        </div>
                                        -
                                        <div class="span6 cheakout clearfix register">
                                            <h6> Заполните пожалуйста форму <span></span></h6>
                                            <form action="" method="post" class="clearfix">
                                                <label>Введите Логин</label>
                                                <input name="login" type="login" placeholder="Логин"><br/>
                                                <label>Введите e-mail адрес</label>
                                                <input name="email" type="text" placeholder="e-mail"><br/>
                                                <label> Ваш пароль</label>
                                                <input name="password" type="password" placeholder="Пароль"><br/>
                                                <label>  Повторите пароль</label>
                                                <input name="password2" type="password" placeholder="Пароль"><br/>
                                                <a href="#" >Forgot your password ?</a>
                                                <input type="submit" value="Login">
                                            </form>
                                        </div>

                                    </div>
                                    -->
                                    <h5><small> Just Do it</small><a href="#"> Регистрация</a></h5>

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
                                        <form action="#" method="post" class="billing-form clearfix">
                                            <fieldset>
                                             <label>Введите Логин</label>
                                                <input name="login" type="login" value="<?php if(isset($UsersData['login'])) echo $UsersData['login'];?>" placeholder="Логин"><br/>
                                                <label>Введите e-mail адрес</label>
                                                <input name="email" type="text" value="<?php if(isset($UsersData['email'])) echo $UsersData['email'];?>" placeholder="e-mail"><br/>
                                                <label> Ваш пароль</label>
                                                <input name="password" type="password" value="<?php if(isset($UsersData['password'])) echo $UsersData['password'];?>" placeholder="Пароль"><br/>
                                                <label>  Повторите пароль</label>
                                                <input name="password2" type="password" value="<?php if(isset($UsersData['password2'])) echo $UsersData['password2'];?>"  placeholder="Пароль"><br/>
                                                <!-- <a href="#" >Forgot your password ?</a> -->
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
                                            <!--
                                            <fieldset class="last">
                                                <label>Дата рождения</label>
                                                <label>Год </label>
                                                <select>
                                                    <option>State</option>
                                                </select>
                                                <label>Месяц</label>
                                                <select>
                                                    <option>Pakistan</option>
                                                </select>
                                                <label> День</label>
                                                 <select>
                                                    <option>Pakistan</option>
                                                </select>
                                            </fieldset>
                                            -->
                                            <input name="check" type="checkbox"/> <p>Даю согласие на обработку своих данных</p>

                                            <input name="submit" type="submit" value="Зарегестрироваться" class="red-button">

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




    <?    include_once(ROOT.'/layout/footer.php');
                    ?>

	
		</body>
</html>
