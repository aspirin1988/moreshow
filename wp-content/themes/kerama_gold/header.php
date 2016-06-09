<?php $obj=get_queried_object()?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.css">
</head>
<body>
<header>
	<div class="uk-container uk-container-center">
		<div class="search-and-phone-numbers">
			<?php get_search_form(); ?>
			<div class="phone-numbers">
				<img src="<?php bloginfo('template_directory') ?>/public/img/icon-mobile.png" class="uk-hidden-small">
				<a href="tel:<?=get_field('phone1-a',4)?>"><?=get_field('phone1-a',4)?></a>
				<br class="uk-visible-small"> <a href="tel:<?=get_field('phone2-a',4)?>"><?=get_field('phone2-a',4)?></a>
			</div>
		</div>
	</div>
	<nav class="uk-navbar">
		<div class="uk-container uk-container-center">
			<a href="index.html" class="logo">
				<img src="<?=get_field('logo',4)?>" alt="Лого">
			</a>
			<div class="uk-navbar-flip">
				<ul class="uk-navbar-nav uk-hidden-small uk-navbar-attached">
					<?php if (is_tax()||is_category()){$id=$obj->term_id;}else{$id=$obj->ID;}
					$menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  {
						$class='';
						if($id==$val->object_id){
							$class='active';} ?>
						<li class="<?=$class?>" >
							<a href="<?=$val->url?>"><?=$val->title?></a>
						</li>
					<?php }?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="{target:'#my-id'}"></a>
			</div>
		</div>
	</nav>

	<div id="my-id" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
				<?php if (is_tax()||is_category()){$id=$obj->term_id;}else{$id=$obj->ID;}
				$menu=wp_get_nav_menu_items('main');
				foreach ($menu as $key=>$val)  {
					$class='';
					if($id==$val->object_id){
						$class='active';} ?>
					<li class="<?=$class?>" >
						<a href="<?=$val->url?>"><?=$val->title?></a>
					</li>
				<?php }?>
			</ul>
		</div>
	</div>

	<!-- Needed for padding at top of body, to look more like Bootstrap's example -->
	<br>
</header>
