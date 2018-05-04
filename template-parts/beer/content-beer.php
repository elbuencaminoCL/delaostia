
<section id="beer">
  <div class="beer-row">
    <figure class="beer-bg-figure hide-xs show-lg">
      <img src="<?php the_field( 'clone_beer_bg_image' ); ?>"> <!-- imagen de fondo -->
    </figure>

    <div class="container beer-content-row">
      <div>
        <h1 class="center-xs mg-top-60 f-white f-title"><?php the_field( 'clone_beer_title' ); ?></h1> <!-- titulo -->
        <p class="center-xs mg-bottom-60 f-white f-josefin-23"><?php the_field( 'clone_beer_subtitle' ); ?></p>
      </div>

      <?php if ( have_rows( 'clone_beer_logo_repeater' ) ) : ?>
        <?php while ( have_rows( 'clone_beer_logo_repeater' ) ) : the_row(); ?>

          <div class="row row-xs-1 row-md-2 row-xlg-2 middle-xs beer-row-logo space-bottom">
            <div class="col-xs-12 col-md-3 col-xlg-2 pd-5">
              <figure class="beer-figure-logo center-xs">
                <img src="<?php the_sub_field( 'beer_logo' ); ?>" class="beerLogo"/>
              </figure>
            </div>

            <div class="col-xs-12 col-md-9 col-xlg-10 pd-right-15">
              <h1 class="f-white f-title beer-title"><?php the_sub_field( 'beer_modal_title' ); ?></h1> <!-- titulo -->
              <div class="f-white f-josefin-23 f-beer-desc"><?php the_sub_field( 'beer_modal_desc' ); ?></div>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>
</section>