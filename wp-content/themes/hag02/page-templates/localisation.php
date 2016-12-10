<?php
/*
Template Name: Localisation
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

  <section id="find" class="page_about background_blue">
        <div class="container-small  wow fadeIn" data-wow-duration="2s" data-wow-delay="1s" id="petit">
            <div class="row">
                <div class="large-12 columns  text-center">
                    <h2 class="section-heading blanc">Pour nous trouvez</h2>
                    <hr class="light">
                    <p style="color:#FFF;">
                      Route du Rhin CS 70140 67503 Haguenau Cedex
                    </p>
                </div>
            </div>
            <div class="row">
              <div class="large-12 small-12 columns text-center map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.8830729534325!2d7.833954751337517!3d48.80321021244262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796eae2e779feab%3A0x3f8a5a2aa01e6fc5!2sCora+Haguenau!5e0!3m2!1sfr!2sfr!4v1463986878069" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
        </div>
    </section>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
