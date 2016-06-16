<?php
function check_child($menu,$parent)
{	$count=0;
	foreach ($menu as $value )
	{
		if ($value->menu_item_parent==$parent->ID)
		{
			$count++;
		}

	}
	return $count;
}
$obj=get_queried_object()?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
	<style>
		a :hover {
			 color: <?=get_field('hover_color',4)?>;
		}
		.uk-navbar .uk-navbar-nav > li.uk-open > a, .uk-navbar .uk-navbar-nav > li:hover > a, .uk-navbar .uk-navbar-nav > li > a:focus{
			background: transparent;
			color: <?=get_field('hover_color',4)?>;
		}
		a:hover{
			color: <?=get_field('hover_color',4)?>;
		}
		.header-and-breadcrumbs .uk-breadcrumb a:hover{
			color: <?=get_field('hover_color',4)?>;
			border-bottom: 1px <?=get_field('hover_color',4)?> solid;
		}

		.sub-services-list li a:hover {
			color: <?=get_field('hover_color',4)?>;
		}

		.photos-and-captions a:hover p{
			color: <?=get_field('hover_color',4)?>;
		}

		.uk-navbar .uk-dropdown .uk-nav-navbar > li > a:focus, .uk-navbar .uk-dropdown .uk-nav-navbar > li > a:hover
		{
			background: <?=get_field('hover_color',4)?>;
		}
	</style>
</head>

<?php $bg=get_field('bg-image'); if (!$bg){$bg=get_field('bg-image',4);} ?>

<body class="<?=$obj->post_name ?>" style="background-image: url(<?=$bg?>);">

<header>
	<div class="navbar-col">
		<nav class="uk-navbar">
			<ul class="uk-navbar-nav uk-hidden-small">
				<?php
				if (is_tax()||is_category()) {
					$id = $obj->term_id;
				}else {
					$id = $obj->ID;
				}
				$menu=wp_get_nav_menu_items('main');
				foreach ($menu as $key=>$val)  :
					if (!$val->menu_item_parent):
						$class='';
						if($id==$val->object_id) {
							$class = 'active';
						}
						if (check_child($menu,$val)){
						?>
							<li class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false">
								<a href="<?=$val->url?>"><?=$val->title?></a>
								<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0;">
									<ul class="uk-nav uk-nav-navbar">
								<?php foreach ($menu as $key1=>$val1)  :
										if ($val1->menu_item_parent==$val->ID): ?>
										<li>
											<a href="<?=$val1->url?>"><?=$val1->title?></a>
										</li>
										<?php endif; endforeach; ?>
									</ul>
								</div>
							</li>
						<?php }else { ?>
						<li class="<?=$class?>" >
							<a href="<?=$val->url?>"><?=$val->title?></a>
						</li>
				<?php } endif; endforeach;?>
			</ul>
			<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
		</nav>

		<div id="my-id" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
					<?php
					if (is_tax()||is_category()) {
						$id = $obj->term_id;
					}else {
						$id = $obj->ID;
					}
					$menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  :
						if (!$val->menu_item_parent):
							$class='';
							if($id==$val->object_id) {
								$class = 'active';
							}
							if (check_child($menu,$val)){
								?>
							<li class="uk-parent" aria-expanded="false">
							<a href="#"><?=$val->title?></a>
							<ul class="uk-nav-sub">
								<?php foreach ($menu as $key1=>$val1)  :
									if ($val1->menu_item_parent==$val->ID): ?>
										<li>
											<a href="<?=$val1->url?>"><?=$val1->title?></a>
										</li>
									<?php endif; endforeach; ?>
							</ul>
							</li>
							<?php }else { ?>
								<li class="<?=$class?>" >
									<a href="<?=$val->url?>"><?=$val->title?></a>
								</li>
							<?php } endif; endforeach;?>
				</ul>
			</div>
		</div>
	</div>
	<?php if (is_front_page()):?>
	<div class="logo-and-slogan-col">
		<a href="/">
			<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
		</a>
		<p class="slogan">
			<?=get_field('motto',4)?>
		</p>
	</div>
	<?php else: ?>
	<div class="logo-and-slogan-col">
		<a href="/">
			<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
		</a>
		<p class="slogan">
			<?=get_field('motto',4)?>
		</p>
	</div>
	<?php endif; ?>
	<div class="contacts-col">
		<p>
			<a href="tel:<?=get_field('phone-1',4)?>" class="phone-number"><?=get_field('phone-1',4)?></a>
			<a href="mailto:<?=get_field('email',4)?>" class="email"><?=get_field('email',4)?></a>
		</p>
	</div>
</header>