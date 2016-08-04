<?php
    include_once(ROOT.'/layout/header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                    
                                    <h5><small>Контакты</small><a href="/contacts/">Связь с нами </a></h5>
                                    <fieldset>
                                        <?php if (isset($errors) && $error==true)
                                                    {
                                                        foreach ($errors as $er) {
                                                            echo "<label id='special' style='margin-left=40px'>$er</label><br/>";
                                                            
                                                        }

                                                    }
                                                    elseif(isset($_POST['submit'])) {
                                                            echo "<label id='special' style='margin-left=40px'>Мы обязательно свяжемся с вами</label><br/>";
                                                    }
                                         ?>
                                         <fieldset>

                                    <div class="clearfix">
                                        <div class=" payment">

                                            <p>Заполните поля, чтобы связаться с нами:)</p>

                                            <form action="#" method="post">
                                                <fieldset>
                                                <label>Введите e-mail адрес</label>
                                                <input name="email" type="text" value="<?php if(isset($UsersData['email'])) echo $UsersData['email'];?>" placeholder="e-mail"><br/>
                                                
                                            </fieldset>
                                                <fieldset>
                                                <label>Введите телефон</label>
                                                <input name="phone" type="text" value="<?php if(isset($UsersData['phone'])) echo $UsersData['phone'];?>" placeholder="телефон"><br/>
                                                
                                            </fieldset>
                                               
                                               
                                                <label>Ваше сообщение </label>
                                                <textarea name='message' value="<?php if(isset($UsersData['message'])) echo $UsersData['message'];?>"></textarea>
                                                <input type="submit" name="submit" value="Отправить" class="red-button">
                                            </form>
                                        </div>
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
