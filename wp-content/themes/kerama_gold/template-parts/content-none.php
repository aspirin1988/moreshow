<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kerama_gold
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<div class="main-title uk-container uk-container-center">
			<div>
				<h1><?php esc_html_e( 'Ничего не найдено', 'kerama_gold' ); ?></h1>
			</div>
			<?php pp_get_breadcrumb('uk-breadcrumb uk-float-right') ?>
		</div>
	</header><!-- .page-header -->

	<div class="page-content">
		<div class="uk-container uk-container-center about on-main">

			<div class="uk-container uk-container-center promotions-on-main" style="background-image: none;" >
				<div class="content uk-clearfix uk-align-center">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'kerama_gold' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
						<p style="text-align: center" ><?php esc_html_e( 'Извините но по вашему запросу ничего не найдено, попробуйте указать другие ключевые слова.', 'kerama_gold' ); ?>

			<?php

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'kerama_gold' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
						<br>
						<br>
						<img src="<?=get_field('not-found',4)?>" alt="Не найдено"> <br>
						</p>
					</div>
				</div>

			</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->
