<footer>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-3-10">
				<div class="logo">
					<img src="<?=get_field('logo_footer',4)?>" alt="logo">
				</div>
				<p class="address almaty">
					<span><?=get_field('address-a',4)?></span> <br>
					<a href="tel:<?=get_field('phone1-a',4)?>"><?=get_field('phone1-a',4)?></a> <br>
					<a href="tel:<?=get_field('phone2-a',4)?>"><?=get_field('phone2-a',4)?></a> <br>
				</p>
				<p class="address shymkent">
					<span><?=get_field('address-ch',4)?></span> <br>
					<a href="tel:<?=get_field('phone1-ch',4)?>"><?=get_field('phone1-ch',4)?></a> <br>
					<a href="tel:<?=get_field('phone2-ch',4)?>"><?=get_field('phone2-ch',4)?></a> <br>
				</p>
				<p>
					<a href="mailto:<?=get_field('email-a',4)?>"><?=get_field('email-a',4)?></a>
				</p>
			</div>
			<div class="uk-width-medium-7-10">
				<?=get_field('map-a',4)?>
			</div>
		</div>
	</div>
</footer>


<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/scripts.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/3dcarousel.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js" ></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail').show(500);  }, function(error) {});
</script>
</body>
</html>