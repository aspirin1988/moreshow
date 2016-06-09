
<div class="gallery-glory-body">
	<h3 class="head-text-custom"><?=get_the_title()?></h3>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<address class="contacts-footer contacts-page">
					<div class="contacts-item">
						Наш адрес: <br>
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
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
				<div class="map">
					<?=get_field('map',4)?>
				</div>
			</div>
		</div>
	</div>
</div>