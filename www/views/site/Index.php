<?php include ROOT . '/views/layouts/header.php'; ?>

        <!-- top slider -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="overlay"></div>
                        <img src="/template/images/templatemo_slide_1.jpg" alt="Special 1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div id= "backs" class="flex-caption visible-lg" >
								<img src="/template/images/templatemo_slide_1.jpg" alt="Special 1">
                                    <h3 class="title">Ворота</h3>
                                    <p>Секционные ворота <span class="green">12000 грн.</span>. <br>
                            			<a rel="nofollow" href="/product/51">Информация о товаре</a>.</p>
                                    
                                </div>	
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="/template/images/templatemo_slide_2.jpg" alt="Special 2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div id="backs" class="flex-caption visible-lg" >
                                   <img src="/template/images/temp2.jpg" alt="Special 1">
                                    <h3 class="title">Роллеты</h3>
                                    <p>Защитные ролеты в современном городе устанавливаются повсеместно на окна, двери, гаражные проемы или же используются в качестве въездных ворот во двор частного дома.</p>
                                    
                                </div>	
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="/template/images/templatemo_slide_3.jpg" alt="Special 3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <img src="/template/images/temp3.jpg" alt="Special 1">
                                    <h3 class="title">Фигурные окна</h3>
                                    <p>Фигурные окна производятся из ПВХ – профилей. Этот материал позволяет без ограничений экспериментировать с формой и цветом окон.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- /.top flexslider -->       
        <div class="container">       
            <div class="row">           
                <div class="our-listing owl-carousel">
				<?php foreach ($ourWork as $work): ?>
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Наши работы</h4>
                            </div>
                            <img src="/template/images/<?=$work['jpg']?>" alt="destination 1">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5><?=$work['name']?></h5>
                            
                            <a href="#" class="price-btn">Наши работы</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
					<?endforeach;?>                  
                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
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
					<?php foreach ($latesNews as $news): ?>
                    <div class="col-md-4"><!--column -->
                        <div class="widget-item">
                            <h3 class="widget-title"><?=$news['title']?></h3>
                            <div class="sample-thumb">
                                <img src="/template/images/<?=$news['jpg']?>" alt="New Event" title="New Event">
                            </div> <!-- /.sample-thumb -->
                            <p><?=$news['anons']?></p>
                            <a href="/news/<?=$news['news_id']?>">Подробнее ...</a>
                            <!-- and main --> 
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    <?endforeach;?>                 
                </div> <!-- /.row first --> 
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->
        <div class="page-top" id="templatemo_events"></div> <!-- /.page-header -->

<?php include ROOT . '/views/layouts/footer.php'; ?>
		      