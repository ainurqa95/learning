<?php
    include_once(ROOT.'/layout/admin_header.php');

?>
     <!-- BAR -->
                <div class="bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="title-bar">
                                    <h1> Удаление заказа </h1>
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
                                 
                                         <li  > Вы точно хотите </li>
                                          <li class="last" >  удалить заказ с ID <?php echo $order_to_delete->idorders; ?>? </li>
                                        
                                    </ul>
                                     <ul class=" clearfix">
                                       
                                             <form action="#" method="post" >
                                          <input name="submit" type="submit"  value="Удалить" class="red-button black">
                                          </form>
                                                                                 
                                        
                                    </ul>


                    
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
