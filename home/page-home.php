
<?php
    /**
    * Template Name: Home
    */
  get_header();
?>
 
<?php get_template_part( 'template-parts/banner/content', 'banner' ); ?>
    
<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
  <li class="accordion-item is-active accordionDisabled" data-accordion-item>
    <a href="#" class="accordion-title accordion-xs hide-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/figure.png')">El bar</a>
    <div class="accordion-content accordionContent" data-tab-content>
      <?php get_template_part( 'template-parts/about-us/content', 'about-us' ); ?>
    </div>
  </li>

  <li class="accordion-item is-active accordionDisabled" data-accordion-item>
    <a href="#" class="accordion-title accordion-xs hide-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/figure.png')">La carta</a>
    <div class="accordion-content accordionContent" data-tab-content>
      <?php get_template_part( 'template-parts/menu/content', 'menu' ); ?>
    </div>
  </li>

  <li class="accordion-item is-active accordionDisabled" data-accordion-item>
    <a href="#" class="accordion-title accordion-xs hide-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/figure.png')">La cerveza</a>
    <div class="accordion-content accordionContent" data-tab-content>
      <?php get_template_part( 'template-parts/beer/content', 'beer' ); ?>
    </div>
  </li>

  <li class="accordion-item is-active accordionDisabled" data-accordion-item>
    <a href="#" class="accordion-title accordion-xs hide-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/figure.png')">¿Como llegar?</a>
    <div class="accordion-content accordionContent" data-tab-content>
      <?php get_template_part( 'template-parts/location/content', 'location' ); ?>
    </div>
  </li>

  <li class="accordion-item is-active accordionDisabled" data-accordion-item>
    <a href="#" class="accordion-title accordion-xs hide-md" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/figure.png')">Contáctanos</a>
    <div class="accordion-content accordionContent" data-tab-content>
      <?php get_template_part( 'template-parts/contact-us/content', 'contact-us' ); ?>
    </div>
  </li>
</ul>   

<?php get_footer(); ?>