<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<h4 class="titre_blog"><?php the_title();?></h4>
<?php $args = array(
'post_type' => 'post',
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
while ( $loop->have_posts() ) : $loop->the_post();
?><div class="small-12 medium-12 text-center columns">
	<div class="image-block">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="text_blog">
		<?php the_excerpt(); ?>
	</div>
	<a href="<?php the_permalink(); ?>" class="hvr-reveal button button_blog">Lire la suite</a>
</div>
<hr>
<?php
endwhile;
} else {
echo __( 'No products found' );
}
wp_reset_query();
?>
