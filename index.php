﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
    	<nav class="navigation">
    		<ul>
                <li><a href="#go_about" class="smoothScroll">обо мне</a></li>
    			<li><a href="#go_serv" class="smoothScroll">услуги</a></li>
    			<li><a href="#go_materials" class="smoothScroll">бесплатные материалы</a></li>
    			<li><a href="#go_contacts" class="smoothScroll">КОНТАКТЫ</a></li>    			
    		</ul>
    	</nav>
    </header>
                              
    <section class="entry">
    	<div class="entry__text">
    		<h1>Павел Раков</h1>
    		<h3>Самый известный и эффективный тренер женских программ в России</h3>
    		<p>
                <?php
                    $text = get_post( 54 );
                    echo $text->post_content;
                ?>
            </p>
    	</div>
    </section>

    <section class="aboutme">
        <a id="go_about"></a>
        <div class="aboutme__text">
            <div class="aboutme__text--line"></div>
            <h3>Обо мне</h3>
            <p>
                Павел Раков - эксперт и телеведущий во многих средствах массовой информации.
            </p>
            <p>
                Его мероприятия посещают более 50 тысяч человек в год, и еще более 500 тысяч ежегодно обучаются онлайн;
            </p>
            <p>
                В 2015 году удостоен профессиональной докторской степени (звания профессора психологии)
                Международным академическим аккредитационным и аттестационным комитетом (МАААК);
            </p>
            <p>
                Является признанным экспертом в отношениях между мужчиной и женщиной и желанным
                гостем на российском телевидении и радио: "Пусть говорят" (Первый канал),
                "Прямой эфир" (Россия-1), телеканалы НТВ, Домашний, Москва 24, радиостанции Маяк, Радио 7, Романтика, Фреш;
            </p>
            <p>
                Автор серии книг: «Где взять силы для успеха», «На самом деле я умная, но живу как дура»,
                «Дура с двумя высшими желает познакомиться», которые стали бестселлерами в России и СНГ;
            </p>
            <p>
                Ведет рубрику в журнале Cosmopolitan.
            </p>
        </div>
        <div class="aboutme__photo">
            <div class="aboutme__photo--front">
                <!--<img src="'.$slides[0]->small_img.'" alt="">-->
            </div>
            <div class="aboutme__photo--back">
                <img src="<?php bloginfo('template_directory'); ?>/img/002.jpg" alt="">
            </div>
        </div>
    </section>
   
    <section class="services">
      <a id="go_serv"></a>
        <div class="services__arrow"></div>
        <h1 class="block_title">БЛИЖАЙШИЕ МЕРОПРИЯТИЯ</h1>
        <div class="fotorama" data-minwidth="100%" data-maxheight="760" data-fit="scaledown" data-nav="false" data-autoplay="true" >
            <div class="services__container">
                <div class="services__container__col">
                    <div class="services__img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg" alt="">
                    </div>
                    <div class="services__text">
                        <div class="services__text--box">
                            <h4>Это прекрасная возможность создать или улучшить </h4>
                            <p>отношения, о которых вы мечтали за очень короткий
                                период времени!</p>
                        </div>
                    </div>
                </div>
                <div class="services__container__col">
                    <div class="services__text">
                        <div class="services__text--box">
                            <h4>Скандально известная авторская встреча для женщин</h4>
                            <p>28-29 мая в Санкт-Петербурге</p>
                        </div>
                    </div>
                    <div class="services__img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide2.jpg" alt="">
                    </div>
                </div>
                <div class="services__container__col">
                    <div class="services__img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide4.jpg" alt="">
                    </div>
                    <div class="services__text">
                        <div class="services__text--box">
                            <h4>Мы этого добились! </h4>
                            <p>Наше мероприятие стало лидером рынка, который собирает многотысячные залы, нас приглашают в разные города и страны.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services__container">
                <div class="services__container__col">
                    <div class="services__img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide5.jpg" alt="">
                    </div>
                    <div class="services__text">
                        <div class="services__text--box">
                            <h4>Что ты получишь? </h4>
                            <p>1) С тобой начнут знакомиться успешные мужчины.</p>
                            <p>2) Твой мужчина, с которым ты живешь, станет ещё более успешным.</p>
                            <p>3) Твой сын начнет лучше учиться и стремиться к развитию.</p>
                        </div>
                    </div>
                </div>
                <div class="services__container__col">
                    <div class="services__text">
                        <div class="services__text--box">
                            <h4>Как стать «Девушкой на миллион»</h4>
                            <p>09 - 10 июля 2016 г., Москва</p>
                        </div>
                    </div>
                    <div class="services__img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide7.jpg" alt="">
                    </div>
                </div>
                <div class="services__container__col">
                    <div class="services__img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide6.jpg" alt="">
                    </div>
                    <div class="services__text">
                        <div class="services__text--box">
                            <h4>ЕГО МЕРОПРИЯТИЯ СТАЛИ ЛЕГЕНДОЙ.
                                ЕГО ИМЯ ЗНАЮТ ВСЕ.
                                ЕГО СЛУШАЮТ ДЕСЯТКИ ТЫСЯЧ ЖЕНЩИН. </h4>

                            <p>ВЧЕРАШНИЕ "УЧИЛКИ" ВЫХОДЯТ ЗАМУЖ ЗА БИЗНЕСМЕНОВ, "СЕРЫЕ МЫШКИ" КАТАЮТСЯ НА BENTLEY,</p>
                            <p>"ГОЛУБЫЕ ЧУЛКИ" СВЕРКАЮТ БРИЛЛИАНТАМИ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="materials">
        <a id="go_materials"></a>
        <div class="contain">
        <h1 class="block_title">бесплатные материалы</h1>
            <!--            <h2 class="block_descript"> </h2>-->
            <div class="store__flex">
                <?= do_shortcode( '[free_book]' ); ?>
            </div>
        </div>
    </section>

    <?php echo do_shortcode("[reviews]");?>

    <section class="contactme"> 
        <a id="go_contacts"></a>                       
            <h1 class="block_title">Свяжитесь со мной</h1>
            <div class="contactme__form">
                <?php echo do_shortcode( "[contact-form-7 id='17' title='form']" ); ?>
            </div>
    </section>
    
    <section class="contactinfo">
        <div class="contain">
            <div class="contactinfo__block">
                <h3>контакты</h3>
                <div class="row">
                    <?php if( get_theme_mod('tw_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('tw_textbox'); ?>" ><i class="fa fa-twitter"></i></a><?php } ?>
                    <?php if( get_theme_mod('fb_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('fb_textbox'); ?>" ><i class="fa fa-facebook"></i></a><?php } ?>
                    <?php if( get_theme_mod('p_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('p_textbox'); ?>" ><i class="fa fa-pinterest"></i></a><?php } ?>
                    <?php if( get_theme_mod('gpl_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('gpl_textbox'); ?>" ><i class="fa fa-google-plus"></i></a><?php } ?>
                    <?php if( get_theme_mod('vk_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('vk_textbox'); ?>" ><i class="fa fa-vk"></i></a><?php } ?>
                    <?php if( get_theme_mod('in_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('in_textbox'); ?>" ><i class="fa fa-instagram"></i></a><?php } ?>
                    <?php if( get_theme_mod('ok_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('ok_textbox'); ?>" ><i class="fa fa-odnoklassniki"></i></a><?php } ?>
                    <?php if( get_theme_mod('yt_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('yt_textbox'); ?>" ><i class="fa fa-youtube"></i></a><?php } ?>
                    <?php if( get_theme_mod('vim_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('vim_textbox'); ?>" ><i class="fa fa-vimeo"></i></a><?php } ?>
                    <?php if( get_theme_mod('tm_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('tm_textbox'); ?>" ><i class="fa fa-tumblr"></i></a><?php } ?>
                    <?php if( get_theme_mod('sk_textbox') != ''){ ?><a target="_blank" href="<?php echo get_theme_mod('sk_textbox'); ?>" ><i class="fa fa-skype"></i></a><?php } ?>
                </div>

                <div class="row">
                    <p class="phone_number"><?php echo get_theme_mod('phone_textbox'); ?></p>
                    <p class="email_adress"><?php echo get_theme_mod('email_textbox'); ?></p>
                    <p>Сайт: 1r1.ru</p>
                </div>

            </div>
        </div>
    </section>
    
    <footer class="footer">
        <h5>© 2015 - Все права защищены</h5>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="send-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Оформление заказа</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Имя</span>
                            <input type="text" name="order-name" class="form-control" placeholder="Укажите ваше имя" aria-describedby="sizing-addon1">
                        </div>
                        <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">E-mail</span>
                            <input type="email" name="order-mail" class="form-control" placeholder="Укажите ваш e-mail" aria-describedby="sizing-addon1">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-success send-free-order">Отправить</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ok-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Спасибо. Мы вышлем Вам материал на указанный адрес электронной почты в ближайшее время</h3>
                    <a href="/" class="btn btn-warning">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="buy-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Товар добавлен в корзину</h4>
                </div>
                <div class="modal-body">
                    <!--<p>Укажите ваше имя:</p>
                    <input type="text" name="order-name">
                    <p>Укажите ваш e-mail:</p>
                    <input type="email" name="order-mail">-->
                    <div class="row">
                        <div class="pull-left">
                            <a class="gonext" href="#" data-dismiss="modal">
                                <h4> Вернуться на сайт</h4>
                            </a>
                        </div>
                        <div class="pull-right">
                            <a class="goorder" href="/cart">
                                <h4>Оформить заказ <span class="glyphicon glyphicon-share-alt"></span></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-success send-order" data-dismiss="modal">Отправить</button>
                </div>-->
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
<?= do_shortcode('[to_scroll]'); ?>
</body>
</html>