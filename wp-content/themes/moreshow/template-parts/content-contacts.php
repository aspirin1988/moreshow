<div class="semi-transparent-background">
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
				<span class="circle-background">
					<img src="<?php bloginfo('template_directory') ?>/public/img/our_work/icon_phone.png">
				</span>
				<p><a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a></p>
			</div>
			<div class="contacts-section uk-width-medium-4-5">
				<h3><?=get_field('name-company',4)?></h3>
				<img src="<?=get_field('logo',4)?>" class="logo">
				<p>
					<div class="inline-bl">
						<span class="circle-background">
							<img src="<?php bloginfo('template_directory') ?>/public/img/contacts/icon_location-pin.png">
						</span>
					</div>
					<span class="address"><?=get_field('address',4)?></span><br>

					<div class="inline-bl">
						<span class="circle-background">
							<img src="<?php bloginfo('template_directory') ?>/public/img/contacts/icon_mobile-phone.png">
						</span>
					</div>
					<a href="tel:<?=get_field('phone-1',4)?>" class="phone-number"><?=get_field('phone-1',4)?></a><br>

					<div class="inline-bl">
						<span class="circle-background">
							<img src="<?php bloginfo('template_directory') ?>/public/img/contacts/icon_mail.png">
						</span>
					</div>
					<a href="mailto:<?=get_field('email',4)?>" class="email"><?=get_field('email',4)?></a><br>

					<div class="inline-bl">
						<span class="circle-background">
							<img src="<?php bloginfo('template_directory') ?>/public/img/contacts/icon_clock.png">
						</span>
					</div>
					<span class="work-time"><?=get_field('mode',4)?></span>

				</p>
			</div>
		</div>
	</div>
</div>