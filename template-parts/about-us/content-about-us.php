
<section id="aboutUs">
  <div class="container">
    <div class="about-us-row">
      <figure class="hide-xs show-lg">
        <img src="<?php the_field( 'clone_about_us_bg_image' ); ?>" class="about-us-bg-image">
      </figure>

      <div class="center-xs about-us-row-content">
        <h1 class="mg-30-0 f-white f-title"><?php the_field( 'clone_about_us_title' ); ?></h1>
        <p class="space-bottom f-white f-josefin-23"><?php the_field( 'clone_about_us_desc' ); ?></p>

        <div class="about-us-carousel">

          <?php if ( have_rows( 'clone_about_us_carousel_content_repeater' ) ) : ?>
            <?php while ( have_rows( 'clone_about_us_carousel_content_repeater' ) ) : the_row(); ?>
              <div class="about-us-carousel-bg" style="background-image: url('<?php the_sub_field( 'about_us_carousel_image' ); ?>'); width: 800px; margin: 0 20px;">
                <p class="about-us-carousel-desc f-white f-josefin-16-sb"><?php the_sub_field( 'about_us_carousel_desc' ); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>

      <figure class="hide-xs show-md">
        <img src="<?php the_field( 'clone_about_us_logo' ); ?>" class="about-us-logo-fcb">
      </figure>

      <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>
    </div>
  </div>
</section>