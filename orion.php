<!DOCTYPE html>
<html>
<head>
	<title>Orion</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/orion.css">
</head>
<body class="inside-page">
	<?php include('includes/main_nav.php'); ?>
	<div class="main-content">
		<img class="ico-orion" src="images/orion_page/orion.png">
		<h1>Orion - A Packaged Solution Custom To Your Data</h1>

		<div class="content">
			<h2>What is Orion</h2>
	        <p>Orion is a layered analytics platform for businesses, which makes use of your data to offer various types of
	        predictions. The Orion platform is a highly portable, real-time, analytics solution that takes your raw data and
	        generates valuable, predictive, insights without the need for hiring a data scientist.</p>

	        <p>You can think of Orion as a virtual assembly line that processes your data in several steps (or layers), churning
	        out - not just predictions from your data - but rather a well trained system that can make predictions from your data.</p>
        </div>

        <div class="content">
        	<h2>How Does it Work?</h2>
        	<p>Orion seamlessly integrates into your database environment, and makes use of your data to offer various forms of
        	predictions, such as recommendations, location inferences, sentiment, optimal matches, etc.</p>

        	<p>Using Orion is as simple as: providing read and write access to a data base environment. Then the magic starts.
        	With just a few steps, Orion:</p>

        	<ul>
        		<li>Scans your database for available data columns</li>
        		<li>Joins the necessary columns of data to form a large conical matrix consisting of 1 Dependent Variable and N number of Independent Variables.</li>
        		<li>Reads the canonical matrix to create a fully-trained, predictive model</li>
        	</ul>

        	<p>In three simple steps, you go from raw data to a predictive model.</p>
        	<p>Once additional data are written to your database, Orion will process the new rows of data and write a score to a final &ldquo;probability&rdquo; table.</p>
        </div>

        <div class="content">
        	<h2>How Complicated is It?</h2>
        	<p>The goal of Orion is to remove the complexities of Data Science from your development cycle. Interfacing with Orion, is as simple as writing a SELECT statement.</p>
        </div>

	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>