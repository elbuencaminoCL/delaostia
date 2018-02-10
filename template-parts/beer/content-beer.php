
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

      <div>
        <figure class="beer-row-logo">
          <img src="<?php the_field( 'clone_beer_logo' ); ?>"> <!-- imagen de fondo -->
        </figure>
      </div> 
    </div>

    <figure class="mandals hide-xs show-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/mandals.png')"></figure>

  </div>
</section>