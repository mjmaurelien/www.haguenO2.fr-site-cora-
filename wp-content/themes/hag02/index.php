<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>




<section>
	<div class="row slide" id="front-heros" >

</div>
</section>

<section id="commercant">
 <div class="row">
	<div class="large-12 columns text-center">
			<h2>les commerçants</h2>
			<hr class="light">
	</div>
	</div>

		<div class="container-fluid" id="petit">
				<div class="row logo">
						<div class="small-12 large-12 columns ">
							<div class="row">

								<?php
									$args = array( 'post_type' => 'magasin', 'posts_per_page' => 50, 'orderby' =>'date','order' => 'DESC' );
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
									$url = $thumb['0'];
								?>


									<div class=" large-3 medium-6 small-12 columns visu_tow fadeIn">
										<div class="petit_visu">
													<a href="<?php the_field('lien_url')?>" target="_blank" class="detail">
												<div>
													<h2><?php the_title(); ?></h2>
													<hr>
													<p>accéder au site</p>
												</div>
													</a>
											<img src="<?php echo $url ?>" alt=""/>
										</div>
									</div>


							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
							</div>
						</div>
				</div>
		</div>
</section>

<section id="find" class="background_blue">
		<div class="container-small mapcontainer wow fadeIn " data-wow-duration="2s" data-wow-delay="1s" id="petit">
				<div class="row">
						<div class="large-12 columns  text-center">
								<h2 class="section-heading blanc">Pour nous trouvez</h2>
								<hr class="light">
						</div>
				</div>
				<div class="row">
					<div class="large-12 small-12 columns text-center map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.8830729534325!2d7.833954751337517!3d48.80321021244262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796eae2e779feab%3A0x3f8a5a2aa01e6fc5!2sCora+Haguenau!5e0!3m2!1sfr!2sfr!4v1463986878069" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
		</div>
</section>



	 <?php do_action( 'foundationpress_before_content' ); ?>
	 <?php while ( have_posts() ) : the_post(); ?>

	   <section id="about" class="widow">
	  		<div class="container-small" id="petit">
	  				<div class="row">
	  						<div class="col-lg-8 col-lg-offset-2 text-center">
	  								<h2 class="section-heading bleu"><?php the_title(); ?></h2>
	  								<hr class="light">

	                 <div class="text-norm">
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
