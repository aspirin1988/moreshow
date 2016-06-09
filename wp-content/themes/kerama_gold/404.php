<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kerama_gold
 */
get_header(); ?>
			<section class="error-404 not-found">
				<header class="page-header">
					<div class="main-title uk-container uk-container-center">
						<div>
							<h1 class="page-title"><?php esc_html_e( 'ОЙ! Кажется такой страницы не существует!', 'kerama_gold' ); ?></h1>
						</div>
					</div>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="uk-container uk-container-center about on-main">
						<div class="uk-container uk-container-center promotions-on-main" style="background-image: none;" >
							<div class="content uk-clearfix uk-align-center">
						<p style="text-align: center;"><?php esc_html_e( 'Похоже что ничего небыло найдено! Попробуйте воспользоваться поиском по сайту! ', 'kerama_gold' ); ?>
						<br>
						<br>
						<img src="<?=get_field('404',4)?>" alt="Не найдено"> <br>
						</p>
				</div>
			</div>
		</div>
	</div>


<?php
get_footer();
