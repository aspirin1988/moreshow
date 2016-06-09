<?php $obj=get_queried_object()?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<?php wp_head() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css" >
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/dotnav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.gradient.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/app.css">
</head>
<body>

<!--Offcanvas-->
<div id="my-id" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav mobile-nav-menu">
			<?php
			/*print_r(get_post_type());*/
			$type=$obj->post_type;
			if (is_tax()||is_category()){$id=$obj->term_id; $type='category'; }else{$id=$obj->ID;}
			$menu=wp_get_nav_menu_items('main');
			foreach ($menu as $key=>$val)  {
				$class='';
				if($id==$val->object_id&&$type==$val->object){
					$class='uk-active';} ?>
				<li class="<?=$class?>" >
					<a href="<?=$val->url?>"><?=$val->title?></a>
				</li>
			<?php }?>
		</ul>
	</div>
</div>
<!--End offcanvas-->

<!--Header-->
<header>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4 logo-col">
				<a href="/"><img src="<?=get_field('logo-h',4)?>" alt="Logo"></a>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
				<div class="uk-grid text-header">
					<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
						<h4><?=get_field('motto-1',4)?></h4>
						<h3><?=get_field('motto-2',4)?></h3>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-flex uk-flex-middle uk-flex-right">
						<a href="#my-id" class="uk-navbar-toggle mobile-nav uk-hidden-large" data-uk-offcanvas></a>
						<img src="<?php bloginfo('template_directory') ?>/public/img/header_icon.png" alt="">
						<div class="contacts-header">
							<p>Директор - <a href="tel:<?=get_field('phone-dir',4)?>"><?=get_field('phone-dir',4)?></a></p>
							<p>Завуч - <a href="tel:<?=get_field('phone-zav',4)?>"><?=get_field('phone-zav',4)?></a></p>
							<p>Бухгалтерия - <a href="tel:<?=get_field('phone-fax',4)?>"><?=get_field('phone-fax',4)?></a></p>
						</div>
					</div>
					<!--Menu desktop-->
					<div class="uk-width-1-1 nav-header uk-flex uk-flex-center uk-visible-large">
						<nav class="uk-navbar " data-uk-sticky="{clsactive: 'sticky-custom'}">
							<ul class="uk-navbar-nav " >

								<?php
								/*print_r(get_post_type());*/
								$type=$obj->post_type;
								if (is_tax()||is_category()){$id=$obj->term_id; $type='category'; }else{$id=$obj->ID;}
								$menu=wp_get_nav_menu_items('main');
								foreach ($menu as $key=>$val)  {
									$class='';
									if($id==$val->object_id&&$type==$val->object){
										$class='uk-active';} ?>
									<li class="<?=$class?>" >
										<a href="<?=$val->url?>"><?=$val->title?></a>
									</li>
								<?php }?>
							</ul>
						</nav>
					</div>
					<!--End menu desktop-->
				</div>
			</div>
		</div>
	</div>
</header>
<!--End header-->
