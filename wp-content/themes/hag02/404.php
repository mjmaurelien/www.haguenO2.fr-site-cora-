<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<section class="background_404">
	<div class="row float" id="front-404" >


<div class="row errore">
	<div class="small-12 medium-6 large-6 columns" role="main">

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php _e( 'Oups !', 'foundationpress' ); ?></h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php _e( 'Il semblerait que la page que vous recherchez ait été supprimée. Ou bien... qu\'elle n\'ait jamais existé.
C\'est tout ce que nous pouvons vous dire.', 'foundationpress' ); ?></p>
				</div>
				<ul>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li><?php printf( __( 'Retour à l\'accueil', 'foundationpress' ), home_url() ); ?></li></a>
					
				</ul>
			</div>
		</article>

	</div>
</div>
</div>
</section>
<?php get_footer();
