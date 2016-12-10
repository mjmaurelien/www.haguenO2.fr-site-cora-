<?php
/*
Template Name: Offres
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div >

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>


  <section id="offre" class="page_about background_blue">
    <div class="row"id="petit">
      <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2 class="section-heading blanc"><?php the_title(); ?></h2>
          <hr class="light">
      </div>
    </div>
        <div class="row background_blue" id="full">
          <div class="small-12 medium-12 large-12 columns ">

            <div class="row bandeau hide-for-small-only">
              <?php
                $args = array( 'post_type' => 'bandeau', 'posts_per_page' => 1, 'orderby' =>'date','order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                $url = $thumb['0'];
              ?>


                <div class=" large-12 medium-12 small-12 columns no-gutter">

                  <div class="bandeau_offre">

                    <img src="<?php echo $url ?>" alt="" />

                  </div>
                </div>



            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            </div>
            <div class="row bloc">

              <?php
                $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 50, 'orderby' =>'date','order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
                $url = $thumb['0'];
              ?>


                <div class=" large-3 medium-4 small-12  columns no-gutter">
                  <div class="image_offre">
                    <a href="<?php the_field('lien_offres')?>" target="_blank">
                    <img src="<?php echo $url ?>" alt=""/>
                  </a>
                  </div>
                </div>


            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            </div>
          </div>
        </div>


  </section>


<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
