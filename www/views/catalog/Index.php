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
                  <?php foreach ($latestProducts as $product): ?>
                    <div class="col-md-2"><!-- second column -->
                        <div class="widget-item">
                            <h3 class="widget-title"><?=$product['name']?></h3>
                            <div class="sample-thumb">
                                <img src="/template/images/<?=$product['img']?>" alt="New Event" title="New Event">
                            </div> <!-- /.sample-thumb -->
                            <p class="newstext"><?=$product['price']?></p>
                            <a href="/product/<?=$product['id']?>">Подробнее...</a>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <?php endforeach;?>   
                </div> <!-- /.row first --> 
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->
                       
    <?php include ROOT . '/views/layouts/footer.php'; ?>