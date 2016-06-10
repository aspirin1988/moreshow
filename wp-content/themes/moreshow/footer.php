<footer>
	<div class="social-icons">
		<a href="<?=get_field('vk',4)?>">
			<img src="<?php bloginfo('template_directory') ?>/public/img/footer_icon_vk.png" alt="VK">
		</a>
		<a href="<?=get_field('fb',4)?>">
			<img src="<?php bloginfo('template_directory') ?>/public/img/footer_icon_fb.png" alt="Facebook">
		</a>
		<a href="<?=get_field('ok',4)?>">
			<img src="<?php bloginfo('template_directory') ?>/public/img/footer_icon_odnoklassniki.png" alt="Одноклассники">
		</a>
		<a href="<?=get_field('mail-ru',4)?>">
			<img src="<?php bloginfo('template_directory') ?>/public/img/footer_icon_mail_ru.png" alt="Mail.ru">
		</a>
		<a href="<?=get_field('youtobe',4)?>">
			<img src="<?php bloginfo('template_directory') ?>/public/img/footer_icon_youtube.png" alt="YouTube">
		</a>
	</div>
</footer>

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/core/dropdown.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<?php wp_footer() ?>
<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
</body>
</html>