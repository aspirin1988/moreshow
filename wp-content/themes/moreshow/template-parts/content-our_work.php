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
		<div class="photo-slider uk-width-medium-4-5">
			<div class="data-uk-slider uk-slidenav-position" data-uk-slider>

				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-1">
						<?php $gallery=pp_gallery_get();
						foreach ($gallery as $value ):
						?>
						<li>
							<a href="<?=$value->url?>" data-uk-lightbox="{group:'slider-group'}">
								<img src="<?=$value->url?>">
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
					<img src="<?php bloginfo('template_directory') ?>/public/img/our_work/arrow-left.png" alt="Предыдущее фото">
				</a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
					<img src="<?php bloginfo('template_directory') ?>/public/img/our_work/arrow-right.png" alt="Следущее фото">
				</a>
			</div>
		</div>
	</div>
</div>
<br><br>