<?php
    include_once(ROOT.'/layout/admin_header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                   
                                    <h5><small> Just Do it</small><a href="/admin/category/">Редактирование главной категории</a></h5>

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
                                             <label> Наименование </label>
                                                <input name="name" type="text" value="<?php echo $category_to_update->name;?>" placeholder="Наименование категории"><br/>
                                               <label> Порядок сортировки </label>
                                               <input name="sort_order" type="text" value="<?php echo $category_to_update->sort_order;?>" placeholder="Наименование категории"><br/>

                                                <label> Доступность категории </label>
                                                <select name="status">
                                                    <option  value='1' <?php if ($category_to_update->status == 1) echo ' selected="selected"'; ?> >Да</option>
                                                    <option  value='0' <?php if ($category_to_update->status == 0) echo ' selected="selected"'; ?> >Нет</option>
                                                </select><br/>
                                                
                                                <label> Изображение категории </label>
                                                <input type="file" name="image" placeholder="" value=""><br/><br/>
                                                    
                                            
                                               
                                            
                                           
                                            <fieldset class="last">
                                 <input name="submit" type="submit" value="Отредактировать главную категорию" class="red-button">
                                             
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
