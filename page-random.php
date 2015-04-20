<?php $posts = get_posts('orderby=rand&numberposts=1');
foreach ($posts as $post) { ?>
{
            <?php setup_postdata($post) //this is needed to be able to access post content ?>
    "title":"<?php echo esc_attr(esc_html(($post->post_title))); ?>",
    "content":"<?php echo esc_attr(esc_html(($post->post_content))); ?>",
    "date":"<?php echo ($post->post_date); ?>"
}
<?php } ?>

