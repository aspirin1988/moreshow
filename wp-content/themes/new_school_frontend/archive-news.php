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

	<!--News body-->
	<div class="news-body">
		<div class="uk-container uk-container-center">
			<h3 class="head-text-custom"><?=$category->name?></h3>
			<div class="uk-grid uk-grid-width-1-1">
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/news/news', 'view' );
					endwhile;
				endif; ?>
			</div>
		</div>
	</div>
	<!--End news body-->



<?php
get_footer();
