<!--НАЧАЛО 3d-carousel-->
<!-- на экранах, менее 959px 3d-слайдер скрывается,
 ширина слайдера зависит от колчества элементов, желательное количество: 12, чтобы не менять расположение кнопок. Картинки должны быть одного размера. -->
<div class="uk-container uk-container-center">
	<div class="three-d-slider">
		<div id="perspective">
			<div id="carousel">
				<?php $gallery=pp_gallery_get(get_the_ID(),false,'rand()');
				foreach ($gallery as $value):
				?>
				<figure>
						<img src="<?=$value->url?>">
				</figure>
				<?php endforeach; ?>
			</div>
			<button class="prev"><img src="<?php bloginfo('template_directory') ?>/public/img/index/3d-carousel-arrow-prev.png"></button>
			<button class="next"><img src="<?php bloginfo('template_directory') ?>/public/img/index/3d-carousel-arrow-next.png"></button>
		</div>
	</div>
	<div class="links-to-products-on-main">
		<a href="#">Керамическая плитка</a>
		<a href="#">Керамогранит</a>
		<a href="#">Всё для плитки</a>
	</div>
</div>
<!--НАЧАЛО 3d-carousel-->



<!--НАЧАЛО shadow-between-sections -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-between-sections.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-between-sections -->

<!--НАЧАЛО about, общие стили с таким же блоком на стр.О компании-->
<div class="uk-container uk-container-center about on-main">
	<div class="uk-grid uk-grid-collapse">
		<div class="uk-width-medium-1-2 img-section">
			<img src="<?=get_field('logo',7)?>" alt="Лого">
		</div>
		<div class="uk-width-medium-1-2 text-section">
			<h2>О компании</h2>
			<p>
				<?php $about=get_post(7); echo str_replace("\n",'<br><br>',mb_substr(strip_tags($about->post_content),0,512));?>...
			</p>
			<a class="btn" href="<?=get_permalink(7)?>">Подробнее</a>
		</div>
	</div>
</div>
<!-- КОНЕЦ about, общие стили с таким же блоком на стр.О компании-->

<!--НАЧАЛО shadow-between-sections -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-between-sections.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-between-sections -->

<!--НАЧАЛО promotions-on-main-->
<div class="uk-container uk-container-center promotions-on-main" style="background-image: url(<?=get_field('action-thumbnaill',4)?>)">
	<div class="content uk-clearfix">
		<p class="zatirka">
			<?=get_field('action-left',4)?>
			<br>
			<img src="<?php bloginfo('template_directory') ?>/public/img/index/promotions-on-main_gift-box.png" alt="В подарок"> <br>
		</p>

		<hr class="uk-visible-small">
		<p class="delivery">
			<?=get_field('action-right',4)?>
			<br>
			<img src="<?php bloginfo('template_directory') ?>/public/img/index/transport.png" alt="В подарок"> <br>
		</p>

	</div>
</div>
<!-- КОНЕЦ promotions-on-main-->

<!--НАЧАЛО shadow-between-sections -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-between-sections.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-between-sections -->

<!-- НАЧАЛО feedback-on-main -->
<div class="uk-container uk-container-center feedback-on-main">
	<div class="uk-grid">
		<div class="uk-width-medium-7-10 content-background">
			<div class="content">
				<h2>Обратная связь</h2>
				<p>
					<?=get_field('feedback',4)?>
				</p>
				<form action="" class="blink-mailer">
					<input type="hidden" name="title" value="Обратная связь">
					<div class="inputs">
						<input type="text" placeholder="Имя" name="Имя">
						<input type="text" placeholder="Телефон" name="Телефон">
						<input type="text" placeholder="E-mail" name="E-mail">
					</div>
					<textarea name="Сообщение" placeholder="Введите текст"></textarea>
					<input type="submit" value="Отправить" class="btn">
				</form>
			</div>
		</div>
		<div class="uk-width-medium-3-10 tile">

		</div>
	</div>
</div>
<!-- КОНЕЦ feedback-on-main -->