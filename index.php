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
			<h1>Scoring Systems</h1>
			<p>Measure influence, evaluate risk, or rate quality using 
			probabilistic Machine Learning models.</p>
		</div>
		<div>
			<img src="images/home_page/path-icon.png">
			<h1>Intelligent Promotions</h1>
			<p>Estimate the probability of a purchase, and thus the value of 
			any site visitor, in real-time.</p>
		</div>
		<div>
			<img src="images/home_page/navigation-icon.png">
			<h1>Recommendation Engines</h1>
			<p>Surface and recommend relevant content for consumers and brands alike.</p>
		</div>

		<!--Bottom Row -->
		<div>
			<img src="images/home_page/gear-icon.png">
			<h1>Text Classification</h1>
			<p>Extract themes from huge amounts of text.</p>
		</div>	
		<div>
			<img src="images/home_page/relations-icon.png">
			<h1>Matching Algorithms</h1>
			<p>Pair platform users based on individual sets of attributes and preferences.</p>
		</div>
		<div>
			<img src="images/home_page/abacus-icon.png">
			<h1>Dynamic Pricing</h1>
			<p>Increase revenue with real-time demand discovery and price optimization.</p>
		</div>
	</div>

	<div id="hadoop">
		<img src="images/home_page/plug-icon.png">
		<div class="divider"></div>
		<h1>Orion</h1>
		<p>Introducing Orion, a database engine that can quickly process massive amounts of data 
		at speeds over 1000 times faster than conventional querying technologies. Orion is 
		available as both a hosted solution and as a standard installation, which fits with 
		any of three common platforms: MySQL, PostgreSQL, and Hadoop/Hive.</p>
		<a href="orion.php">Learn more >></a>
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
		<div id="layer-container">
			<div id="sixth-layer"></div>
			<div id="fifth-layer"></div>
			<div id="fourth-layer"></div>
			<div id="third-layer"></div>
			<div id="second-layer"></div>
			<div id="first-layer"></div>
		</div>
	</div>

	<!-- Google Map Embed Code -->
	<div id="map-canvas"></div>

	<?php include('includes/footer.php') ?>

</body>
</html>