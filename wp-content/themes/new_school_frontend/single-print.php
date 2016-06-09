<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new_school_frontend
 */
$obj=get_queried_object();
$category=get_the_category();
$category=$category[0];
get_header(); ?>

	<div class="about-body">
		<div class="uk-container uk-container-center">
			<h3 class="head-text-custom">О школе</h3>
			<?php pp_get_breadcrumb('uk-breadcrumb'); ?>
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
					<ul class="uk-nav submenu-gallery">
						<?php
						$languages=true;
						$print=true;
						query_posts(array('category_name'=>'about','order'=>'ASC', 'orderby'=>'id'));
						while ( have_posts() ) : the_post();
							$current_cat=get_the_category();
							if ($current_cat[0]->slug!='languages'&&$current_cat[0]->slug!='print'):
								get_template_part( 'template-parts/about/about', 'menu' );
							else:
								if ($current_cat[0]->slug!='languages'&&$languages==true){
									$languages=false;
									echo '<li><a class="<?=$class?>" href="'.get_term_link($current_cat[0]->term_id).'">'.$current_cat[0]->name.'</a></li>';
								}
								if ($current_cat[0]->slug!='print'&& $print==true){
									$print=false;
									echo '<li><a class="<?=$class?>" href="'.get_term_link($current_cat[0]->term_id).'">'.$current_cat[0]->name.'</a></li>';
								}
							endif;
						endwhile;
						?>
					</ul>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
					<div class="uk-grid uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-3">
						<?php
						print_r(query_posts(array('category_name'=>$obj->slug,'order'=>'ASC', 'orderby'=>'id')));
						while ( have_posts() ) : the_post();
							$current_cat=get_the_category();
							get_template_part( 'template-parts/about/about', 'print' );
						endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php
get_footer();
