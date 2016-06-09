<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new_school_frontend
 */
query_posts(array('category_name'=>'about','order'=>'ASC', 'orderby'=>'id'));

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
					<div class="about-block">
						<div class="uk-grid">
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
								<h4 class="about-title">Приветственное слово от директора школы</h4>
								<figure class="about-figure"></figure>
								<article class="about-article">
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi consectetur,
										dicta dolorem ducimus magnam necessitatibus nihil, nobis, nulla odit placeat quam
										quos reiciendis sed totam unde velit vitae voluptate?
									</div>
									<div>Aliquam amet at dicta facere id sapiente sunt. A aliquid deleniti eaque earum
										expedita id in incidunt iure maiores nam non placeat qui quidem sed sint ullam,
										veritatis voluptas voluptatum!
									</div>
								</article>
							</div>
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
								<div class="about-director">
									<img src="public/img/director.png" alt="">
									<p>Директор школы</p>
									<p>Инюшина Тамара Федоровна</p>
								</div>
							</div>
						</div>
					</div>
					<div class="about-title title-about-normal">Сведения о школе</div>
					<figure class="about-figure"></figure>
					<article class="about-article">
						УО «Новая школа» расположена по  адресу: Республика Казахстан, г.Алматы, Ауэзовский район, ул. Утеген батыра, д. 102 «А».
						<br>
						В школе имеются учебные кабинеты, лаборатория, спортивный зал, актовый зал, библиотека, оснащенный медицинский кабинет. В школе имеется компьютерный кабинет, а также компьютеры имеются во многих кабинетах, все компьютеры подключены к сети Интернет.  Помимо компьютерной техники все учебные кабинеты оснащены видео- и аудиоаппаратурой,  почти в каждом кабинете установлены проекторы или интерактивные доски.
						<br>
						Учебно-воспитательный процесс организован в соответствии с нормами и правилами СНиП.
						<br>
						УО «Новая школа» является учреждением образования с односменным режимом работы. Средняя наполняемость классов 10-15 учащихся.
						<br>
						Питание учащихся осуществляется в школьной столовой.
						<br>
						Развоз учащихся осуществляется школьными автобусами.
					</article>
					<div class="about-title title-about-normal title-margin">Название видео</div>
					<div class="viedo-about">
						<iframe width="100%" height="400" src="https://www.youtube.com/embed/qgXpTUEU4LM" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

			
			
<?php
get_footer();
