<?php
      include_once(ROOT.'/layout/admin_header.php');
?>
    

                <!-- PRODUCT-OFFER -->
                <div class="product_wrap">

                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="check-accordion">
                                   
                                        
                                
                                    <h5><small> Заказ</small><a href="#"> Просмотр </a></h5>

                                   <ol class="rounded">
                                      <li><p > ФИО клиента</p></li>
                                      <li><p > Телефон </p></li>
                                      <li><p > e-mail </p></li>
                                      <li><p > Дата заказа</p></li>
                                      <li><p > Комментарий клиента</p></li>
                                      <li><p > Статус заказа </p></li>
                                      <li><p > Способ оплаты </p></li>
                                      <li><p > Способ доставки </p></li>
                                    </ol>

                                    <ol class="rounded">
                                  <li><p > <? echo $order_to_view->user_name; ?></p></li>
                                  <li><p > <? echo $order_to_view->user_phone; ?></p></li>
                                  <li><p > <? echo $order_to_view->email; ?></p></li>
                                  <li><p > <? echo $order_to_view->datetime; ?></p></li>
                                  <li><p > <? if ($order_to_view->user_comment) echo($order_to_view->user_comment); else echo "нет комментария" ?></p></li>
                                  <?php foreach ($statues as $status) :
                                        if ($status->idorder_status == $order_to_view->status): ?>
                                              <li><p > <? echo $status->status; ?></p></li>
                                        <? break;
                                 endif;  endforeach; ?>
                                 <?php foreach ($payment_method as $method) :
                                        if ($method->idpayment_method == $order_to_view->payment_method): ?>
                                              <li><p > <? echo $method->name; ?></p></li>
                                        <? break;
                                 endif;  endforeach; ?>
                                 <?php foreach ($ship_method as $method) :
                                        if ($method->idship_method == $order_to_view->ship_method): ?>
                                              <li><p > <? echo $method->name; ?></p></li>
                                        <? break;
                                 endif;  endforeach; ?>
                                
                                </ol>
                                    
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
