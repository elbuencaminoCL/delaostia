
<section id="menu" class="">
  <div class="container">
    <div class="menu-row">
      <figure class="menu-bg-figure hide-xs show-lg">
        <img src="<?php the_field( 'menu_bg_image' ); ?>">
      </figure>

      <div class="menu-content-row mg-bottom-xs-60">
        <h1 class="mg-30-0 center-xs f-white f-title"><?php the_field( 'menu_title' ); ?></h1>

        <div class="col-xs-12 menu-col-2 hide-md">
          <?php if ( have_rows( 'menu_full_repeater' ) ) : ?>
            <?php while ( have_rows( 'menu_full_repeater' ) ) : the_row(); ?>
              <figure class="space-bottom">
                <a href="<?php the_sub_field( 'menu_desc_full_link' ); ?>">
                  <img src="<?php the_sub_field( 'menu_image_full' ); ?>" class="mg-bottom-15">
                </a>

                <a href="<?php the_sub_field( 'menu_desc_full_link' ); ?>" class="f-white f-josefin-18-sb"><?php the_sub_field( 'menu_desc_full' ); ?></a>
              </figure>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="hide-xs show-md">
          <?php if ( have_rows( 'menu_repeater' ) ) : ?>
            <?php $count = 1; ?>
            <div class="tabs center-xs" data-responsive-accordion-tabs="tabs small-accordion large-tabs" id="menuTabs" data-allow-all-closed="true">
            <?php while ( have_rows( 'menu_repeater' ) ) : the_row(); ?>

              <li class="tab-accordion-title tabs-title <?= ($count == 1) ? 'is-active' : ''; ?>">
                <a href="#tab-<?= $count; ?>" aria-selected="true" class="f-josefin-18"><?php the_sub_field( 'menu_tab_name' ); ?></a>
              </li>

            <?php $count ++; ?>
            <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <?php if ( have_rows( 'menu_repeater' ) ) : ?>
            <?php $countContent = 1; ?>

            <div class="tabs-content" data-tabs-content="menuTabs">

              <?php while ( have_rows( 'menu_repeater' ) ) : the_row(); ?>

                <div class="tabs-panel <?= ($countContent == 1) ? 'is-active' : ''; ?>" id="tab-<?= $countContent; ?>">
                  <div class="row row-xs-1 row-md-2 row-lg-2 no-gutter f-white">
                    <div class="col-xs-12 col-md-7 col-lg-8 menu-col-1">
                      <h2 class="menu-content-title space-bottom f-josefin-66"><?php the_sub_field('menu_content_title'); ?></h2>

                      <div class="entry-content">
                        <?php
                        $numcat = get_sub_field( 'category_id' );
                        $args = array(
                          'post_type' => 'menu',
                          'post_status' => 'publish',
                          'posts_per_page' => '2',
                          'cat' => $numcat,
                          'paged' => $paged,
                        );
                        $my_posts = new WP_Query( $args );
                        if ( $my_posts->have_posts() ) :
                        ?>
                          <div class="post-menu-<?= $countContent; ?>"><?php var_dump($countContent)?>
                            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
                              <div class="row row-xs-3 row-sm-3 row-md-3 row-lg-3 middle-xs space-bottom menuPost-<?= $countContent; ?>">
                                <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2 center-xs">
                                  <p class="f-josefin-25"><?php the_field('menu_price'); ?></p>
                                </div>

                                <div class="col-xs-6 col-sm-8 col-md-6 col-lg-8 menu-col-title-desc">
                                  <p class="F f-josefin-25"><strong><?php the_field('menu_title_plate'); ?></strong></p>
                                  <p class="f-josefin-16-sb"><?php the_field('menu_desc'); ?></p>
                                </div>

                                <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2">
                                  <img src="<?php the_field('menu_image'); ?>" class="menu-image">
                                </div>
                              </div>
                            <?php endwhile; ?>
                            <?php
                            // clean up after the query and pagination
                            wp_reset_postdata();
                            ?>
                          </div>
                        <?php endif; ?>
                        <div class="loadmore" onclick="loadMoreCategory( <?php the_sub_field( 'category_id' ); ?><?= $countContent; ?> )" >Load More...<?php the_sub_field( 'category_id' ); ?></div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-md-5 col-lg-4 menu-col-2">
                      <?php if ( have_rows( 'menu_full_repeater' ) ) : ?>
                        <?php while ( have_rows( 'menu_full_repeater' ) ) : the_row(); ?>
                          <figure class="space-bottom">
                            <a href="<?php the_sub_field( 'menu_desc_full_link' ); ?>">
                              <img src="<?php the_sub_field( 'menu_image_full' ); ?>" class="mg-bottom-15">
                            </a>

                            <a href="<?php the_sub_field( 'menu_desc_full_link' ); ?>" class="f-white f-josefin-18-sb"><?php the_sub_field( 'menu_desc_full' ); ?></a>
                          </figure>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>

                  </div>
                </div>
              <?php $countContent ++; ?>
              <?php endwhile; ?>

            </div>
          <?php endif; ?>

        </div>

      </div> <!-- /menu-content-row -->

    </div>

    <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>
  </div>
</section>