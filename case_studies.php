<!DOCTYPE html>
<html>
<head>
	<title>Case Studies</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/case_studies.css">
</head>
<body class="inside-page">
	<?php include('includes/main_nav.php'); ?>
	<div class="main-content">
		<img src="images/case_studies_page/pencil_icon.png">
		<h1>Case Studies</h1>
		<h2>AAA Membership Services Cost Forecast</h2>
		<div>
		<p style="text-align: justify;">Serial Metrics custom-built a system dynamics simulator to forecast emergency roadside costs for AAA Membership Services.  <strong>The</strong> <strong>challenge</strong>: several, highly variable, and difficult to predict, macro-economic drivers, such as the unemployment rate, fuel prices, and even weather patterns determine annual operational costs. In addition, usage, member adoption rate, member attrition rate, word of mouth (WOM), marketing efficacy, etc., all translate to a complex cost forecast.   <strong>The benefit</strong>: accurately forecasting financial costs for AAA could save the company, on the order of <strong>$10 million</strong>, annually.</p>

		<h2 style="text-align: justify;">Step 1: Create a CLD</h2>
		<p style="text-align: justify;">AAA membership count is a primary determinant of both revenue  and cost.  The more members, the higher the probability of an emergency event, the greater the usage, the greater perceived value, the greater the membership count, <em>ceteris paribus</em>.</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="exp1aaa" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/exp1aaa-e1315169948880.jpg" width="430" height="370" /></p>
		<p style="text-align: justify;">Membership count is governed by the potential adopters, marketing spend, and membership tenure (the longer an individual is customer, the less likely to attrite).</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="balfb" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/balfb-e1315169851443.jpg" width="400" height="352" /></p>
		<p style="text-align: justify;">Combining the two aforementioned feedback processes, we are able to model a set of variables that drive customer counts at any moment in time, and use the customer counts to forecast operational costs over time.  The combined positive and negative feedback processes can potentially create nonlinear member adoption, and usage, patterns.  Additionally, <em>Second-Order </em>effects amplify any said non-linearities.</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="firstfb" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/secondfb-e1315169451139.jpg" width="500" height="430" /></p>
		<p style="text-align: justify;">Linking usage data ...  (assuming a positive experience, the more frequently customers <em>use </em>the service the greater the customer retention rate, hence achange in the aggregate price elasticity of demand)</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="secondfb" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/firstfb-e13151696184851.jpg" width="500" height="455" /></p>
		<p style="text-align: justify;">Linking cost data ...</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="thirdfb" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/firstfb-e1315169618485.jpg" width="540" height="472" /></p>
		<p style="text-align: justify;">Linking macro-economic data ...</p>
		<p style="text-align: justify;">Fuel costs, the unemployment rate, for example, influence all sorts of variables ranging from car wear and tear to average miles driven: both significant cost determinants.</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="macrofb" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/macrofb-e1315171598849.jpg" width="635" height="422" /></p>
		<p style="text-align: justify;">Combining the Micro-economic and the Macro-economic drivers ...</p>
		<p style="text-align: justify;"><img style="border: 0px none; padding: 0px;" title="finmodel" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/finmodel-e1315175297782.jpg" width="720" height="435" /></p>
		<p style="text-align: justify;">The <em>B's </em>and <em>R's </em>indicate Balanced (Negative) and Reinforcing (Positive) feedback relationships, respectively.</p>

		<h2 style="text-align: justify;">Step 2: Define Mathematical Relationships</h2>
		<p style="text-align: justify;">After creating a causal loop diagram (CLD) mapping the cost drivers, we determine a single equation mapping the relationship between each set of variables and the respective nodes. In the case of the AAA CLD, there were a set of fifty equations determining the model's underlying dynamics, that when simultaneously solved yield costs forecasts for five years into the future.</p>
		<p style="text-align: justify;">For example, the equation for calculating Members in Force (MIF), as defined by the adoption rate and the retention rate is as follows (where M<sub>i</sub> is the current count of customers, M<sub>i+1</sub> is the future count of customers, RR is retention rate, and AR is the adoption rate):</p>

		</div>
		<div style="text-align: justify;"><img title="mifpic" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/mifpic-276x300.png" width="276" height="300" /></div>
		<p style="text-align: justify;"><a href="http://serialmetrics.com/simulations/mifeq" rel="attachment wp-att-323"><img style="border: 0px; padding: 0px;" title="mifeq" alt="" src="http://serialmetrics.com/wp-content/uploads/2013/02/mifeq-300x28.png" width="300" height="28" /></a></p>
		<p style="text-align: justify;">Similar calculations are performed for each node in the model and as many variables as possible are evaluated as endogenous to the model without user input.</p>

		<h2 style="text-align: justify;">Step 3: Validate the Equations</h2>
		<p style="text-align: justify;">The next step is to validate the equations used in the simulation. This stage in the process requires pulling and regressing data from the customer databases and evaluating proposed relationships.  The regressions require significantly large r<sup>2</sup> values to eliminate random occurrence as a possible explanation for coincidental relationships found in the data.</p>

		<h2 style="text-align: justify;">Step 4: Build the Simulator</h2>
		<p style="text-align: justify;">Building a user-friendly, software simulator requires, first, identifying the audience who will use the tool.  Will the tool be a desktop app, a Web app, or something in between (e.g. Adobe Air - based).  What types of variables will the user modify and what variables should the Simulator process endogenously?  Serial Metrics works with our clients to determine the best use case before proceeding to development.</p>

		<div style="text-align: justify;"><img title="Sample Sim2" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/Screen-Shot-2011-09-04-at-4.19.15-PM-e1315178417213.png" width="599" height="290" /></div>
	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>