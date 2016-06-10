<div class="header-and-breadcrumbs uk-container uk-container-center">
	<?php pp_get_breadcrumb('uk-breadcrumb'); ?>
	<h1><?=get_the_title()?></h1>
</div>

<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="text-section uk-width-medium-1-5">
			<p>
				<?=get_field('motto-2',4)?>
			</p>
			<img src="<?php bloginfo('template_directory') ?>/public/img/our_work/icon_phone.png">
			<p><a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a></p>
		</div>
		<div class="contacts-section uk-width-medium-4-5">
			<h3><?=get_field('name-company',4)?></h3>
			<img src="<?=get_field('logo',4)?>" class="logo">
			<p>
				<span class="address"><?=get_field('address',4)?></span><br>
				<a href="tel:<?=get_field('phone-1',4)?>" class="phone-number"><?=get_field('phone-1',4)?></a><br>
				<a href="mailto:<?=get_field('email',4)?>" class="email"><?=get_field('email',4)?></a><br>
                    <span class="work-time">
                       <?=get_field('mode',4)?>
                    </span>
			</p>
		</div>
	</div>
</div>
<br><br>