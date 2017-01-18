<?php
/*
Template Name: Horaires
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

  <section id="commercant" class="page_about">
    <div id="petit" class="container">
   <div class="row">
     <div class="col-lg-8 col-lg-offset-2 text-center">
         <h2 class="section-heading"><?php the_title(); ?></h2>
         <hr class="light">
     </div>
  	</div>
  		<div class="container-fluid" id="petit">
  				<div class="row logo">
  						<div class="small-12 medium-12 large-12 columns">
  							<div>
  								<?php
  									$args = array( 'post_type' => 'horaire', 'posts_per_page' => 50, 'orderby' =>'date','order' => 'DESC' );
  									$loop = new WP_Query( $args );
  									while ( $loop->have_posts() ) : $loop->the_post();
  									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
  									$url = $thumb['0'];
  								?>
  									<div class=" large-4 medium-6 small-12 columns bloc">
  										<div class="horaires">
  													<img src="<?php echo $url ?>" alt=""/>
  												<div class="horaire_content">
  													<h2><?php the_title(); ?></h2>
  													<hr class="horaire_hr">
  													<p><?php the_content(); ?></p>
  												</div>
  										</div>
  									</div>
  							<?php endwhile; ?>
  							<?php wp_reset_query(); ?>
  							</div>
  						</div>
  				</div>
  		</div>
    </div>
  </section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
