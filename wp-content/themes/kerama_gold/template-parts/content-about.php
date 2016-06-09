
<!--НАЧАЛО shadow-under-navbar -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-under-navbar.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-under-navbar -->

<!--НАЧАЛО main-title_and_breadcrumbs-->
<div class="main-title uk-container uk-container-center">
	<div>
		<h1><?php the_title() ?></h1>
	</div>

	<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>
</div>
<!--КОНЕЦ main-title_and_breadcrumbs-->

<!--НАЧАЛО about, общие стили с таким же блоком на стр.Главная-->
<div class="uk-container uk-container-center about on-about">
	<div class="uk-grid uk-grid-collapse">
		<div class="uk-width-medium-1-2 img-section">
			<img src="<?=get_field('logo',7)?>" alt="Лого">
		</div>
		<div class="uk-width-medium-1-2 text-section">
			<p><?=get_field('motto')?></p>
		</div>
	</div>
</div>
<!-- КОНЕЦ about, общие стили с таким же блоком на стр.Главная-->

<!--НАЧАЛО about-content -->
<div class="uk-container uk-container-center about-content">
	<p>
		<?=get_the_content() ?>
	</p>
	<?php $gallery=pp_gallery_get()?>
	<img src="<?=$gallery[0]->url?>" alt="Плитка">
</div>
<!-- КОНЕЦ about-content -->