<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Company</title>
		<?php include('includes/head_links.php'); ?>
		<link rel="stylesheet" type="text/css" href="styles/services.css">
	</head>
	<body class="inside-page white">
		<section class="curtain">
			<div class="container-fluid">
				<div class="row">
					<?php include('includes/main_nav.php'); ?>
					<div class="content">
						<div class="main-content">
							<img class="img-responsive icon" src="images/services_page/graph.png" width="116" height="195">
							<h1>Services</h1>
							<p>Serial Metrics ensures that companies efficiently solve Machine Learning challenges. Our consulting services cover three basic areas:</p>
							<h2>Custom Machine Learning</h2>
							<h3>REMOTE MODEL</h3>
							<p>Your company provides us data; we build solutions - offsite</p>
							<h3>ONSITE MODEL</h3>
							<p>We deploy staff, onsite, at your company to work with your teams. This model works quite well for companies that might need 'full-time', dedicated, data science resources, but do not want to hire staff in-house.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="gap">
		</section>
		
		<div class="container-fluid">
			<div class="row">
				<div class="curtain full-width">
					<div class="main-content">
						<h2><a href="module_products.php">Why reinvent the wheel?</a></h2>
						<p>Serial Metrics offers sets of APIs that use your data. We leverage cutting edge machine learning techniques to solve your company&lsquo;s most complex problems.</p>
						<h2>Methodology</h2>
						<h3><span style="font-size: 1.17em;">Our services cover the full stack</span></h3>
						<p>Once our team mines your data and develops functional models, we turn those models into
						production code. This allows your company to seize data opportunities while not losing focus
						on the end goal - a functioning product.</p>
						<p>The understanding of your data, coupled with our development expertise, allows us to
						develop and implement data-driven, intelligent software that offers unique value to your
						business.</p>
						<p>Some of the common server-side technologies our team leverages include Ruby on Rails,
						C++, JAVA, PHP, and Python.</p>
						<h3>Our six step process</h3>
						<ol class="step-process">
							<li><span class="step-summary">
								Meet the client to ascertain specific data needs.
								<span class="more">Details &darr;</span>
								<span class="less">Fewer details &uarr;</span>
								</span>
								<p class="step-details">
								This involves a session where we listen to the client, learn their business objectives, and perform an inventory on their available data. The goal of the meeting is to identify what data the customer has already gathered, and what additional data (if any) we need to create a set of predictive models.
								</p>
							</li>
							<li><span class="step-summary">
								Determine the amount of firm-specific domain knowledge required to build a model.
								<span class="more">Details &darr;</span>
								<span class="less">Fewer details &uarr;</span>
								</span>
								<p class="step-details">
								Just as users differ in behavior or demographics, clients among and within different verticals, too, differ in terms business complexity. The process of acquiring this firm-specific of domain knowledge, often requires a level of on-site, physical presence, where we meet with the customer point person and facilitate the transfer of "tacit" knowledge necessary for simulation and predictive modeling purposes. To help codify and visualize variable interdependencies, we build causal loop diagrams, to show how nodes within a system influence each other and the dependent variable (that which we are trying to predict) over time. The level of firm-specific knowledge dependency required to solve a problem, often dictates the degree to which the mathematical solution requires customization beyond route "textbook" methods.
								</p>
							</li>
							<li><span class="step-summary">
								Identify the best mathematical technique for the problem at hand.
								<span class="more">Details &darr;</span>
								<span class="less">Fewer details &uarr;</span>
								</span>
								<p class="step-details">
								Identifying how best to mathematically tract a problem is, often, a relatively straightforward process, though it requires a thorough grasp of available statistical models, and how to abstract the business problem into a mathematical framework. Sometimes this process requires first analyzing data, but most often (about 80% of the time), we have a good understanding of how to approach the problem, mathematically, even before obtaining a dataset to analyze. For more complex problems, the process of fitting a solution can be iterative and depend on the dataset and subsequent data analysis.
								</p>
							</li>
							<li><span class="step-summary">
								Data Analysis.
								<span class="more">Details &darr;</span>
								<span class="less">Fewer details &uarr;</span>
								</span>
								<p class="step-details">
								Like anything else, the process of finding value in data and surfacing key insights requires a step by step process. First, we request a dataset. Structure is helpful, but we do not always require structured data as we have developed topic modeling techniques to add structure to otherwise unstructured data. We can use structured tabular data, or blobs of text with latent (hidden) structure. Parsed or not,  it does not matter. We clean, normalize, and structure data; we can even apply semantic indexing algorithms (e.g., LDA) to extract themes from blobs of text, which we can then use to inform column names and table structure. Once we have a dataset with which to work, we apply statistical routines (generally in R, or Octave) to derive mathematical expressions, and iterate on results until model predictive value yields diminishing marginal returns and model variables are significant.
								</p>
							</li>
							<li><span class="step-summary">
								API Development.
								<span class="more">Details &darr;</span>
								<span class="less">Fewer details &uarr;</span>
								</span>
								<p class="step-details">
								Once a model is developed and its predictive value yields measurable value,
								we proceed to deploy the model to a production environment, by way of a
								custom API, which we develop as a "wrapper" around the predictive model.
								The goal here is to have a system in place, where your systems send data,
								either in real-time or batch process, and we send an answer.
								</p>
							</li>
							<li><span class="step-summary">
								Documentation.
								<span class="more">Details &darr;</span>
								<span class="less">Fewer details &uarr;</span>
								</span>
								<p class="step-details">
								It goes without saying, the entire process described here is thoroughly, and
								methodically documented. This includes design of experiment, table structures,
								sample data, R scripts used for statistical analysis, and documentation to use
								the API.
								</p>
							</li>
						</ol>
						<a class="g-started" href="contact.php" target="_parent">Get Started Today >></a>
					</div>

				</div>
			</div>
		</div>

		<div class="full-width">
			<!-- $FOOTER SECTION -->
			<?php include('includes/footer.php') ?>
		</div>
		<!-- JAVASCRIPT IMPORTS -->
		<?php include('includes/scripts.php'); ?>
	</body>
</html>