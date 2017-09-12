<div id="comments" class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php __( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<header>
		<p><?php comments_number(); ?></p>	<a href="#respond"><?= __('Add your comment', 'html5blank') ?> ></a>
	</header>

	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php __( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

<?php 
	$comments_args = array(
    // change the title of send button 
    'label_submit'=>'Send',
    'fields' => array('<p class="comment-form-author"><label for="author">'.__("Name","html5blank").'<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required"></p>', '<p class="comment-form-email"><label for="email">'.__("Mail","html5blank").' <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>')
	);

	comment_form($comments_args);
?>

</div>
