
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

<!--НАЧАЛО адреса и карты-->
<div class="uk-container uk-container-center addresses-and-maps">
	<div class="uk-grid city-row">
		<div class="uk-width-medium-1-4">
			<p class="address">
				<span><?=get_field('address-a',4)?></span> <br>
				<br>
				<a href="tel:<?=get_field('phone1-a',4)?>"><?=get_field('phone1-a',4)?></a> <br>
				<a href="tel:<?=get_field('phone2-a',4)?>"><?=get_field('phone2-a',4)?></a> <br>
				<br>
				<a href="mailto:<?=get_field('email-a',4)?>"><?=get_field('email-a',4)?></a>
			</p>
			<div class="divider uk-hidden-small"></div>
		</div>
		<div class="uk-width-medium-3-4">
			<div class="ymaps">
				<?=get_field('map-a',4)?>
			</div>
			<!--НАЧАЛО shadow-between-sections -->
			<div class="uk-text-center">
				<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-under-navbar.png" alt="Тень">
			</div>
			<!--КОНЕЦ shadow-between-sections -->
		</div>
	</div>
	<div class="uk-grid city-row">
		<div class="uk-width-medium-1-4">
			<p class="address">
				<span><?=get_field('address-ch',4)?></span> <br>
				<br>
				<a href="tel:<?=get_field('phone1-ch',4)?>"><?=get_field('phone1-ch',4)?></a> <br>
				<a href="tel:<?=get_field('phone2-ch',4)?>"><?=get_field('phone2-ch',4)?></a> <br>
				<br>
				<a href="mailto:<?=get_field('email-ch',4)?>"><?=get_field('email-ch',4)?></a>
			</p>
			<div class="divider uk-hidden-small"></div>
		</div>
		<div class="uk-width-medium-3-4">
			<div class="ymaps">
				<?=get_field('map-ch',4)?>
			</div>
			<!--НАЧАЛО shadow-between-sections -->
			<div class="uk-text-center">
				<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-under-navbar.png" alt="Тень">
			</div>
			<!--КОНЕЦ shadow-between-sections -->
		</div>
	</div>
</div>
<!-- КОНЕЦ адреса и карты-->