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
	<div class="semi-transparent-background">
		<div class="header-and-breadcrumbs uk-container uk-container-center">
			<?php pp_get_breadcrumb('uk-breadcrumb') ?>
			<h1><?=$obj->name?></h1>
		</div>

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
						<?php endforeach;
						?>
					</ul>
				</div>
				<div class="photos-and-captions uk-width-medium-4-5 uk-hidden-small">
					<div class="uk-grid">
						<?php $posts=get_posts(array('category_name'=>$obj->slug)) ;
						foreach ($posts as $value):
						?>
						<a href="<?=get_permalink($value->ID)?>" class="uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2">
							<img src="<?=get_the_post_thumbnail_url($value->ID)?>">
							<p><?=$value->post_title?></p>
						</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php
get_footer();
