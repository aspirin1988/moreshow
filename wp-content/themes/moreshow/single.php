<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moreshow
 */
$obj=get_queried_object();
get_header(); ?>

	<div class="header-and-breadcrumbs uk-container uk-container-center">
		<?php pp_get_breadcrumb('uk-breadcrumb') ?>
		<h1><?=$obj->name?></h1>
	</div>
	<br>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-1-5 sub-services-list">
				<ul>
					<?php
					$args = array(
						'type'         => 'post',
						'child_of'     => 0,
						'parent'       => 3,
						'orderby'      => 'name',
						'order'        => 'ASC',
						'hide_empty'   => 1,
						'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => 0,
						'taxonomy'     => 'category',
						'pad_counts'   => false,
						// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
					);
					$categories = get_categories( $args );
					//print_r($categories);
					//get_categories(array());
					foreach ($categories as $value):?>
						<li><a href="<?=get_term_link($value->term_id)?>"><?=$value->name?></a></li>
					<?php endforeach; wp_reset_query();
					?>
				</ul>
			</div>

			<div class="uk-width-medium-2-5 photo-section">
				<div id="slideshow" data-uk-slideshow="{autoplayInterval:1000}">

					<div class="uk-slidenav-position uk-hidden-small">
						<ul class="uk-slideshow">
							<li><img src="<?=get_the_post_thumbnail_url()?>"></li>
							<?php $gallery=pp_gallery_get();
							foreach ($gallery as $value ):
							?>
							<li><img src="<?=$value->url?>"></li>
							<?php endforeach; ?>
						</ul>
						<ul>
							<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
							<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
						</ul>
					</div>
					<div id="slider" class="uk-slidenav-position" data-uk-slider="{center:true}">
						<div class="uk-slider-container">
							<ul class="uk-slider uk-grid uk-grid-width-medium-1-3 uk-grid-width-small-1-2">
								<li data-uk-slideshow-item="<?=0?>"><img src="<?=get_the_post_thumbnail_url()?>"></li>
								<?php foreach ($gallery as $key => $value ):
								?>
								<li data-uk-slideshow-item="<?=$key+1?>">
									<img src="<?=$value->url?>">
								</li>
								<?php endforeach; ?>

							</ul>
							<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
							<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
						</div>
					</div>
				</div>
			</div>
			<!--КОНЕЦ фотослайдер-->
			<!--НАЧАЛО раздел текста-->
			<div class="uk-width-medium-2-5 text-section">
				<h2><?=get_the_title()?></h2>
				<p>
					<?=get_the_content()?>
				</p>
				<?php if (get_field('price')): ?>
				<p class="price">
					Стоимость<br>
					<?=get_field('price')?>
				</p>
				<?php endif; ?>
			</div>
			<!--КОНЕЦ раздел текста-->

		</div>
	</div>




<?php
get_footer();
