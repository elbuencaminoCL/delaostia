
  <section class="hide-md">
    <div class="container">
      <div class="bg-red-dark row row-xs-2 pd-5-15 middle-xs mg-top-15">
        <div class="col-xs-3">
          <i class="material-icons f-star mg-right-15">star</i>
        </div>

        <div class="col-xs-9">
          <?php the_field( 'footer_title' ); ?>
        </div>
      </div>

      <?php if ( have_rows( 'footer_repeater' ) ) : ?>
        <?php while ( have_rows( 'footer_repeater' ) ) : the_row(); ?>
          <div class="bg-blue-dark center-xs pd-30">
            <div><?php the_sub_field( 'footer_address' ); ?></div>
            <a href="tel<?php the_sub_field( 'footer_phone' ); ?>" class="f-white">
              <?php the_sub_field( 'footer_phone' ); ?>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>

    <script src="<?= get_template_directory_uri(); ?>/dist/bundle.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.about-us-carousel').slick({
          centerMode: true,
          centerPadding: '60px 30px',
          infinite: true,
          slidesToShow: 3,
          variableWidth: true,
          autoplay: true,
          autoplaySpeed: 2500,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });

      });
    </script>

    <style type="text/css">
      .acf-map {
        width: 100%;
        height: 280px;
      }

      /* fixes potential theme css conflict */
      .acf-map img {
        max-width: inherit !important;
      }

      @font-face {
        font-family: 'spidershankregular';
        src: url('<?= get_template_directory_uri(); ?>/assets/fonts/spidersh-webfont.woff2')  format('woff2'),
             url('<?= get_template_directory_uri(); ?>/assets/fonts/spidersh-webfont.woff') format('woff'),
             url('<?= get_template_directory_uri(); ?>/assets/fonts/spidersh-webfont.ttf')  format('truetype');
        font-style: normal;
      }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfd8BnhIxwOKgtPZU0jwuDudCNNrQh8f4"></script>

    <script type="text/javascript">
    (function($) {

    /*
    *  new_map
    *
    *  This function will render a Google Map onto the selected jQuery element
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param $el (jQuery element)
    *  @return  n/a
    */

    function new_map( $el ) {

      // var
      var $markers = $el.find('.marker');


      // vars
      var args = {
        zoom    : 16,
        center    : new google.maps.LatLng(0, 0),
        mapTypeId : google.maps.MapTypeId.ROADMAP
      };


      // create map
      var map = new google.maps.Map( $el[0], args);


      // add a markers reference
      map.markers = [];


      // add markers
      $markers.each(function(){

          add_marker( $(this), map );

      });


      // center map
      center_map( map );


      // return
      return map;

    }

    /*
    *  add_marker
    *
    *  This function will add a marker to the selected Google Map
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param $marker (jQuery element)
    *  @param map (Google Map object)
    *  @return  n/a
    */

    function add_marker( $marker, map ) {

      // var
      var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

      // create marker
      var marker = new google.maps.Marker({
        position  : latlng,
        map     : map
      });

      // add to array
      map.markers.push( marker );

      // if marker contains HTML, add it to an infoWindow
      if( $marker.html() )
      {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content   : $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

          infowindow.open( map, marker );

        });
      }

    }

    /*
    *  center_map
    *
    *  This function will center the map, showing all markers attached to this map
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param map (Google Map object)
    *  @return  n/a
    */

    function center_map( map ) {

      // vars
      var bounds = new google.maps.LatLngBounds();

      // loop through all markers and create bounds
      $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

      });

      // only 1 marker?
      if( map.markers.length == 1 )
      {
        // set center of map
          map.setCenter( bounds.getCenter() );
          map.setZoom( 16 );
      }
      else
      {
        // fit to bounds
        map.fitBounds( bounds );
      }

    }

    /*
    *  document ready
    *
    *  This function will render each map when the document is ready (page has loaded)
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 5.0.0
    *
    *  @param n/a
    *  @return  n/a
    */
    // global var
    var map = null;

    $(document).ready(function(){

      $('.acf-map').each(function(){

        // create map
        map = new_map( $(this) );

      });

    });

    })(jQuery);
    </script>

    <script type="text/javascript">
      var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
      var page = 2;
      function loadMoreCategory(idCat, numberPost, menuTabPost) {
        var data = {
          'action': 'load_posts_by_ajax',
          'cat': idCat,
          'page': page,
          'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };
        $( '.menuPost-' + menuTabPost ).removeClass('menu-new-post')
        $( '.menuPost-' + menuTabPost ).addClass('hide-xs')
        $.post(ajaxurl, data, function(response) {
          $( '.post-menu-' + numberPost ).append(response);
          page++;
        });
      };

    </script>

  </body>
</html>
