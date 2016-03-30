<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="page-top" id="templatemo_events"> </div> <!-- /.page-header -->       
        <div class="middle-content">
            <div class="container">
                <div class="row"><!-- first row -->
                	<div class="col-md-4"><!-- first column -->
                        <div class="widget-item">
                            <h3 class="widget-title">Каталог товаров</h3>
                            <div class="service-item">
                            <!-- left bar --> 
                             <div class="service-content">
                                 <? if($categories) :?>
								<div id="list_brands">
									<? foreach($categories as $key=>$item_b) :?>
											<? if($item_b['next_lvl']) :?>
                                            
											<h4><?=$item_b[0];?></h4>
											<div class="left_bar">
											<? foreach($item_b['next_lvl'] as $k=>$v) :?>
												<a href="/category/<?=$k?>"> - <?=$v;?></a><br />
											<? endforeach; ?>											
											</div>
											<? else : ?>
											<a href="/category/<?=$key;?>"><?=$item_b['0']?></a><br />
											<? endif;?>
									<? endforeach; ?>
								</div>
						<? endif;?>
                        <!-- /.left bar --> 
                                </div>  
                            </div> <!-- /.service-item -->  
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <!-- main -->                     
                    <div class="col-md-8"><!-- second column -->
                        <div class="widget-item">
                            <h3 class="widget-title"><?=$product['name']?></h3>
                            <div class="sample-thumb">
                                <img class="img" src="/template/images/<?=$product['img']?>" alt="New Event" title="New Event">
                            </div> <!-- /.sample-thumb -->
                            <p class="newstext"><?=$product['price']?> .грн</p>
                            <p class="newstext"><?=$product['description']?> .грн</p>
                                                        
                            <a href="javascript:sh()">Заказать</a><br />
<div id="info" style="padding-top:15px;">
<h3 class="widget-title">Сделать заказ / уточнить стоимость</h3>
                        <div class="contact-form">
                   
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li class="errors"> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                                                
                        
                            <form name="contactform" id="contactform" action="#" method="post">
                                <p>
                                    <input name="userName" type="text" id="name" placeholder="Ваше имя*"value=""/>
                                </p>
                                <p>
                                    <input type="telephone"  name="userTelephone" placeholder="Телефона(в формате 0501231212)*" value=""/>
                                </p>
                                <input type="submit" name="submit" class="mainBtn" id="submit" value="Отправить сообщение">
                            </form>
                        </div> <!-- /.contact-form -->
</div>
<script type="text/javascript">
sh();
function sh() {
obj = document.getElementById("info");
if( obj.style.display == "none" ) { obj.style.display = "block"; } else { obj.style.display = "none"; }
}
</script>
                                                        
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->                                 
                </div> <!-- /.row first --> 
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->
                
        
    <?php include ROOT . '/views/layouts/footer.php'; ?>