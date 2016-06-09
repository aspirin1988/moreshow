
<!--Main body-->
<div class="main-body">
	<!--Slider-->
	<div class="uk-container uk-container-center">
		<div class="uk-slidenav-position" data-uk-slideshow>
			<ul class="uk-slideshow">
				<?php $gallery=pp_gallery_get();
				foreach ($gallery as $value):
				?>
				<li>
					<img src="<?=$value->url?>" alt="">
					<div class="uk-overlay-panel uk-flex uk-flex-bottom uk-flex-right">
						<div class="slider-custom-caption">
							<h3>
								<?=$value->description?>
							</h3>
							<p>
								<?=$value->alt?>
							</p>
						</div>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
			<ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-left">
				<li data-uk-slideshow-item="0"><a href=""></a></li>
				<li data-uk-slideshow-item="1"><a href=""></a></li>
			</ul>
		</div>
	</div>
	<!--End slider-->
	<!--Director-->
	<div class="director-body">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-3">
					<div class="image-director">
						<img src="<?=get_the_post_thumbnail_url(11)?>" alt="">
						<div class="director-caption">
							<p>Директор школы</p>
							<?=get_field('director',11)?>
						</div>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-2-3 uk-flex uk-flex-middle">
					<div class="director-content">
						<h3><?=get_field('hi-title',11)?></h3>
						<figure></figure>
						<article>
							<?=get_field('hi-content',11)?>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End director-->
	<!--News body-->
	<div class="news-body">
		<div class="uk-container uk-container-center">
			<h3>Новости</h3>
			<div class="uk-grid uk-grid-match" data-uk-grid-match="{target:'.news-single'}">
				<?php $post=get_posts(array('category_name'=>'news','orderby'=>'rand', 'numberposts'=>3));
				foreach ($post as $value):
				?>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
					<div class="news-single">
						<a href="<?=get_permalink($value->ID)?>"><h4><?=$value->post_title?></h4></a>
						<img src="<?=get_the_post_thumbnail_url($value->ID)?>" alt="">
						<p><i class="uk-icon uk-icon-clock-o"></i><?=$value->post_date?></p>
						<article>
							<?php $content=$value->post_content; $content=explode('<!--more-->',$content); ?>
							<?=$content[0]?>...
						</article>
						<div class="news-link">
							<a href="<?=get_permalink($value->ID)?>">Подробнее</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<a class="news-all" href="<?=get_term_link(3)?>">Читать все новости</a>
		<figure class="news-line"></figure>
	</div>
	<!--End news body-->
	<!--Parents body-->
	<div class="parents-body">
		<div class="uk-container uk-container-center">
			<h3>Родителям</h3>
			<div class="parents-block">
				<div class="uk-grid">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<img src="<?=get_field('image',15)?>" alt="">
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 text-parents">
						<h3 class="parents-info-red">
							<?=get_field('parent-1',15)?>
						</h3>
						<h3 class="parents-info-blue">
							<?=get_field('parent-2',15)?>
						</h3>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<img src="<?=get_the_post_thumbnail_url(15)?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End parents body-->
	<!--Reviews body-->
	<?php if (false): ?>
	<div class="reviews-body">
		<div class="uk-container uk-container-center">
			<h3>Отзывы</h3>
			<div data-uk-slideset="{small: 1, medium: 2, large: 4}">
				<div class="uk-slidenav-position">
					<ul class="uk-grid uk-slideset">
						<?php $post=get_comments(array('post_id'=>24,'status' => 'approve',));
						foreach ($post as $value): ?>
						<li>
							<div class="block-reviews uk-flex uk-flex-middle uk-flex-center uk-flex-column">
<!--								<div class="reviews-image-block"></div>-->
								<p><?=$value->comment_author?></p>
								<article>
									<?=$value->comment_content?>
								</article>
							</div>
						<?php endforeach; ?>
						</li>
					</ul>
				</div>
				<ul class="uk-slideset-nav uk-dotnav uk-flex-center">...</ul>
			</div>
		</div>

	</div>
	<?php endif; ?>
	<!--End reviews body-->
</div>
<!--End main body-->