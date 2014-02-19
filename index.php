<!DOCTYPE html>
<html>
<head>
	<title>Serial Metrics</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/home_page.css">

	<!-- Scripts for Google Maps Integration -->
	<script type="text/javascript"
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyoJxftqt7pcVd7GMya_rLmEn1zENbD0k&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
      	var SMLatLong= new google.maps.LatLng(37.794508,-122.39493);
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
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        map.setOptions({
        	styles: styles,
        	scrollwheel: false
        });

        var marker=new google.maps.Marker({
             position:SMLatLong,
             map: map

        });

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!--Pre-load highlighted background images-->
    <script type="text/javascript">

	Layer1= new Image(776,159)
	Layer1.src = "images/home_page/data_stack/first-layer-highlighted.png"

	Layer2= new Image(776,159)
	Layer2.src = "images/home_page/data_stack/second-layer-highlighted.png"

	Layer3= new Image(776,159)
	Layer3.src = "images/home_page/data_stack/third-layer-highlighted.png"

	Layer4= new Image(776,159)
	Layer4.src = "images/home_page/data_stack/fourth-layer-highlighted.png"

	Layer5= new Image(776,159)
	Layer5.src = "images/home_page/data_stack/fifth-layer-highlighted.png"

	Layer6= new Image(776,159)
	Layer6.src = "images/home_page/data_stack/sixth-layer-highlighted.png"

	</script>

</head>
<body>
	<div id="network-image">
		<img src="images/home_page/network.png">
	</div>

	<?php include('includes/main_nav.php'); ?>

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

	<div id="hadoop">
		<img src="images/home_page/plug-icon.png">
		<div class="divider"></div>
		<h1>Hadoop Plugin</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut libero pellent, 
		hendrerit arcu at, sceleri turpis. Integer nec odio et lectus posuere accumsan. Ut 
		volut laoreet volutpat. Quisque vulputate, nisl ac placerat porttitor, sem metus 
		blandit sem, ut gravida est ante eget urna. Mauris blandit semper risus, vitae 
		sagittis massa sem.</p>
	</div>

	<form id="contact" name="contact" method="post">
		<h1>Contact Us</h1>
		<input type="text" id="name" name="name" placeholder="Name">
		<input type="company" id="company" name="company" placeholder="Company">
		<input type="email" id="email" name="email" placeholder="Email">
		<input type="phone" id="phone" name="phone" placeholder="Phone">
		<a href="#">Next >></a>
	</form>

	<div id="data-stack">
		<h1>Process Model</h1>
		<div id="sixth-layer"></div>
		<div id="fifth-layer"></div>
		<div id="fourth-layer"></div>
		<div id="third-layer"></div>
		<div id="second-layer"></div>
		<div id="first-layer"></div>
	</div>

	<!-- Google Map Embed Code -->
	<div id="map-canvas"></div>

	<?php include('includes/footer.php') ?>

</body>
</html>