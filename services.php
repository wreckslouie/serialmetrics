<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/services.css">
</head>
<body class="inside-page">
	<?php include('includes/main_nav.php'); ?>
	<div class="main-content">
		<img src="images/services_page/graph.png">
		<h1>Services</h1>
		<p>Our Experts work with you to ensure that you efficiently solve your 
		Machine Learning challenges.  Our consulting services cover three basic areas:</p>

		<h2>Custom Machine Learning</h2>

		<h3>Remote Model</h3> 
		<p>Your company provides us data, we build solutions - 
		offsite (include the methodology section on the current site)</p>

		<h3>Onsite Model</h3>
		<p>We deploy staff, onsite, at your company to work with 
		your teams.  This model works quite well for companies that might need 
		'full-time', dedicated, data science resources, but don't want to take the hire staff in-house.</p>


		<h2><a href="module_products.php">Module Implementation</a></h2>
		<p>Over the last five years we've built a suit of 
		machine learning applications.  We refer to these applications as "modules." 
		Often, Data Science solutions require thinking through some very challenging, 
		mathematically rigorous, modeling problems. Companies might spend months just 
		trying to model a seemingly unique business problem  - a processes that typically 
		requires hiring a team of engineers to mine data, formulate a hypothesis, code a 
		set of algorithms, and test for model accuracy.  Interestingly, rarely are these 
		business problems truly unique.  Instead, we find that different verticals try 
		solving the same problems day in day out.  For example gaming companies seem 
		particularly interested in solving problems relating to attrition, whereas 
		advertising companies seem perplexed by improving the conversion rates.</p>

		<p>The benefit of the modules is that they prevent companies from having to reinvent the wheel.  
		If a dynamic pricing algorithm exists, why not just use it? Similarly if the system exists that 
		can predict churn, why not just leverage it. There's really very little point to reinvent the algorithm.</p> 

		<p>The serial metrics modules eliminate the need to apply machine learning solutions 
		to solve problems that need machine learning solutions. These modules only require 
		you to plug in your data and will provide an answer. Super simple.</p>

		<h2>Methodology</h2>
		<h3><span style="font-size: 1.17em;">Our services cover the full stack</span></h3>
		<p>Once our team mines your data and develops functional models, we turn those models into production code. This allows your company to seize data opportunities, while not losing focus on the end goal - a functioning product.</p>
		<p>The understanding of your data, coupled with our development expertise, allows us to develop and implement data-driven, intelligent software that offers unique value to your business.</p>
		<p>Some of the common server-side technologies our team works with are Ruby on Rails, JAVA, PHP, and Python.</p>

		<h3>Our six step process</h3>
		<ol>
			<li><a href="#step1"> Meet the client to ascertain specific data needs</a></li>
			<li><a href="#step2"> Determine the amount of firm-specific domain knowledge required to build a model</a></li>
			<li><a href="#step3"> Identify a mathematical technique that best applies to the problem at hand</a></li>
			<li><a href="#step4">Data Analysis</a></li>
			<li><a href="#step5">API Development</a></li>
			<li><a href="#step6">Documentation</a></li>
		</ol>
		<p><a class="button " href="http://serialmetrics.com/contact" target="_parent">Get Started Today</a></p>

		<div id="step1"></div>
		<h4><strong>Step 1.</strong> Meet the client to ascertain specific data needs</h4>
		<p>Generally, this involves a session where we listen to the client, learn their business objectives, and perform an inventory on their available data.  The goal is to identify what data the client have already gathered, and what additional data (if any) are needed to create a set of predictive models that can help improve business processes and achieve specific business objectives.</p>

		<div id="step2"></div>
		<h4><strong>Step 2</strong><span style="font-size: 1em;"><strong>.</strong> Determine the amount of domain knowledge required to build a model</span></h4>
		<p>Just as users differ in behavior or demographics, clients among and within different verticals, too, differ in terms business complexity. The process of acquiring this firm-specific of domain knowledge, often requires a degree of on-site, physical presence, where we meet with our client's point person and facilitate the transfer of <a href="http://www.serialmetrics.com/blog">"tacit" knowledge</a> necessary for simulation and predictive modeling purposes.  To help codify and visualize variable interdependencies, we build <a href="http://serialmetrics.com/case-studies">causal loop diagrams</a>, to show how nodes within a system influence each other and the dependent variable (that which we are trying to predict) over time.   The degree of firm-specific knowledge dependency required to solve a problem, often dictates the degree to which the mathematical solution requires customization beyond route "textbook" methods.</p>

		<div id="step3"></div>
		<h4><strong>Step 3</strong>.  Identify a mathematical technique that best applies to the problem at hand</h4>
		<p>Identifying how best to mathematically tract a problem is, often, a relatively straightforward process, though it requires a thorough grasp of available statistical models, and how to abstract the business problem into a mathematical framework.  Sometimes this process requires first analyzing data, but most often (about 80% of the time), we have a good understanding of how to approach the problem, mathematically, even before obtaining a dataset to analyze.  For more complex problems, the process of fitting a solution can be iterative and depend on the dataset and subsequent data analysis.</p>

		<div id="step4"></div>
		<h4><strong>Step 4</strong>.  Data Analysis</h4>
		<p>The process of finding value in data and surfacing key insights is generally multifaceted, but, surprisingly, fairly straightforward. First, we request a dataset.  Structure is helpful, but it is not required.  We can use structured tabular data, or blobs of text with latent (hidden) structure.  Parsed or not.  It does not matter.  You send us the data you have, and we clean it, normalize it, structure it, even apply semantic indexing algorithms (LDA) to extract themes from blobs of text, which we can then use to inform column names and table structure.  Also, sending us data piecemeal is fine; we can upload it to our databases, join on common values  -if they exist - or use fuzzy joins, if not.  Once we have a dataset with which to work, we apply statistical routines (generally in R, or Octave) to derive mathematical expressions, and iterate on results until model predictive value yields diminishing marginal returns and model variables are significant.</p>

		<div id="step5"></div>
		<h4><strong>Step 5</strong>.  API Development</h4>
		<p>Once a model is developed and its predictive value yields measurable value, we proceed to deploy the model to a production environment, by way of a custom API, which we develop as a "wrapper" around the predictive model.   The goal here is to have a system in place, where your systems send data, either in real-time or batch process, and we send an answer.</p>

		<div id="step6"></div>
		<h4><strong>Step 6</strong><span style="font-size: 1em;"><strong>.</strong> Documentation</span></h4>
		<p>It goes without saying, the entire process described here is thoroughly, and methodically documented.  This includes design of experiment, table structures, sample data, R scripts used for statistical analysis, and documentation to use the API.</p>
		<p></p>
		

	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>