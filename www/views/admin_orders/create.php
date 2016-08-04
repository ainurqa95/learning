<?php
    include_once(ROOT.'/layout/admin_header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                   
                                    <h5><small> Just Do it</small><a href="#"> Добавление нового товара</a></h5>

                                    <div class=" clearfix">
                                        <fieldset>
                                        <?php if (isset($errors) && $error==true)
                                                    {
                                                        foreach ($errors as $er) {
                                                            echo "<label id='special' style='margin-left=40px'>$er</label><br/>";
                                                            
                                                        }

                                                    }
                                                    elseif(isset($_POST['submit'])) {
                                                            echo "<label id='special' style='margin-left=40px'>Товар успешно добавлен</label><br/>";
                                                    }
                                         ?>
                                         <fieldset>
                                        <form action="#" method="post" enctype="multipart/form-data" class="billing-form clearfix">
                                            <fieldset>
                                             <label>Введите наименование товара </label>
                                                <input name="name" type="text" value="<?php if (isset($UsersData['name']))
                                                echo $UsersData['name'];?>" placeholder="Наименование товара"><br/>
                                                <label>Введите код товара</label>
                                                <input name="code" type="text" value="<?php if (isset($UsersData['code']))
                                                echo $UsersData['code'];?>" placeholder="Код товара"><br/>
                                                <label> Цена товара </label>
                                                <input name="price" type="text" value="<?php if (isset($UsersData['price']))
                                                echo $UsersData['price'];?>" placeholder="Цена товара"><br/>
                                              
                                                <label> Брэнд </label>
                                                <input name="brand" type="text" value="<?php if (isset($UsersData['brand']))
                                                echo $UsersData['brand'];?>" placeholder="Брэнд"><br/>
                                                <label> Полное описание </label>
                                                <textarea cols="70" rows="5" name='description' ><?php if (isset($UsersData['description']))
                                                echo $UsersData['description'];?></textarea> 
                                                <label> Характеристики </label>
                                                <textarea cols="70" rows="5" name='characteristic' ><?php if (isset($UsersData['characteristic']))
                                                echo $UsersData['characteristic'];?></textarea>
                                                <label> Доступность товара </label>
                                                <select name="status">
                                                    <option  selected value='1' >Да</option>
                                                    <option  value='0' >Нет</option>
                                                </select><br/>
                                                <label> Новый товар? </label>
                                                <select name="is_new">
                                                    <option selected value='1' >Да</option>
                                                    <option  value='0' >Нет</option>
                                                </select><br/>
                                                <label> Рекомендуем? </label>
                                                <select name="is_recommended">
                                                    <option selected value='1' >Да</option>
                                                    <option  value='0' >Нет</option>
                                                </select><br/> 
                                               
                                                <label> Главная категория </label>
                                                <select name="second_category_main_category_idmain_cat">
                                                <?php foreach ($categoryList as $main_cat) : 
                                                        if($main_cat['idmain_cat'] == $UsersData['second_category_main_category_idmain_cat'] ):
                                                ?>
                                                      <option selected value='<?php echo $main_cat['idmain_cat']; ?>' ><?php echo $main_cat['name']; ?></option>
                                                  
                                                  <?php else: ?>

                                                    <option  value='<?php echo $main_cat['idmain_cat']; ?>' ><?php echo $main_cat['name']; ?></option>

                                                      <?php endif; endforeach; ?>

                                                </select><br/> 

                                                    <label> Вторая категория </label>
                                                <select name="second_category_idsecond_cat">
                                                    <?php foreach ($SecondCategoryList as $second_cat) : 
                                                        if($second_cat['idsecond_cat'] == $UsersData['second_category_idsecond_cat'] ):
                                                    ?>
                                                        
                                                    <option  selected value='<?php echo $second_cat['idsecond_cat']; ?>' ><?php echo $second_cat['name']; ?></option>
                                                    <?php else: ?>
                                                        <option  value='<?php echo $second_cat['idsecond_cat']; ?>' ><?php echo $second_cat['name']; ?></option>

                                                      <?php endif; endforeach; ?>
                                                
                                                </select><br/> 

                                                     <label> Изображение товара </label>
                                                <input type="file" name="image" placeholder="" value="">
                                            
                                               
                                            </fieldset>
                                  
                                            <fieldset class="last">
                                 <input name="submit" type="submit" value="Добавить товар" class="red-button">
                                             
                                            </fieldset>

                                      
                                            

                                        </form>
                                    </div>
                                   
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
