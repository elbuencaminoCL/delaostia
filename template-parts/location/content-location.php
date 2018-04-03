
<section id="location">
  <div class="container">
    <div class="location-row">
      <figure class="location-bg-figure hide-xs show-lg">
        <img src="<?php the_field( 'location_bg_image' ); ?>">
      </figure>

      <div class="location-content-row mg-bottom-xs-60">
        <h1 class="center-xs mg-30-0 f-white f-title"><?php the_field( 'location_title' ); ?></h1>

        <?php if ( have_rows( 'location_content_tabs_repeater' ) ) : ?>
          <?php $countLocation = 1; ?>
          <div class="tabs center-xs" data-responsive-accordion-tabs="tabs small-accordion large-tabs" id="location-tabs" data-allow-all-closed="true">
            <?php while ( have_rows( 'location_content_tabs_repeater' ) ) : the_row(); ?>

              <li class="tab-accordion-title tabs-title <?= ($countLocation == 1) ? 'is-active' : ''; ?>">
                <a href="#tabLocation-<?= $countLocation; ?>" aria-selected="true" class="tab-ancla f-bigger"><?php the_sub_field( 'location_tab_text' ); ?></a>
              </li>

          <?php $countLocation ++; ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if ( have_rows( 'location_content_tabs_repeater' ) ) : ?>
          <?php $countContentLocation = 1; ?>
          <div class="tabs-content" data-tabs-content="location-tabs">

            <?php while ( have_rows( 'location_content_tabs_repeater' ) ) : the_row(); ?>

              <div class="tabs-panel <?= ($countContentLocation == 1) ? 'is-active' : ''; ?>" id="tabLocation-<?= $countContentLocation; ?>">
                <div class="row row-xs-1 row-md-2 row-lg-2 f-white pd-15 location-accordion-content">
                  <div class="col-xs-12 col-md-6 col-lg-8 space-bottom">
                    <?php if ( have_rows( 'location_title_desc_repeater' ) ) : ?>
                      <?php while ( have_rows( 'location_title_desc_repeater' ) ) : the_row(); ?>
                        <div class="location-col-title-desc space-bottom">
                          <h4><?php the_sub_field( 'location_tab_title' ); ?></h4>
                          <p><?php the_sub_field( 'location_tab_desc' ); ?></p>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>

                   <div class="col-xs-12 col-md-6 col-lg-4">
                    <?php $location = get_field('location_map_copiar');
                      if( !empty($location) ):
                    ?>
                      <div class="acf-map z-index-2">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                      </div>
                    <?php endif; ?>
                  </div>

                </div>
              </div>

          <?php $countContentLocation ++; ?>
            <?php endwhile; ?>

          </div>
        <?php endif; ?>



      </div>

    </div>

    <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>
  </div>
</section>