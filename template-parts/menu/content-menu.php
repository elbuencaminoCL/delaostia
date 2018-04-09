
<section id="menu" class="">
  <div class="container">
    <div class="menu-row mg-accordion">
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

                      <?php

                      $fieldsRelations = get_sub_field('menu_content');

                      if( $fieldsRelations ): ?>

                        <div class="contentPaginationWrap space-bottom">
                          <?php foreach( $fieldsRelations as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                                <div class="contentPagination ">
                                  <a href="<?php the_permalink(); ?>" class="f-white"><?php the_title(); ?></a>
                                </div>
                          <?php endforeach; ?>
                              </div>

                          <a href="#" class="buttonPrev">PREV</a>
                          <a href="#" class="buttonNext">NEXT</a>

                          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                      <?php endif; ?>


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