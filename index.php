<!DOCTYPE html>
<html>
<head>
	<title>Serial Metrics</title>
	<link rel="stylesheet" type="text/css" href="styles/home_page.css" >
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>

	<!-- Scripts for Google Maps Integration -->
	<script type="text/javascript"
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyoJxftqt7pcVd7GMya_rLmEn1zENbD0k&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {

        var mapOptions = {
          center: new google.maps.LatLng(37.794508,-122.39493),
          zoom: 14


        };
        var styles = [
      		{
	            stylers: [
	              { saturation: -100 }
	            ]
           }
        ];
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
        map.setOptions({styles: styles});

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body>

	<nav>
		<a>Serial Metrics</a>
		<ul>
			<li>Solutions</li>
			<li>Methodology</li>
			<li>Case Studies</li>
			<li>Clients</li>
		</ul>
	</nav>

	<h1>Serial Metrics</h1>
	<h2>Machine Learning Solutions</h2>
	<div id="background-graph"></div>

	<div id="modules-section">
		<!--Top Row -->
		<div>
			<img src="images/home_page/share-icon.png">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Et lectus posuere acumsan.</p>
		</div>	
		<div>
			<img src="images/home_page/path-icon.png">
			<p>Vivamus ut libero, Hendrerit arcu at, scelerisque turpis. 
			Integer nec odio.</p>
		</div>
		<div>
			<img src="images/home_page/navigation-icon.png">
			<p>Quisque vulputate, nisl ac placerat porttitor, 
			sem metus blandit sem.</p>
		</div>

		<!--Bottom Row -->
		<div>
			<img src="images/home_page/gear-icon.png">
			<p>Mauris blandit semper risus, vitae sagittis massa porta et. 
			Sed id pharetra odio.</p>
		</div>	
		<div>
			<img src="images/home_page/relations-icon.png">
			<p>Donec sapien erat, luctus facilisis leo fermentum, 
			sodales gravida lacus.</p>
		</div>
		<div>
			<img src="images/home_page/abacus-icon.png">
			<p>Pulvinar leo sit amet pellentesque. Etiam eleme 
			augue ac nunc.</p>
		</div>
	</div>

	<a href="#" class="full-width-button">
		Let's talk about metrics for your enterprise. Contact us >>
	</a>

	<div id="data-stack">
		<img src="images/home_page/data-stack-v6_7.png">
	</div>

	<div id="network-image">
		<img src="images/home_page/network.png">
	</div>

	<!-- Google Map Embed Code -->
	<iframe width="1680" height="400" frameborder="0" scrolling="no" marginheight="0" 
	marginwidth="0" style="background-color:rgb(229,227,223);"
	src="https://maps.google.com/maps/ms?msa=0&amp;msid=203123961827304078823.0004f07e9f20c4403cc04&amp;
	ie=UTF8&amp;t=h&amp;ll=37.794322,-122.381859&amp;spn=0.023739,0.144196&amp;z=14&amp;output=embed"></iframe>

	<footer>
		<p>donec &bull; sapien &bull; erat &bull; lorem &bull; ipsum</p>
		<p>Serial Metrics | 1 Market Street, San Francisco | 555-555-5555</p>
	</footer>

</body>
</html>