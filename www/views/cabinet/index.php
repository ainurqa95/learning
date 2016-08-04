<?php
    include_once(ROOT.'/layout/header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                    
                                    <h5><small>Привет</small><a href="/registration"> Личный кабинет </a></h5>

                                    <div class="clearfix">
                                        
                                        <div class="span6 cheakout clearfix">
                                            <h6>  <span> Здравствуйте, <?php echo $_SESSION['second_name'].' ' .$_SESSION['name']. ' '. $_SESSION['third_name']; ?> </span></h6>
                                            <br/>   <a id="cabinet_links" href="/cabinet/edit"> <label> Редактировать данные</label> </a> <br/>
                                            <br/>    <a id="cabinet_links" href="/cabinet/redact"> <label> Список покупок </label> </a> <br/>
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
