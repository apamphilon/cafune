$('document').ready(function() {
  // preloader
  $(window).load(function() {
    setTimeout(function() {
      $('#preloader').fadeOut(1000,function() {
        $('html').css('overflow', 'visible');
        $(this).remove();
      });
    }, 1500)
  });

  // page load animations
  $(window).load(function() {
    setTimeout(function() {
      $('#js-header').addClass('slide-down');
    }, 2500);
    setTimeout(function() {
      $('#js-hero-text').addClass('visible');
    }, 3200);
  });

  // smooth scroll
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top -97
          }, 1000);
          return false;
        }
      }
    });
  });

  // google map
	// This function will render a Google Map onto the selected jQuery element
	function render_map( $el ) {

		// var
		var $markers = $el.find('.marker');

		// vars
		var args = {
			//overlay
			scrollwheel : false,
			zoomControl	: true,
			streetViewControl: false,
			mapTypeControl: true,
			panControl: false,
			//options
			scrollwheel : false,
			zoom		: 14,
			center		: new google.maps.LatLng(0, 0),
			mapTypeId	: google.maps.MapTypeId.ROADMAP,
			//optional styles
			styles: [
				{
			        featureType: 'all',
			        stylers: [
			            { saturation: -100 }
			        ]
			    }
			]
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

	}

	//add_marker
	//This function will add a marker to the selected Google Map

	var currentInfoWindow;

	function add_marker( $marker, map ) {

		// var
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

		//custom img
		var image = '/cafune/images/map-marker.png'

		// create marker
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map,
			icon		: image
		});

		// add to array
		map.markers.push( marker );

		// if marker contains HTML, add it to an infoWindow
		if( $marker.html() )
		{
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});

			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function() {

				infowindow.open(map, marker);

				//close all other infowindows
				if (currentInfoWindow && currentInfoWindow != infowindow) {
					currentInfoWindow.close();
				}

				currentInfoWindow = infowindow;
			});

			// close info window when map is clicked
			google.maps.event.addListener(map, 'click', function(event) {
				if (currentInfoWindow) {
					currentInfoWindow.close();
				}
			});
		}

	}

	//center_map
	//This function will center the map, showing all markers attached to this map

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

	//document ready
	//This function will render each map when the document is ready (page has loaded)
	$(document).ready(function(){
		$('.google-map').each(function(){
			render_map( $(this) );
		});
	});

  // matchHeight
  $('.mh').matchHeight();
});
