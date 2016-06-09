
<div class="parents-body-block">
	<div class="parents-body">
		<div class="uk-container uk-container-center">
			<h3><?=get_the_title()?></h3>
			<div class="parents-block">
				<div class="uk-grid">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<img src="<?=get_field('image')?>" alt="">
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 text-parents">
						<h3 class="parents-info-red">
							<?=get_field('parent-1')?>
						</h3>
						<h3 class="parents-info-blue">
							<?=get_field('parent-2')?>
						</h3>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<img src="<?=get_the_post_thumbnail_url()?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parents-article">
		<div class="uk-container uk-container-center">
			<p>Информация для родителей</p>
			<article>
				<?=get_the_content()?>
			</article>
		</div>
	</div>
	<div class="uk-container uk-container-center">
		<form class="uk-grid form-parents blink-mailer">
			<input type="hidden" name="title" value="Регистрация">
			<div class="uk-width-1-1">
				<h3 class="head-text-custom">Контакты</h3>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<p>Ф.И.О. родителя</p>
				<input type="text" name="Ф.И.О. родителя">
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<p>Ф.И.О. ученика</p>
				<input type="text" name="Ф.И.О. ученика">
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<p>Дата рождения ученика</p>
				<input type="text" data-uk-datepicker="{format:'DD.MM.YYYY'}" name="Дата рождения ученика">
			</div>
			<div class="uk-width-1-1">
				<input type="submit" value="Зарегистрировать">
			</div>
		</form>
		<div class="success-mail-text uk-grid form-parents uk-h2">
		</div>
	</div>
</div>