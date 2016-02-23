<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fontawesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.css">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">

	<!-- Owl Carousel Assets -->
    <link href="<?php echo get_template_directory_uri(); ?>/libs/owl/owl.carousel.css" rel="stylesheet">

	<script src="<?php echo get_template_directory_uri(); ?>/libs/modernizr/modernizr.js"></script>
	<?php wp_head(); ?>
</head>

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="top-logo">
						<a href="/" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.gif" alt=""></a>
						<div class="top_line1"></div>
						<div class="top_line2"></div>
						<div class="bottom_line"></div>

					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							 <nav id="right-top-nav">
                <ul class="nav nav-pills">
							    <li><span class="address">г.Нальчик, ул. Идарова, 192а</span></li>
							    <li><span class="phone">8 (495) 662-32-52</span></li>
							 </ul>           </nav>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<form action="/search/index.php" id="right-top-searchbox">
								<iframe style="width:0px; height:0px; border: 0px;" src="javascript:''" name="qplSKIW_div_frame" id="qplSKIW_div_frame"></iframe>
								<input size="15" name="q" id="qplSKIW" value="" class="search-suggest" type="text" autocomplete="off">        
								<button type="submit" class="submit" name="s"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<div class="row">	
						<div class="col-lg-12 col-md-12 ">
							<a id="touch-menu" class="mobile-menu" href="#"><i class="fa fa-bars"></i> Навигация</a>
							<nav class="menu_wrap">
								<?php 
								$args =array(
									'theme_location'  => '',
									'menu'            => 'Главное меню', 
									'container'       => 'div', 
									'container_class' => '', 
									'container_id'    => '',
									'menu_class'      => 'menu', 
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="menu">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								) ;
								?>
								<?php wp_nav_menu( $args ); ?>
								<!--
							    <ul class="menu">
									<li class="active"><a href="/">Главная</a></li>
									<li><a href="/katalog/">Каталог</a>
								   	<li class="dropdown"><a href="#">Кто мы <span class="fa fa-angle-down"></span></a>
								   		<ul class="sub-menu">
											<li><a href="/o-nas/">О нас</a></li>
											<li><a href="/vakansii/">Вакансии</a></li>
									   	</ul>
									</li>
								   	<li><a href="/oplata-i-dostavka/">Оплата и доставка </a>
								   	<li><a href="/novosti/">Новости</a>
								   	<li><a href="/kontakty/">Контакты</a>
								</ul>
								-->
  							</nav>
						</div>
					</div>

				</div>
			</div>
		</div>
	</header>