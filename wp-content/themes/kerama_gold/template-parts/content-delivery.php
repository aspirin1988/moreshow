<!--НАЧАЛО shadow-under-navbar -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-under-navbar.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-under-navbar -->

<!--НАЧАЛО main-title_and_breadcrumbs-->
<div class="main-title uk-container uk-container-center">
	<div>
		<h1><?=get_the_title()?></h1>
	</div>

	<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>

</div>
<!--КОНЕЦ main-title_and_breadcrumbs-->

<!--НАЧАЛО карта-->
<div class="uk-container uk-container-center map">
	<img src="<?=get_field('map',get_the_ID())?>" alt="Карта">
</div>
<!-- КОНЕЦ карта-->

<!--НАЧАЛО shadow-between-sections -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-under-navbar.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-between-sections -->

<!--НАЧАЛО информация о доставке-->
<div class="uk-container uk-container-center delivery-info">
	<div class="uk-grid uk-grid-large">
		<div class="uk-width-medium-6-10">
			<h2>Информация о доставке</h2>
			<div class="trucks">
				<img src="<?=get_field('car')?>">
				<img src="<?=get_field('car')?>">
				<img src="<?=get_field('car')?>">
				<img src="<?=get_field('car')?>">
				<img src="<?=get_field('car')?>" class="uk-hidden-small">
				<img src="<?=get_field('car')?>" class="uk-hidden-small">
				<img src="<?=get_field('car')?>" class="uk-hidden-small">
				<img src="<?=get_field('car')?>" class="uk-hidden-small">
				<img src="<?=get_field('car')?>" class="uk-hidden-small">
			</div>
			<p>
				<?=get_the_content()?>
			</p>
		</div>
		<div class="uk-width-medium-4-10 addresses">
			<p class="address">
				<span><?=get_field('address-a',4)?></span> <br>
				<br>
				<a href="tel:<?=get_field('phone1-a',4)?>"><?=get_field('phone1-a',4)?></a> <br>
				<a href="tel:<?=get_field('phone2-a',4)?>"><?=get_field('phone2-a',4)?></a> <br>
				<br>
				<a href="mailto:<?=get_field('email-a',4)?>"><?=get_field('email-a',4)?></a>
			</p>
			<div class="divider"></div>
			<p class="address">
				<span><?=get_field('address-ch',4)?></span> <br>
				<br>
				<a href="tel:<?=get_field('phone1-ch',4)?>"><?=get_field('phone1-ch',4)?></a> <br>
				<a href="tel:<?=get_field('phone2-ch',4)?>"><?=get_field('phone2-ch',4)?></a> <br>
				<br>
				<a href="mailto:<?=get_field('email-ch',4)?>"><?=get_field('email-ch',4)?></a>
			</p>
		</div>
	</div>
</div>
<!-- КОНЕЦ информация о доставке-->