<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/services.css">
	<script type="text/javascript" src="js/services.js"></script>
</head>
<body class="inside-page">
	<?php include('includes/main_nav.php'); ?>
	<div class="main-content">
		<img src="images/services_page/graph.png">
		<h1>Services</h1>
		<p>Serial Metrics ensures that companies efficiently solve Machine Learning challenges. Our consulting services cover three basic areas:</p>

		<h2>Custom Machine Learning</h2>

		<h3>Remote Model</h3> 
<p>Your company provides us data; we build solutions -
		offsite</p>

		<h3>Onsite Model</h3>
		<p>We deploy staff, onsite, at your company to work with 
		your teams.  This model works quite well for companies that might need 
		'full-time', dedicated, data science resources, but do not want to hire staff in-house.</p>

	</div>
	<img src="images/services_page/ferry-building.jpg" class="full-width">
	<div class="main-content">

		<h2><a href="module_products.php">Module Implementation</a></h2>
<pOver the last five years, we've built a suite of machine learning applications. We refer to these applications as "modules." Often, Data Science solutions require thinking through some very challenging, mathematically rigorous, modeling problems. Companies might spend months just trying to model a seemingly unique business problem, a process that typically requires hiring a team of engineers to mine data formulate a hypothesis, code a set of algorithms, and test for model accuracy. Interestingly, rarely are these business problems truly unique. Instead, we find that different verticals try solving the same problems day in day out. For example, gaming companies seem particularly interested in solving problems relating to attrition, whereas advertising companies seem perplexed by improving the conversion rates.
</p>

<p>The benefit of the modules is that they prevent companies from having to reinvent the wheel. If a dynamic pricing algorithm exists, why not just use it? Similarly, if the system exists that can predict churn, why not just leverage it. There's very little point to reinvent the algorithm.
</p>

<p>The Serial Metrics modules eliminate the need to apply machine learning solutions to solve problems that need machine learning solutions. These modules only require customers to plug in data, and we will provide an answer. Super simple.
</p>

		<h2>Methodology</h2>
		<h3><span style="font-size: 1.17em;">Our services cover the full stack</span></h3>
<p>Once our team mines your data and develops functional models, we turn those models into production code. This allows your company to seize data opportunities while not losing focus on the end goal - a functioning product.
</p>
<p>The understanding of your data, coupled with our development expertise, allows us to develop and implement data-driven, intelligent software that offers unique value to your business.
</p>
		<p>Some of the common server-side technologies our team leverages include Ruby on Rails, C++, JAVA, PHP, and Python.</p>

		<h3>Our six step process</h3>
		<ol>
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
		<a class="button" href="contact.php" target="_parent">Get Started Today >></a>
		

	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>