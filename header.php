
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>De La Ostia</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Josefin+Sans|Rammetto+One" rel="stylesheet">
  </head>

  <body>
    <section id="header" class="hide-xs show-md">
      <div class="container">
        <?= polylang_flags_shortcode(); ?>
        <div class="row row-md-2 header-row menu expanded" data-magellan>
          <?php if ( have_rows( 'header_nav_left_repeater' ) ) : ?>
            <div class="col-md-6 row">
            <?php while ( have_rows( 'header_nav_left_repeater' ) ) : the_row(); ?>
              <a href="#<?php the_sub_field( 'header_nav_id' ); ?>" class="F f-white f-bigger"><?php the_sub_field( 'header_nav_item' ); ?></a>
            <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <?php if ( have_rows( 'header_nav_right_repeater' ) ) : ?>
            <div class="col-md-6 menu expanded row end-xs" data-magellan>
            <?php while ( have_rows( 'header_nav_right_repeater' ) ) : the_row(); ?>
              <a href="#<?php the_sub_field( 'header_nav_id' ); ?>" class="F f-white f-bigger"><?php the_sub_field( 'header_nav_item' ); ?></a>
            <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

