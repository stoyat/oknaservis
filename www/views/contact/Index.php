<?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->
        <div class="contact-page">
            <div class="container">
                <div class="row">											
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Мы находимся</h3>
                        <div class="map">						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.704478666449!2d31.96891720343987!3d46.9700576244399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5c914afe83c51%3A0x3cbd811d9c6ba2fa!2z0LLRg9C7LiA4LdCz0L4g0JHQtdGA0LXQt9C90Y8sIDM0LCDQnNC40LrQvtC70LDRl9CyLCDQnNC40LrQvtC70LDRl9Cy0YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1457607847047" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
                        <div class="contact-infos">
                            <ul>
                                <li>г.Город</li>
                                <li>ул, Улица</li>
                                <li>Tel: 010-020-0340</li>
                                <li>Email: <a href="mailto:info@okna.com">info@okna.com</a></li>
                            </ul>
                        </div>
                    </div>
					
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Если возникли вопросы, напишите нам мы свяжимся с Вами</h3>
                        <div class="contact-form">
                   
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li class="errors"> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                                                
                        <?php if ($result): ?>
                    <p class="sendE">Сообщение отправлено! Мы перезвоним Вам на указанный номер.</p>
                    <?php endif; ?>
                            <form name="contactform" id="contactform" action="#" method="post">
                                <p>
                                    <input name="userName" type="text" id="name" placeholder="Ваше имя*"value="<?php echo $userName;?>"/>
                                </p>
                                <p>
                                    <input type="telephone"  name="userTelephone" placeholder="Телефона(в формате 0501231212)*" value="<?php echo $userTelephone; ?>"/>
                                </p>
                                <p>
                                    <input name="userCity" type="text" id="subject" placeholder="Ваш город*" value="<?php echo $userCity;?>"/> 
                                </p>
                                <p>
                                    <input type="text"  id="message" name="userText" placeholder="Сообщение"/>
                                     
                                </p>
                                <input type="submit" name="submit" class="mainBtn" id="submit" value="Отправить сообщение">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>
                
        <?php include ROOT . '/views/layouts/footer.php'; ?>