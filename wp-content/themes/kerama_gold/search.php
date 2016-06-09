<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kerama_gold
 */

get_header(); ?>


		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="main-title uk-container uk-container-center">
					<div>
						<h1><?php printf( esc_html__( 'Результаты поиска: %s', 'kerama_gold' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</div>
					<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>
				</div>
			</header><!-- .page-header -->
			<div class="uk-container uk-container-center about on-main ">
				<div class="uk-grid">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
	</div>

<?php
get_footer();
