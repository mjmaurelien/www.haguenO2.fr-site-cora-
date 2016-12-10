<?php
/*
Template Name: Mentions
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div  role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

  <section id="about" class="page_about">
 		<div class="container-small" id="petit">
 				<div class="row">
 						<div class="large-12 columns  text-center">
 								<h2 class="section-heading bleu"><?php the_title(); ?></h2>
 								<hr class="light">

                <div class="text-mention">
                    <?php the_content(); ?>
                </div>
 						</div>
 				</div>
 		</div>
 </section>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
