
<section id="beer" class="">
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
        <?php while ( have_rows( 'clone_beer_logo_repeater' ) ) : the_row(); ?>
          <div>
            <figure class="beer-row-logo">
              <img src="<?php the_sub_field( 'beer_logo' ); ?>" data-open="exampleModal1" />
            </figure>

            <div class="reveal bg-blue-dark" id="exampleModal1" data-reveal>
              <h1 class="center-xs mg-top-60 f-white f-title"><?php the_sub_field( 'beer_modal_title' ); ?></h1> <!-- titulo -->
              <div class="mg-bottom-60 f-josefin-23"><?php the_sub_field( 'beer_modal_desc' ); ?></div>
              <figure class="beer-row-logo">
                <img src="<?php the_sub_field( 'beer_logo' ); ?>" data-open="exampleModal1" /> <!-- imagen de fondo -->
              </figure>

              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>


    <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>

  </div>
</section>