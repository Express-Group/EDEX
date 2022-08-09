<!DOCTYPE html>

<html>
<head>
<title>Location</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|PT+Sans+Narrow" rel="stylesheet">
<link rel="shortcut icon" href="http://images.edexlive.com/images/FrontEnd/images/favicon.ico" type="image/x-icon" />
</head>
<body id="top">
<?php include('header.php'); ?>
<div id="dynamictab" class="wrapper bgded edex-bg hoc ">
  <div class="split clear">
    <section style="width:100%;background-color:transparent;"> 
	<h1><span style="font-size:25px;">3 Regions where the test will be held</span></h1>
      <div class="loc_left">
	  <h3>Chennai Region:</h3>
      <ul class="nospace btmspace-30 linklist contact">
        <li>Date :<time class="font-x1" datetime="2018-01-20"> 20<sup>th</sup>and 21<sup>st</sup> January 2018</time></li>
		<li><i class="fa fa-map-marker"></i> Venue : Chennai Trade Center</li>
      </ul>
	  <h3>Coimbatore region:</h3>
      <ul class="nospace btmspace-30 linklist contact">
        <li>Date :<time class="font-x1" datetime="2018-02-10"> 10<sup>th</sup>and 11<sup>th</sup> February 2018</time></li>
		<li><i class="fa fa-map-marker"></i> Venue : To be announced soon</li>
      </ul>
	  <h3>Tiruchi region:</h3>
      <ul class="nospace btmspace-30 linklist contact">
        <li>Date :<time class="font-x1" datetime="2018-02-03"> 3<sup>rd</sup>and 4<sup>th</sup> February 2018</time></li>
		<li><i class="fa fa-map-marker"></i> Venue : To be announced soon</li>
      </ul>
	  
	  </div>
	  <div id="map" class="loc_right"></div>
</section>
  </div>
</div>


<?php include('footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyPQJs1CBl7YDoCZPqwlYSUoZnCf6IM3U&callback=myMap"></script>
<script type="text/javascript">
    // Define your locations: HTML content for the info window, latitude, longitude
    var locations = [
      ['<h4><span style="color:red;">Chennai Trade Center</span></h4>',13.0148, 80.1911],
      ['<h4><span style="color:green;">TBA Coimbatore</span></h4>', 10.9971776, 76.9552374],
      ['<h4><span style="color:blue;">TBA Tiruchi</span></h4>', 10.7775, 78.7916]
    ];

    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';

    var icons = [
      iconURLPrefix + 'red-dot.png',
      iconURLPrefix + 'green-dot.png',
      iconURLPrefix + 'blue-dot.png',
      iconURLPrefix + 'orange-dot.png',
      iconURLPrefix + 'purple-dot.png',
      iconURLPrefix + 'pink-dot.png',      
      iconURLPrefix + 'yellow-dot.png'
    ]
    var iconsLength = icons.length;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-37.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
         position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 160
    });

    var markers = new Array();

    var iconCounter = 0;

    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: icons[iconCounter]
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));

      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= iconsLength) {
        iconCounter = 0;
      }
    }

    function autoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      for (var i = 0; i < markers.length; i++) {  
                bounds.extend(markers[i].position);
      }
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    autoCenter();
  </script>
  <script type="text/javascript">
       //document.getElementById('dynamictabstrp').scrollIntoView(true);
	   $('html,body').animate({
		scrollTop: $('#dynamictab').offset().top
		}, 1000);
  </script>
</body>
</html>