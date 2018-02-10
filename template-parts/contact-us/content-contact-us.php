
<section id="contactUs">
  <div class="container">
    <div class="contact-row">
      <figure class="contact-bg-figure">    
        <img src="<?php the_field( 'clone_contact_bg_image' ); ?>">
      </figure>

      <div class="row contact-content-row center-xs middle-xs">
        <div>
          <figure class="logo-site-figure mg-60-0">    
            <a href="/"><img src="<?php the_field( 'clone_contact_logo_site' ); ?>"></a>
          </figure>

          <p class="f-white f-josefin-16-sb"><?php the_field( 'clone_contact_address' ); ?>
            <a href="<?php the_field( 'clone_contact_link_button'); ?>" class="f-white"><?php the_field( 'clone_contact_text_button' ); ?></a>
          </p>

          <?php if ( have_rows( 'clone_contact_pbx_repeater' ) ) : ?>
            <?php while ( have_rows( 'clone_contact_pbx_repeater' ) ) : the_row(); ?>
              <li class="f-white">
                <a href="tel:+<?php the_sub_field( 'contact_pbx' ); ?>" class="f-white f-josefin-16-sb" target="_blanck"><?php the_sub_field( 'contact_pbx' ); ?></a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>
