
<section id="banner">
  <div class="banner-row">
    <div class="hide-md">
      <figure>
        <img src="<?php the_field( 'banner_image_xs' ); ?>" class="banner-image-movil">
      </figure>
    </div>

    <div class="hide-xs show-md">
      <?php if( get_field('banner_banner_bg_image_video')['value'] == 'image' ) : ?>
        <figure>
          <img src="<?php the_field( 'banner_banner_bg_image' ); ?>" class="banner-bg-image">
        </figure>

        <?php elseif ( get_field( 'banner_banner_bg_image_video' )['value'] == 'video' ) : ?>

        <iframe frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" class="ytplayer" width="100%" height="810" src="https://www.youtube.com/embed/<?php the_field('banner_banner_bg_video'); ?>?autoplay=1&mute=1&controls=0&showinfo=0&rel=0&loop=1"  gesture="media"  ></iframe>

      <?php endif; ?>
    </div>

    <?php if ( have_rows( 'banner_banner_repeater' ) ) : ?>
      <?php while ( have_rows( 'banner_banner_repeater' ) ) : the_row(); ?>

        <div class="container row center-xs middle-xs banner-row-content">
          <div class="f-josefin-16">
            <figure class="logo-site-figure mg-bottom-md-120">
              <a href="/"><img src="<?php the_sub_field( 'banner_logo_site' ); ?>" class="mg-bottom-xs-30 mg-bottom-md-15"></a>

            <?php if ( have_rows( 'banner_title_repeater' ) ) : ?>
              <?php while ( have_rows( 'banner_title_repeater' ) ) : the_row(); ?>
                <p class="f-small-xs f-normal-md mg-bottom-xs-30 mg-top-xs-30"><?php the_sub_field( 'banner_title' ); ?></p>
              </figure>
              <?php endwhile; ?>

            <?php endif; ?>

            <p class="f-small-xs f-normal-md"><?php the_sub_field( 'banner_address' ); ?><a href="<?php the_sub_field( 'banner_link_button' ); ?>" class="f-white" target="_blanck"><?php the_sub_field( 'banner_text_button' ); ?></a></p>

            <?php if ( have_rows( 'banner_pbx_repeater' ) ) : ?>
              <?php while ( have_rows( 'banner_pbx_repeater' ) ) : the_row(); ?>
                <p class="f-small-xs f-normal-md"><a href="tel:+<?php the_sub_field( 'banner_pbx' ); ?>" class="f-white"><?php the_sub_field( 'banner_pbx' ); ?></a></p>
              <?php endwhile; ?>
            <?php endif; ?>

            <figure class="hide-xs show-md">
              <img src="<?php the_sub_field( 'banner_logo_star' ); ?>" class="banner-logo-star">
            </figure>
          </div>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>
</section>