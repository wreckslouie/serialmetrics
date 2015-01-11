<!DOCTYPE html>
<html>
<head>
	<title>Serial Metrics</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap/bootstrap.css">
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
</head>

<body>
	<div id="network-image">
		<img src="images/home_page/network.png">
	</div>
	<div id="background-graph">

			<!-- $MAIN_TITLE SECTION -->
			<section id="title">
				<div class="col-sm-12 text-center">
					<h1>Serial Metrics</h1>
					<h2>Machine Learning Solutions</h2>
				</div>
				<div class="space"></div>
			</section>
	</div>

	<div class="clearfix"></div>

	<div class="container">
		<div class="row">

			<!-- $MODULES SECTION -->
			<section id="modules">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="row text-center">
						<div class="col-sm-4 module">
							<a href="modules.php#matching-algorithms">
								<div class="module-image">
									<img src="images/home_page/share-icon.png" class="ico-share">
								</div>
								<h1>Matching Algorithms</h1>
								<p>Pair platform users based on individual sets of attributes and preferences.</p>
							</a>
						</div>

						<div class="col-sm-4 module">
							<a href="modules.php#dynamic-pricing">
								<div class="module-image">
									<img src="images/home_page/pricing-icon.png" class="ico-pricing">
								</div>
								<h1>Dynamic Pricing</h1>
								<p>Increase revenue with real-time demand discovery and price optimization.</p>
							</a>
						</div>
						<div class="col-sm-4 module">
							<a href="modules.php#recommendation-systems">
								<div class="module-image">
									<img src="images/home_page/recommendations-icon.png" class="ico-recommend">
								</div>
								<h1>Recommendation Systems</h1>
								<p>Surface relevant content for consumers and brands alike.</p>
							</a>
						</div>

						<div class="clearfix"></div>
						
						<div class="col-sm-4 module">
							<a href="modules.php#text-classification">
								<div class="module-image">
									<img src="images/home_page/gear-icon.png" class="ico-gear">
								</div>
								<h1>Text Classification</h1>
								<p>Extract themes from huge amounts of text.</p>
							</a>
						</div>
						<div class="col-sm-4 module">
							<a href="modules.php#intelligent-promotions">
								<div class="module-image">
									<img src="images/home_page/relations-icon.png" class="ico-relations">
								</div>
								<h1>Intelligent Promotions</h1>
								<p>Estimate the probability of a purchase, and thus the value of
								any site visitor, in real-time.</p>
							</a>
						</div>
						<div class="col-sm-4 module">
							<a href="modules.php#scoring-systems">
								<div class="module-image">
									<img src="images/home_page/abacus-icon.png" class="ico-abacus">
								</div>
								<h1>Scoring Systems</h1>
								<p>Measure influence, evaluate risk, or rate quality using
								Machine Learning models.</p>
							</a>
						</div>
					</div>
				</div>
			</section>

			<div class="clearfix"></div>

			<!-- $CONTACT -->
			<section id="contact">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="contact-form">
							<form method="GET" action="contact.php" name="contact">
								<div class="col-sm-10 col-sm-offset-1 inner-form">
									<div class="col-sm-4 text-center">
										<h1>Contact Us</h1>
									</div>
									<div class="clearfix"></div>
									<br><br>
									<div class="contact-input col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="text" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="contact-input col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="company" id="company" name="company" placeholder="Company">
										</div>
									</div>

									<div class="clearfix"></div>
									
									<div class="contact-input col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="email" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="contact-input col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="phone" id="phone" name="phone" placeholder="Phone">
										</div>
									</div>

									<div class="clearfix"></div>

									<div class="col-sm-6 text-right pull-right">
										<input type="submit" id="submit-btn" class="group" value="Next >>">
										<br>
									</div>

								</div>
							</form>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</section>

			<script type="text/javascript">
			$(document).ready(function () {
				
				// Animate the data stack
				$('.layers').hover(function(){
					$('.layer5').animate({'top':'+=20px'},200);
					$('.layer4').animate({'top':'+=12px'},200);
					$('.layer3').animate({'top':'+=4px'},200);
					$('.layer2').animate({'top':'-=4px'},200);
					$('.layer1').animate({'top':'-=12px'},200);
				},function(){
					$('.layer5').animate({'top':'-=20px'},200);
					$('.layer4').animate({'top':'-=12px'},200);
					$('.layer3').animate({'top':'-=4px'},200);
					$('.layer2').animate({'top':'+=4px'},200);
					$('.layer1').animate({'top':'+=12px'},200);
				});

			});
			</script>

			<!-- $DATA_STACK -->
			<section id="datastack">
				<div class="row">
					<div class="layers">
						<div class="col-sm-12">
							<div class="layer1 col-sm-10">
							</div>
							<div class="layer2 col-sm-10">
							</div>
							<div class="layer3 col-sm-10">
							</div>
							<div class="layer4 col-sm-10">
							</div>
							<div class="layer5 col-sm-10">
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</section>

		</div>
	</div>

	<div class="clearfix"></div>

	<!-- $MAP -->
	<section id="map">
		<!-- Google Map Embed Code -->
		<div id="map-canvas"></div>
	</section>

</body>
</html>