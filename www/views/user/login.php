<?php
    include_once(ROOT.'/layout/header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                    
                
                                    
                                    <h5><small> Just Do it</small><a href="#"> Авторизация</a></h5>

                                    <div class=" clearfix">
                                        <fieldset>
                                        <?php if (isset($errors) && $error==true)
                                                    {
                                                        foreach ($errors as $er) {
                                                            echo "<label id='special' style='margin-left=40px'>$er</label><br/>";
                                                            
                                                        }

                                                    }
                                         ?>
                                         <fieldset>
                                        <form action="#" method="post" class="billing-form clearfix">
                                            <fieldset>
                                             <label>Введите Логин</label>
                                                <input name="login" type="login" value="<?php if(isset($UsersData['login'])) echo $UsersData['login'];?>" placeholder="Логин"><br/>
                                                <label>Введите пароль</label>
                                               
                                                <input name="password" type="password" value="<?php if(isset($UsersData['password'])) echo $UsersData['password'];?>" placeholder="Пароль"><br/>
                                                
                                                <a href="#" > Забыли пароль?</a>
                                            </fieldset>

                                            <input name="submit" type="submit" value="Войти" class="red-button">

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
