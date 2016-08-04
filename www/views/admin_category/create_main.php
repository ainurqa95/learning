<?php
    include_once(ROOT.'/layout/header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                   
                                    <h5><small> Just Do it</small><a href="#"> Добавление новой главной категории</a></h5>

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
                                             <label>Введите наименование </label>
                                                <input name="name" type="text" value="<?php if (isset($UsersData['name']))
                                                echo $UsersData['name'];?>" placeholder="Наименование категории"><br/>
                                               

                                                <label> Доступность категории </label>
                                                <select name="status">
                                                    <option  selected value='1' >Да</option>
                                                    <option  value='0' >Нет</option>
                                                </select><br/>
                                                
                                                <label> Изображение категории </label>
                                                <input type="file" name="image" placeholder="" value=""><br/><br/>
                                                    
                                            
                                               
                                            
                                           
                                            <fieldset class="last">
                                 <input name="submit" type="submit" value="Добавить главную категорию" class="red-button">
                                             
                                            </fieldset>

                                      
                                            

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
