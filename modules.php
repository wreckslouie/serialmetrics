<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/modules.css">
	<script type="text/javascript" src="js/modules.js"></script>
</head>
<body class="inside-page">

	<?php include('includes/main_nav.php'); ?>


	<div id="main-content">
		<img src="images/modules_page/modules_icon.png" class="ico-modules">
		<h1>Modules: Ready to Use, Machine Learning APIs</h1>
		<div class="module" id="matching-algorithms">
			<div class="module-heading">
			<img src="images/home_page/share-icon.png" class="ico-share">
			<h1>Matching Algorithms -  The Perfect Job, The Perfect Partner</h1>
			</div>

			<div class="module-content">
				Pairs users from one set with users from the other set.  Think of a job board, where one set of users
				(job posters) and another set of users (job seekers), are looking for each other.  A matching system
				looks at  the features and preferences from each side of the market and recommends optimal pairs of users.
				<div class="more">
					<a href="matching_algorithms.php">Read more...</a>
				</div>
			</div>
		</div>
		<div class="module" id="dynamic-pricing">
			<div class="module-heading">
				<img src="images/home_page/pricing-icon.png" class="ico-pricing">
				<h1>Dynamic Pricing - Extract Value on Demand</h1>
			</div>
			<div class="module-content">
				Assigns the optimal price to goods such that each unit of inventory is sold to achieve revenue-optimality.
				Should you raise prices, or lower them?  Should you give a discount just this once, or just to a certain
				set of users.  When should you increase prices? Will the users return to your site if your prices are too high?
				These are all common questions that online retailers ask. What if, though, you could set prices dynamically
				to extract as much value as possible from each user?  Or, what if you could estimate the one, best, price
				that the majority of your customers can pay so you can maximize your revenues.  Our dynamic pricing module
				does just this, and more, including real-time demand fluctuations (changes in demand, or price elasticity
				of demand), and can make corrective action! Imagine a control system for regulating prices.
				<div class="more">
					<a href="dynamic_pricing.php">Read more</a>
				</div>
			</div>
		</div>
		<div class="module" id="recommendation-systems">
			<div class="module-heading">
				<img src="images/home_page/recommendations-icon.png" class="ico-recommend">
				<h1>Recommendation Systems -  Personalize Content Discovery</h1>
			</div>

			<div class="module-content">
				Recommend content, tailored specifically to the tastes and preferences of individual users.  Imagine
				visiting a site - your favorite music site, or shopping site, and the site offering just the product
				that you wanted, before you even thought of it.  Amazing, right?  Amazing, but completely possible.
				<div class="more">
					<a href="recommendation_systems.php">Read more</a>
				</div>
			</div>
		</div>
		<div class="module" id="text-classification">
			<div class="module-heading">
				<img src="images/home_page/gear-icon.png" class="ico-gear">
				<h1>Text Classification - Find Meaning, not Keywords</h1>
			</div>
			<div class="module-content">
				Structures free-form text into sets of topic categories.  Imagine needing to organize volumes of text into
				ordered categories. This can be quite the manual process! One way to do this is reading each document,
				searching for keywords, then organizing the texts into categories based on keywords that arise. But, is this
				the best way? Our text classification module extracts themes from documents based on term frequencies.
				Forget keywords.  If you can assign topics to documents dynamically, then you don&rsquo;t need to have a list of
				categories a priori.  What&rsquo;s more, if two topics are too closely, cognitively, related, we can identify
				those topics, and coalesce them into broader categories,  accordingly.
				<div class="more">
					<a href="text_classification.php">Read more</a>
				</div>
			</div>
		</div>
		<div class="module" id="intelligent-promotions">
			<div class="module-heading">
				<img src="images/home_page/relations-icon.png" class="ico-relations">
				<h1>Intelligent Promotions -  The Right Deal at the Right Time</h1>
			</div>
			<div class="module-content">
				Engages users that are less likely to purchase from your site with deals, coupons, discounts, or other
				offers before they leave your site without making a purchase.  Instantly identify the users that will
				buy from your store, know when they will buy,  and even know the exact purchase amount.  Indiscriminately
				offering deals to site visitors - in the form of discounts or coupons - is very often revenue sub-optimal.
				If we can simply identify users that are least likely to purchase, but most likely to respond to a promotion,
				and target them exclusively, and instantly upon their visiting your site, then we can maximize returns on
				promotional campaigns.
				<div class="more">
					<a href="intelligent_promotions.php">Read more</a>
				</div>
			</div>
		</div>
		<div class="module" id="scoring-systems">
			<div class="module-heading">
				<img src="images/home_page/abacus-icon.png" class="ico-abacus">
				<h1>Scoring Systems  -  Identify Quality, Quantifiably</h1>
			</div>
			<div class="module-content">
				Classifies data according to quality, risk, or event likelihood.  Know which users are at risk of quitting
				their subscription, or conversely, which users are completely loyal and price insensitive.   Need to score
				your leads?  It&rsquo;s the same math.  Simply put, the scoring system assigns a value to your data based on an
				estimated event likelihood, given a set of facts (or features). You can score anything from nutritional
				quality to lead quality.
				<div class="more">
					<a href="scoring_systems.php">Read more</a>
				</div>
			</div>
		</div>
		<div class="module" id="geo-inference">
			<div class="module-heading">
				<img src="images/home_page/navigation-icon.png" class="ico-geo-inference">
				<h1>Geo Inference - Locate Users, Spot-on</h1>
			</div>
			<div class="module-content">
				Determines where users live, down to the zip code.  Ever need to know where your users live, where they work,
				how far they commute, or have other location-based questions?  Our geo-inference module not only infer the
				locations of users, but even identify their next travel destination!
				<div class="more">
					<a href="geo_inference.php">Read more</a>
				</div>
			</div>
		</div>

	</div>


	<?php include('includes/footer.php'); ?>

</body>
</html>