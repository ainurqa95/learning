<?php
    include_once(ROOT.'/layout/admin_header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                    
                                    <h5><small>Привет</small><a href="#"> Админский кабинет  </a></h5>

                                    <div class="clearfix">
                                        
                                        <div class="span6 cheakout clearfix">
                                            <h6>  <span> Здравствуйте, <?php echo $_SESSION['second_name'].' ' .$_SESSION['name']. ' '. $_SESSION['third_name']; ?> </span></h6>
                                            <br/>   <a id="cabinet_links" href="/admin/products"> <label> Управление товарами</label> </a> <br/>
                                            <br/>    <a id="cabinet_links" href="/admin/orders"> <label> Управление заказами </label> </a> <br/>
                                             <br/>    <a id="cabinet_links" href="/admin/category"> <label> Управление категорями </label> </a> <br/><br/>
                                        </div>
                                        
                                       

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
