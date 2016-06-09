<!--Footer-->
<footer>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<div class="logo-footer">
					<h4><?=get_field('motto-1',4)?></h4>
					<h3><?=get_field('motto-2',4)?></h3>
					<a href="/">
						<img src="<?=get_field('logo-f',4)?>" alt="footer_logo">
					</a>
				</div>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
				<address class="contacts-footer">
					<div class="contacts-item">
						<?=get_field('address',4)?>
					</div>
					<div class="contacts-item">
						Телефоны:
						<ul>
							<li>Директор - <a href="tel:<?=get_field('phone-dir',4)?>"><?=get_field('phone-dir',4)?></a></li>
							<li>Завуч - <a href="tel:<?=get_field('phone-zav',4)?>"><?=get_field('phone-zav',4)?></a></li>
							<li>Бухгалтерия (факс) - <a href="tel:<?=get_field('phone-fax',4)?>"><?=get_field('phone-fax',4)?></a></li>
							<li>Завхоз - <a href="tel:<?=get_field('phone-hoz',4)?>"><?=get_field('phone-hoz',4)?></a></li>
							<li>Кабинет информатики - <a href="tel:<?=get_field('phone-info',4)?>"><?=get_field('phone-info',4)?></a></li>
						</ul>
					</div>
					<div class="contacts-item">
						<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
					</div>
				</address>
			</div>
		</div>
	</div>
</footer>
<!--End footer-->

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.4.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideset.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/datepicker.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideset.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/app.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js" ></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail-text').show(500);  }, function(error) {});
</script>
<?php wp_footer() ?>
</body>
</html>