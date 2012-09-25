<?php 

$comment_type = ($post->post_type == 'question') ? 'answer' : 'comment';
$answer_count = (function_exists('get_custom_comment_count')) ? get_custom_comment_count($comment_type) : '';
$expert_count = (function_exists('get_expert_comment_count')) ? get_expert_comment_count($post->ID) : '';
$answer_count = $answer_count - $expert_count;
$answer_count_string = ($answer_count > 500) ? "500+ {$comment_type}s" : $answer_count . " " . _n( " {$comment_type}", " {$comment_type}s", $answer_count );
$expert_count_string = ($expert_count > 500) ? "500+ community team {$comment_type}s" : $expert_count . " " . _n( " community team {$comment_type}", " community team {$comment_type}s", $expert_count );

$post_type_label = get_post_type_object($post->post_type)->labels->name;
$post_type_label = ($post_type_label == 'Posts') ? "Blog " . $post_type_label : $post_type_label;
$categories = get_the_category();

$header = (is_widget('list_style') == 'post-type') ? $post_type_label : $categories[0]->name;

?>
<li class="summar_list-item summary-list_<?php echo get_post_type(get_the_ID()); ?>">
	<ul>

		<li class="summarty_type-date">
			<span class="summary_type"><?php echo $header; ?></span>

			<?php if(is_widget('show_date')): ?>
				<span class="summary_date"><?php the_time('F j, Y'); ?></span>
			<?php endif; ?>

		</li>

		<li class="summary_title">
			<a href="<?php the_permalink(); ?>">
				<?php the_truncated_title(); ?>
			</a>
		</li>

		<li class="summary_comments">

			<?php if(is_widget('show_author')) : ?>
				<span class="summary_author">By: <?php the_author(); ?></span>
			<?php endif; ?>

			<span class="summary_comment-count">
				<?php echo $answer_count_string; ?>
				<?php echo ($post->post_type == 'question') ? ' | ' . $expert_count_string : ''; ?>
			</span>
		</li>

		<li class="summary_see-more">

			<?php if(is_widget('show_share')) :?>
				<?php get_partial( 'parts/share', array( "version" => "short", "url" => get_post_permalink( $post->ID ) ) ); ?>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>">See More</a>
			<?php endif; ?>

		</li> <!-- ends summary_see-more or summary_content-share -->

	</ul>
</li>