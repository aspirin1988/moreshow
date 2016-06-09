<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new_school_frontend
 */
$category=get_the_category();
$category=$category[0];
get_header(); ?>


	<!--Gallery-->
	<div class="gallery-body">
		<div class="uk-container-center uk-container">
			<h3 class="head-text-custom"><?=$category->name?></h3>
			<?php
			while ( have_posts() ) : the_post();
				$current_cat=get_the_category();
					get_template_part( 'template-parts/gallery/gallery', 'view' );
			endwhile;
			?>
		</div>
	</div>
	<!--End gallery-->



<?php
get_footer();
