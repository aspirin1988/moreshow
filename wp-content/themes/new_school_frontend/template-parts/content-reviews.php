<?php $obj=get_queried_object()?>
<div class="reviews-body">
	<div class="uk-container uk-container-center">
		<h3 class="head-text-custom"><?=get_the_title()?></h3>
		<?php
		$post=get_comments(array('post_id'=>get_the_ID(),'status' => 'approve',));
		foreach ($post as $value): ?>
		<div class="reviews-block">
			<div class="reviews-block-text">
				<article>
					<?=$value->comment_content?>
				</article>
				<div class="review-name uk-flex uk-flex-middle">
					<figure></figure><?=$value->comment_author?>
				</div>
			</div>
		</div>
		<?php endforeach; ?>

		<?php if (!is_user_logged_in()): ?>
		<h3 class="head-text-custom">Написать отзыв</h3>

		<?php
		comment_form(array(
			'fields'=>array(
				'author'=>'
					<div class="uk-grid form-reviews">
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
							<p>Имя фамилия</p>
							<input id="author" name="author" type="text" placeholder="Имя фамилия" required>	
						</div>',
				'email'=>'
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<p>Телефон</p>
							<input id="email" name="email" type="email" placeholder="Email" required>
					</div>',
				'url'=>'
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<p>Email</p>
							<input id="url" name="url" type="text" placeholder="Телефон" required> 
					</div>
					
					
					',
				'comment_field'=>'
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1">
				<p>Написать отзыв</p>
					<textarea id="comment" name="comment" cols="30" rows="5" placeholder="Сообщение"></textarea>
				</div>',
			),
			'title_reply'=>'',
			'title_reply_before'=>'',
			'title_reply_after'=>'',
			'comment_field'=>'',
			'comment_notes_before'=>'',
			'submit_button'=>'
			<div class="uk-width-1-1">
					<input type="submit" value="Отправить">
				</div>
			</div>',

		),$obj->ID);
		endif;
		?>

		<!--<form class="uk-grid form-reviews">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<p>Имя фамилия</p>
				<input type="text" required>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<p>Телефон</p>
				<input type="text" required>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<p>Email</p>
				<input type="email" required>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1">
				<p>Написать отзыв</p>
				<textarea required name="" id="" cols="30" rows="5"></textarea>
			</div>
			<div class="uk-width-1-1">
				<input type="submit" value="Отправить">
			</div>
		</form>-->
	</div>
</div>