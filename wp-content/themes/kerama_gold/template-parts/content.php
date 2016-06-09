<?php $obj=get_queried_object(); ?>
<!--НАЧАЛО shadow-under-navbar -->
<div class="uk-text-center">
	<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-under-navbar.png" alt="Тень">
</div>
<!--КОНЕЦ shadow-under-navbar -->

<!--НАЧАЛО main-title_and_breadcrumbs-->
<div class="main-title uk-container uk-container-center">
	<div>
		<h1>Продукция</h1>
	</div>

	<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>
</div>
<!--КОНЕЦ main-title_and_breadcrumbs-->

<!--НАЧАЛО фильтр и окно товара-->
<div class="uk-container uk-container-center filter_and_product-summary">
	<h3 class="uk-text-center product_title uk-hidden-small"></h3>
	<?php
	$args = array(
		'type'         => 'post',
		'child_of'     => 3,
		'parent'       => '',
		'orderby'      => 'name',
		'order'        => 'DESC',
		'hide_empty'   => 1,
		'hierarchical' => 1,
		'exclude'      => '',
		'include'      => '',
		'number'       => 0,
		'taxonomy'     => 'category',
		'pad_counts'   => false,
		// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
	);
	$categories = get_categories( $args ); ?>

	<div class="uk-grid">
		<!--НАЧАЛО фильтр-->
		<div class="uk-width-medium-3-10 filter">
			<?php foreach ($categories as $value): if ($value->category_parent==3) :?>
				<?php
				$args = array(
					'type'         => 'post',
					'child_of'     => $value->term_id,
					'parent'       => '',
					'orderby'      => 'name',
					'order'        => 'DESC',
					'hide_empty'   => 1,
					'hierarchical' => 1,
					'exclude'      => '',
					'include'      => '',
					'number'       => 0,
					'taxonomy'     => 'category',
					'pad_counts'   => false,
					// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
				);
				$categories_sub = get_categories( $args );
				$post=get_posts(array('category_name'=>$value->slug));
				if (!$categories_sub):
					if (count($post)>1):?>
						<h3><a href="<?=get_permalink($post[0]->ID)?>"><?=$value->name?></a></h3>
						<ul class="uk-nav uk-nav-parent-icon" data-uk-nav="{multiple:true}">

							<?php
							foreach ($post as $value2) :
								?>
								<li class=""><a href="<?=get_permalink($value2->ID)?>"><?=$value2->post_title?></a></li>
							<?php endforeach; ?>
						</ul>
					<?php  else:	?>
						<h3><a href="<?=get_permalink($post[0]->ID)?>"><?=$value->name?></a></h3>
					<?php endif; else: ?>
					<h3><a href="#"><?=$value->name?></a></h3>
					<ul class="uk-nav uk-nav-parent-icon" data-uk-nav="{multiple:true}">
						<?php foreach ($categories_sub as $value1) :?>
							<li class="uk-parent uk-open <?php ?>  ">
								<a href="#"><?=$value1->name?></a>
								<ul class="uk-nav-sub uk-open">
									<?php
									$post=get_posts(array('category_name'=>$value1->slug));
									foreach ($post as $value2) :
										?>
										<li class=""><a href="<?=get_permalink($value2->ID)?>"><?=$value2->post_title?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif;  endif;  endforeach; ?>

		</div>
		<!--КОНЕЦ фильтр-->

		<!--НАЧАЛО окно товара-->
		<div class="uk-width-medium-7-10 product-summary">

			<!--НАЧАЛО единичный товар Плитки-->
			<div class="uk-grid">
				<div class="uk-width-medium-3-5 big-photo_and_text">
					<div class="title_and_main">
						<h4><?=$obj->post_title?></h4>
						<img src="<?=get_the_post_thumbnail_url($obj->ID)?>">
					</div>
					<p>
						<?=get_the_content()?>
					</p>
				</div>
				<div class="uk-width-medium-2-5">
					<div class="slick-carousel">
					<?php	$post=get_posts(array('category_name'=>'сeramic_tile', 'order'=>'rand', 'numberposts'=>7));
					foreach ($post as $value): if ($value->ID!=$obj->ID):
					?>
						<div class="product-item">
							<a href="<?=get_permalink($value->ID)?>">
								<img src="<?=get_field('image-1',$value->ID)?>">
								<p><?=get_field('article',$value->ID)?><br>
									<?=get_field('size',$value->ID)?></p>
							</a>
						</div>
					<?php endif; endforeach;  ?>
					</div>
				</div>
			</div>
			<!--КОНЕЦ единичный товар Плитки-->

		</div>
		<!--КОНЕЦ окно товара-->
	</div>
</div>
<!-- КОНЕЦ фильтр и окно товара-->

<?php
function check($current,$current)
{
	if ($current==$current)
	{
		return true;
	}
	return false;

}
?>