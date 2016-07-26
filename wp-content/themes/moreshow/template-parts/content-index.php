
<div class="big-logo-and-slogan">
	<a href="/">
		<img src="<?=get_field('logo',4)?>" alt="Лого" class="logo">
	</a>
	<p class="slogan"><?=get_field('motto',4)?></p>
</div>

<div class="services-on-main">
	<?php $menu=wp_get_nav_menu_items('main-menu');
	foreach ($menu as $key=>$val) : ?>
	<a href="<?= $val->url ?>">
		<span>
			<img src="<?= get_the_post_thumbnail_url($val->ID) ?>" alt="<?= $val->title ?>">
		</span>
		<p><?= $val->title ?></p>
	</a>
	<?php endforeach; ?>
</div>