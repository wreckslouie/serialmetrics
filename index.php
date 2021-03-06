<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- <link rel="icon" href="../../favicon.ico"> -->
		<title>Serial Metrics</title>
		<?php include('includes/head_links.php'); ?>
		<link rel="stylesheet" type="text/css" href="styles/home.css">
		<script type="text/javascript">var _kmq = _kmq || []; var _kmk = _kmk || '01a16ed3239af3fe13f608ce33b60e13d5109d1e'; function _kms(u){ setTimeout(function(){ var d = document, f = d.getElementsByTagName('script')[0], s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = u; f.parentNode.insertBefore(s, f); }, 1); } _kms('//i.kissmetrics.com/i.js'); _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js'); </script>
	</head>
	<body>
		<!-- $TITLE_SECTION -->
		<section id="title">
			<div class="nav-menu">
				<div class="container-fluid">
					<div class="row">
						<?php include('includes/main_nav.php'); ?>
					</div>
				</div>
			</div>
			<div class="brand">
				<div class="container">
					<div class="row text-center">
						<div class="brand-container">
							<h1>Serial Metrics</h1>
							<h2>Machine Learning Solutions</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- $MODULES_SECTION -->
		<section id="modules">
			<div class="container">
				<div class="row">
					<div class="modules-wrapper text-center">
						<!-- Modules -->
						<div class="col-xs-4 module">
							<a href="matching_algorithms.php">
								<div class="module-image">
									<img src="images/home_page/share-icon.png" class="ico-share">
								</div>
								<h1>Matching Algorithms</h1>
								<p>Pair platform users based on individual sets of attributes and preferences.</p>
							</a>
						</div>
						<div class="module">
							<a href="dynamic_pricing.php">
								<div class="module-image">
									<img src="images/home_page/pricing-icon.png" class="ico-pricing">
								</div>
								<h1>Dynamic Pricing</h1>
								<p>Increase revenue with real-time demand discovery and price optimization.</p>
							</a>
						</div>
						<div class="module">
							<a href="recommendation_systems.php">
								<div class="module-image">
									<img src="images/home_page/recommendations-icon.png" class="ico-recommend">
								</div>
								<h1>Recommendation Systems</h1>
								<p>Surface relevant content for consumers and brands alike.</p>
							</a>
						</div>
						
						<div class="module">
							<a href="text_classification.php">
								<div class="module-image">
									<img src="images/home_page/gear-icon.png" class="ico-gear">
								</div>
								<h1>Text Classification</h1>
								<p>Extract themes from huge amounts of text.</p>
							</a>
						</div>
						<div class="module">
							<a href="intelligent_promotions.php">
								<div class="module-image">
									<img src="images/home_page/relations-icon.png" class="ico-relations">
								</div>
								<h1>Intelligent Promotions</h1>
								<p>Estimate the probability of a purchase, and thus the value of
								any site visitor, in real-time.</p>
							</a>
						</div>
						<div class="module">
							<a href="scoring_systems.php">
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
			</div>
		</section>
		<!-- $CONTACT_SECTION -->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="contact-form">
							
							<form method="GET" action="contact.php" name="contact">
								<div class="form-input col-sm-10 col-sm-offset-1">
									<div class="col-sm-4 text-center">
										<h1>Contact Us</h1>
									</div>
									<div class="clearfix"></div>
									<!-- Upper part -->
									<div class="col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="text" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="company" id="company" name="company" placeholder="Company">
										</div>
									</div>
									<div class="clearfix"></div>
									
									<!-- Bottom part -->
									<div class="col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="email" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="col-sm-12">
											<input type="phone" id="phone" name="phone" placeholder="Phone">
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 text-right pull-right">
										<input type="submit" id="submit-btn" class="group" value="Next >>">
									</div>
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- $DATASTACK_SECTION -->
		<section id="datastack">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="center-block">
							<div class="header col-md-10 col-md-offset-1">
								<div class="col-md-8">
									<h1>A Packaged Solution Custom to Your Data</h1>
								</div>
							</div>
							<div class="round-metric">
								<img src="images/home_page/sm_home_page_graphic.png" class="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- $MAP SECTION -->
		<div class="container-fluid">
			<div class="row">
				
				<section id="map">
					<div id="map-canvas"></div>
				</section>
			</div>		</div>
			<!-- $FOOTER SECTION -->
			<?php include('includes/footer.php') ?>
			<!-- JAVASCRIPT IMPORTS -->
			<?php include('includes/scripts.php'); ?>
			<script type="text/javascript" src="js/gmap.js"></script>
			<script type="text/javascript">
				// Initialize gmap
				google.maps.event.addDomListener(window, 'load', initialize);
			</script>
		</body>
	</html>