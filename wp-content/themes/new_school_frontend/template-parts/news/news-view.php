<div class="news-block">
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
			<div class="news-block-image" style="background-image: url(<?=get_the_post_thumbnail_url()?>)"></div>
		</div>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
			<div class="news-block-text">
				<h4><?=get_the_title()?></h4>
				<p><?=get_the_date()?></p>
				<article>
					<?php $content=get_the_content(); $content=explode('<!--more-->',$content); ?>

					<?=$content[0]?>...
				</article>
				<a href="<?=get_permalink()?>">читать подробнее</a>
			</div>
		</div>
	</div>
</div>