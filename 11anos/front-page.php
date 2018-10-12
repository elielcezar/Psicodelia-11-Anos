
<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

<section id="tickets" data-aos="fade-up">
  <div class="container">
    <h2>INGRESSOS</h2>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
</section>

<section id="gallery">
    <?php
      if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '170' ); }
    ?>
</section>


<section id="countdown">
  <div class="container">
            <div class="row">

                <h3>Faltam</h3>

                <div class="col-sm-3">
                    <h4><span id="dias"></span></h4>
                    <span>DIAS</span>
                </div>
                <div class="col-sm-3">
                    <h4><span id="horas"></span></h4>
                    <span>HORAS</span>
                </div>
                <div class="col-sm-3">
                    <h4><span id="minutos"></span></h4>
                    <span>MINUTOS</span>
                </div>
                <div class="col-sm-3">
                    <h4><span id="segundos"></span></h4>
                    <span>SEGUNDOS</span>
                </div>

            </div>
  </div>
</section>



<?php get_footer(); ?>
