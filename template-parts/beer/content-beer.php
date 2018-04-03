
<section id="beer">
  <div class="container">
    <div class="beer-row">
      <figure class="beer-bg-figure hide-xs show-lg">
        <img src="<?php the_field( 'clone_beer_bg_image' ); ?>"> <!-- imagen de fondo -->
      </figure>

      <div class="beer-content-row">
        <h1 class="center-xs mg-top-60 f-white f-title"><?php the_field( 'clone_beer_title' ); ?></h1> <!-- titulo -->
        <p class="center-xs mg-bottom-60 f-white f-josefin-23"><?php the_field( 'clone_beer_subtitle' ); ?></p>
      </div>

      <?php if ( have_rows( 'clone_beer_logo_repeater' ) ) : ?>
        <?php $counterBeer = 1; ?>

        <div class="row row-xs-1 row-md-4 center-xs middle-xs beer-row-logo">
          <?php while ( have_rows( 'clone_beer_logo_repeater' ) ) : the_row(); ?>

            <div class="col-xs-12 col-md-3 beer-col-logo">
              <figure class="beer-figure-logo">
                <a href="#popup-<?= $counterBeer; ?>" class="popup-link #popup-<?= $counterBeer; ?>">
                  <img src="<?php the_sub_field( 'beer_logo' ); ?>" class="beerLogo"/>
                </a>
              </figure>

              <div class="modalWrapper popup-<?= $counterBeer; ?>" id="popup-<?= $counterBeer; ?>">
                <div class="row row-xs-1 row-md-2 start-xs middle-xs popup-contenedor bg-blue-dark">
                  <div class="col-xs-12 col-md-8 beer-reveal">
                    <h1 class="f-white f-title"><?php the_sub_field( 'beer_modal_title' ); ?></h1> <!-- titulo -->
                    <div class="f-josefin-23"><?php the_sub_field( 'beer_modal_desc' ); ?></div>
                  </div>

                  <div class="col-xs-12 col-md-4 center-xs">
                    <figure>
                      <img src="<?php the_sub_field( 'beer_logo' ); ?>" />
                    </figure>
                  </div>

                  <a class="popup-cerrar popupClose" href="#">X</a>
                </div>

              </div>
            </div>

          <?php $counterBeer ++; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>


    <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>

  </div>
</section>