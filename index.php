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

    <script type="text/javascript">
        // Cover the pre-highlighted layers with transparent background
        // after the page loads
        $(document).ready(function() {
            // API layer
            $('#fifth-layer').css('background','url("images/home_page/data_stack/transparent/layer5.png") no-repeat')
                .css('background-size', '650px')
                .css('margin-left', '0px');
            // Machine learning layer
            $('#fourth-layer').css('background','url("images/home_page/data_stack/transparent/layer4.png") no-repeat')
                .css('background-size', '650px')
                .css('margin-left', '0px');
            // Access layer
            $('#third-layer').css('background','url("images/home_page/data_stack/transparent/layer3.png") no-repeat')
                .css('background-size', '650px')
                .css('margin-left', '0px');
            // Infrastructure layer
            $('#second-layer').css('background','url("images/home_page/data_stack/transparent/layer2.png") no-repeat')
                .css('background-size', '650px')
                .css('margin-left', '0px');
            // etl layer
            $('#first-layer').css('background','url("images/home_page/data_stack/transparent/layer1.png") no-repeat')
                .css('background-size', '650px')
                .css('margin-left', '0px');
        });
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
			<a href="modules.php#matching-algorithms">
				<img src="images/home_page/share-icon.png" class="ico-share">
				<h1>Matching Algorithms</h1>
				<p>Pair platform users based on individual sets of attributes and preferences.</p>
			</a>
		</div>
		<div>
			<a href="modules.php#dynamic-pricing">
				<img src="images/home_page/pricing-icon.png" class="ico-pricing">
				<h1>Dynamic Pricing</h1>
				<p>Increase revenue with real-time demand discovery and price optimization.</p>
			</a>
		</div>
		<div>
			<a href="modules.php#recommendation-systems">
				<img src="images/home_page/recommendations-icon.png" class="ico-recommend">
				<h1>Recommendation Systems</h1>
				<p>Surface relevant content for consumers and brands alike.</p>
			</a>
		</div>

		<!--Bottom Row -->
		<div>
			<a href="modules.php#text-classification">
				<img src="images/home_page/gear-icon.png" class="ico-gear">
				<h1>Text Classification</h1>
				<p>Extract themes from huge amounts of text.</p>
			</a>
		</div>
		<div>
			<a href="modules.php#intelligent-promotions">
				<img src="images/home_page/relations-icon.png" class="ico-relations">
				<h1>Intelligent Promotions</h1>
				<p>Estimate the probability of a purchase, and thus the value of
				any site visitor, in real-time.</p>
			</a>
		</div>
		<div>
			<a href="modules.php#scoring-systems">
				<img src="images/home_page/abacus-icon.png" class="ico-abacus">
				<h1>Scoring Systems</h1>
				<p>Measure influence, evaluate risk, or rate quality using
				Machine Learning models.</p>
			</a>
		</div>
	</div>

	<form id="contact" name="contact" action="contact.php" method="GET">
		<h1>Contact Us</h1>
		<input type="text" id="name" name="name" placeholder="Name">
		<input type="company" id="company" name="company" placeholder="Company">
		<input type="email" id="email" name="email" placeholder="Email">
		<input type="phone" id="phone" name="phone" placeholder="Phone">
		<input type="submit" id="submit" class="group" value="Next >>">
	</form>

    <div id="data-stack-container">
        <h1>A Packaged Solution Custom to Your Data</h1>
        <div id="data-stack">
        	<a href="./orion.php">
	            <div id="layer-container">
	                <div id="fifth-layer"></div>
	                <div id="fourth-layer"></div>
	                <div id="third-layer"></div>
	                <div id="second-layer"></div>
	                <div id="first-layer"></div>
	            </div>
	        </a>
        </div>
    </div>

	<!-- Google Map Embed Code -->
	<div id="map-canvas"></div>

	<?php include('includes/footer.php') ?>

</body>
</html>