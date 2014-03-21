<!DOCTYPE html>
<html>
<head>
	<title>Case Studies</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/case_studies.css">
	<script type="text/javascript" src="js/case_studies.js"></script>
</head>
<body class="inside-page">
	<?php include('includes/main_nav.php'); ?>
	<div class="main-content">
		<img src="images/case_studies/pencil_icon.png">
		<h1>Case Studies</h1>
		<div class="case-study">
			<div class="case-study-intro">
				<h2>AAA Membership Services Cost Forecast</h2>
				<p>
					Serial Metrics custom-built a system dynamics simulator to forecast 
					emergency roadside costs for AAA Membership Services. <strong>The</strong>
					<strong>challenge</strong>: several, highly variable, and difficult to predict, 
					macro-economic drivers, such as the unemployment rate, fuel prices, and even 
					weather patterns determine annual operational costs. In addition, usage, member 
					adoption rate, member attrition rate, word of mouth (WOM), marketing efficacy, 
					etc., all translate to a complex cost forecast. <strong>The benefit</strong>: 
					accurately forecasting financial costs for AAA could save the company, on the 
					order of <strong>$10 million</strong>, annually. 
					<a class="more">Read on...</a>
					<a class="less">Show less...</a>
				</p>
			</div>
			<div class="case-study-content">
				<h3>Step 1: Create a CLD</h3>

				<p>
					AAA membership count is a primary determinant of both revenue and cost. 
					The more members, the higher the probability of an emergency event, the 
					greater the usage, the greater perceived value, the greater the membership 
					count, <em>ceteris paribus</em>.
				</p>
				<img src="images/case_studies/aaa_1.jpg">
				<p>
					Membership count is governed by the potential adopters, marketing spend, 
					and membership tenure (the longer an individual is customer, the less 
					likely to attrite).
				</p>
				<img src="images/case_studies/aaa_2.jpg">
				<p>
					Combining the two aforementioned feedback processes, we are able to model 
					a set of variables that drive customer counts at any moment in time, and 
					use the customer counts to forecast operational costs over time. The 
					combined positive and negative feedback processes can potentially create 
					nonlinear member adoption, and usage, patterns. Additionally, <em>Second-Order</em>
					effects amplify any said non-linearities.
				</p>
				<img src="images/case_studies/aaa_3.jpg">
				<p>
					Linking usage data ... (assuming a positive experience, the more frequently 
					customers <em>use</em> the service the greater the customer retention rate, 
					hence achange in the aggregate price elasticity of demand.)
				</p>
				<img src="images/case_studies/aaa_4.jpg">
				<p>Linking cost data ...</p>
				<img src="images/case_studies/aaa_5.jpg">
				<p>Linking macro-economic data ...</p>
				<p>
					Fuel costs, the unemployment rate, for example, influence all sorts of variables 
					ranging from car wear and tear to average miles driven: both significant cost 
					determinants.
				</p>
				<img src="images/case_studies/aaa_6.jpg">
				<p>Combining the Micro-economic and the Macro-economic drivers ...</p>
				<img src="images/case_studies/aaa_7.jpg">
				<p>
					The <em>B's</em> and <em>R's</em> indicate Balanced (Negative) and Reinforcing 
					(Positive) feedback relationships, respectively.
				</p>
				<h3>Step 2: Define Mathematical Relationships</h3>
				<p>
					After creating a causal loop diagram (CLD) mapping the cost drivers, we 
					determine a single equation mapping the relationship between each set of 
					variables and the respective nodes. In the case of the AAA CLD, there 
					were a set of fifty equations determining the model's underlying dynamics, 
					that when simultaneously solved yield costs forecasts for five years into 
					the future.
				</p>
				<p>
					For example, the equation for calculating Members in Force (MIF), as defined 
					by the adoption rate and the retention rate is as follows (where M<sub>i</sub> 
					is the current count of customers, M<sub>i+1</sub> is the future count of customers, 
					RR is retention rate, and AR is the adoption rate):
				</p>
				<img src="images/case_studies/aaa_8.png">
				<p><a href="http://serialmetrics.com/simulations/mifeq" rel="attachment wp-att-323"><img style="border: 0px; padding: 0px;" title="mifeq" alt="" src="http://serialmetrics.com/wp-content/uploads/2013/02/mifeq-300x28.png" width="300" height="28" /></a></p>
				<p>
					Similar calculations are performed for each node in the model and as many 
					variables as possible are evaluated as endogenous to the model without user input.
				</p>
				<h3>Step 3: Validate the Equations</h3>
				<p>
					The next step is to validate the equations used in the simulation. This stage 
					in the process requires pulling and regressing data from the customer databases 
					and evaluating proposed relationships. The regressions require significantly 
					large r<sup>2</sup> values to eliminate random occurrence as a possible explanation 
					for coincidental relationships found in the data.
				</p>
				<h3>Step 4: Build the Simulator</h3>
				<p>
					Building a user-friendly, software simulator requires, first, identifying the audience 
					who will use the tool. Will the tool be a desktop app, a Web app, or something in between 
					(e.g. Adobe Air - based). What types of variables will the user modify and what variables 
					should the Simulator process endogenously? Serial Metrics works with our clients to 
					determine the best use case before proceeding to development.
				</p>
				<div><img title="Sample Sim2" alt="" src="http://serialmetrics.com/wp-content/uploads/2011/09/Screen-Shot-2011-09-04-at-4.19.15-PM-e1315178417213.png" width="599" height="290" /></div>
			</div>
		</div> <!-- .case-study -->

		<div class="case-study">
			<h2>Eventbrite Dynamic Pricing</h2>
			<div class="case-study-intro">
				<p>
					Serial Metrics designed a novel, patent pending, pricing application that estimates real-time, 
					instantaneous demand, using the velocity of sales: quantity sold per unit of time (Qs/t). In 
					addition, price elasticity of demand [(&#37;&Delta;Qs/&#37;&Delta;P) * P/Qs] is approximated in real-time to 
					determine the revenue maximizing price. This method of pricing is of particular value to 
					organizations that sell perishable commodities such as concert tickets. <strong>The challenge: 
					</strong>How do you price tickets for a said venue, such that the event 'sells out' and gross 
					revenues from the event ticket sales are maximized? 
					<a class="more">Read on...</a>
					<a class="less">Show less...</a>
				</p>
			</div>
			<div class="case-study-content">
				<h3>The Solution</h3>
				<p>
					Dynamic pricing, (i.e. time-based pricing), is a form of price discrimination that occurs when 
					customers are divided into two or more groups with separate demand curves, and each group is 
					charged different prices. Price discrimination can increase the revenues of a firm by enabling 
					the firm to capture more consumer surplus.
				</p>
				<p>
					The dynamic pricing application outlined in this case study uses a feedback, control method, 
					iteratively processing information about sales rate, conversion rate, and sale window to determine 
					(or discover) and assign the revenue maximizing price, as a function of instantaneous, market demand 
					and price elasticity of demand (the sales quantity response to price change). Successfully 
					estimating demand fluctuations requires statistically sampling real-time sales data (transactions) 
					to use as proxies, for both determine market demand and price elasticity of demand (PED).</p>
				<img src="images/case_studies/eventbrite_1.jpg">
				<p>
					To achieve a dynamic price discovery, the application proxies the sales rate to determine the 
					position and shape (slope, etc.) of the demand curve, and treats changes in sales rate (acceleration) 
					as subsequent "shifts" to the demand curve. To determine the slope of the demand curve (an antecedent 
					of price elasticity of demand), the application proxies the conversion rate (Qs/Site Visits). 
					At any moment in time, price optimality is determined as a quadratic expression where the firm charges 
					the maximum price to realize the maximum conversion rate.</p>
				<p><strong>Method to Determine Starting Price:</strong></p>
				<p>
					Initial prices are assigned based on a "price minimum" selected by the user. The price minimum generally 
					should cover marginal costs, but will be an input parameter for user to specify. Six prices are then 
					generated using the function <em>P(i)</em> = 2^i ; where i = the price minimum. For example, a price 
					minimum of $2.00 would generate six prices {2, 4, 8, 16, 32, 64}. Initial customers (early entrants) 
					will see one of the six prices randomly displayed until a large enough sample of customers purchases 
					at the specified prices to statistically approximate the long-run, revenue maximizing price. This process 
					will be referred to as "serializing price metrics." Revenue maximization requires maximizing the conversion 
					rate and price. The following example assumes visits to the site per unit of time equal across days and 
					price points, to achieve a constant conversion rate. After four days of price sampling, we conclude that 
					the revenue maximizing price is $8.00, for this example.</p>
				<p><strong>Example Sales Data:</strong></p>

				<table border="1" cellspacing="0" cellpadding="0">
				<tbody>
				<tr>
				<td valign="top" width="95"></td>
				<td colspan="6" valign="top" width="383">
				<p align="center"><strong>Price Samples: P(i) = 2<sup>i</sup></strong></p>
				</td>
				</tr>
				<tr>
				<td valign="top" width="95"><strong>Time</strong></td>
				<td valign="top" width="41">$2</td>
				<td valign="top" width="68">$4</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);">$8</td>
				<td valign="top" width="68">$16</td>
				<td valign="top" width="68">$32</td>
				<td valign="top" width="68">$62</td>
				</tr>
				<tr>
				<td valign="top" width="95">Day 1</td>
				<td valign="top" width="41">50</td>
				<td valign="top" width="68">35</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);">20</td>
				<td valign="top" width="68">10</td>
				<td valign="top" width="68">0</td>
				<td valign="top" width="68">0</td>
				</tr>
				<tr>
				<td valign="top" width="95">Day 2</td>
				<td valign="top" width="41">50</td>
				<td valign="top" width="68">30</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);">25</td>
				<td valign="top" width="68">8</td>
				<td valign="top" width="68">0</td>
				<td valign="top" width="68">0</td>
				</tr>
				<tr>
				<td valign="top" width="95">Day 3</td>
				<td valign="top" width="41">45</td>
				<td valign="top" width="68">30</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);">30</td>
				<td valign="top" width="68">6</td>
				<td valign="top" width="68">2</td>
				<td valign="top" width="68">0</td>
				</tr>
				<tr>
				<td valign="top" width="95">Day 4</td>
				<td valign="top" width="41">55</td>
				<td valign="top" width="68">35</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);">15</td>
				<td valign="top" width="68">9</td>
				<td valign="top" width="68">1</td>
				<td valign="top" width="68">1</td>
				</tr>
				<tr>
				<td valign="top" width="95">
				<p align="right"><strong>Sum(units sold)</strong></p>
				</td>
				<td valign="top" width="41">200</td>
				<td valign="top" width="68">130</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);">90</td>
				<td valign="top" width="68">33</td>
				<td valign="top" width="68">3</td>
				<td valign="top" width="68">1</td>
				</tr>
				<tr>
				<td valign="top" width="95">
				<p align="right"><strong>Total Revenue</strong></p>
				</td>
				<td valign="top" width="41">$400</td>
				<td valign="top" width="68">$520</td>
				<td valign="top" width="68"><span style="color: rgb(41,141,177);"><strong>$720</strong></td>
				<td valign="top" width="68">$528</td>
				<td valign="top" width="68">$96</td>
				<td valign="top" width="68">$62</td>
				</tr>
				</tbody>
				</table>
				<p><strong>Method to Determine Demand:</strong></p>
				<p>
					Determining demand will require measuring site visitors at any moment in time. The assumption 
					that an individual visited the site translates to there being demand for a good or service.
					Of course, site visits are only an effective measure for demand if the firm has complete market 
					share, and web traffic is large portion of sales. For most products, we can assume we are 
					measuring the firms "residual demand curve," and not the market demand curve.
				</p>
				<p><strong>Method to Determine Price Elasticity of Demand:</strong></p>
				<p>
					The slope of the demand curve is an important characteristic of dynamic pricing, answering the 
					question, "by how much we can increase or decrease sales to achieve our desired conversion rate."
					To proxy the price elasticity of demand, we look to the conversion rate (quantity sold / Visits). 
					We normalize the units sold by measuring against visits to account for any changes in demand. 
					That is to say, quantity sold, alone, does not serve as a fair demand comparison across multiple 
					events; quantity sold per site visit (Conversion Rate) better approximates price optimality.
				</p>
				<p><strong>Method to Determine Changes in Demand:</strong></p>
				<p>
					A shift in the demand curve will result from time to time, if additional information about the 
					goods sold avail themselves during the sales window, or if consumer incomes, tastes, preferences, 
					price of substitute goods, price of complimentary goods change. These variables are generally 
					exogenous to the pricing engine, but we can render them "endogenous" by proxying the sales rate 
					and web traffic rate. If the sales rate increases, we can assume, ceteris paribus, either the 
					demand has changed, or the price elasticity of demand has changed (the latter requires measuring 
					the conversion rate). We expect second order effects of sales themselves to shift the demand 
					curve at a later period within the sale window.
				</p>
				<p><strong>Method to Iteratively Change Prices:</strong></p>
				<p>
					For the most part, once a price has been sampled as revenue maximizing, we can adhere to that price 
					until we notice the velocity of sales increasing or decreasing. At which time, we can conclude there 
					has been a changed to the demand curve, and the market now values the goods differently. As such, 
					we resample prices again, but only use three price points, instead of six. When we establish a new 
					revenue maximizing price, we continue sales at the new price point.
				</p>
			</div>
		</div> <!-- .case-study -->

		<div class="case-study">
			<div class="case-study-intro">
				<h2>Sycle Lead Routing Algorithm</h2>
				<p>
					Serial Metrics designed and implemented an innovative, machine-based, <strong>lead nurturing</strong> and 
					routing application using a proprietary machine-learning algorithm to decide email campaign target 
					population (who receives the message) and message sequence (what message they receive). <strong>The 
					challenge</strong>: prospective customers (sales leads) avoid responding to direct marketing campaigns 
					when the marketing promotion does not align with immediate customer needs. Meanwhile, sales leads that 
					respond to marketing promotions already have some desire to purchase. Identifying the segment of sales 
					leads that are "ready to buy" and those that are not is key. Further important is the ability to determine 
					<em>when </em>to connect with the sales leads to ensure the maximum purchase likelihood. Traditional lead 
					nurturing processes periodically correspond with sales leads, imprinting brand awareness, and cultivating 
					interest so at the 'right' time a sales lead converts to purchase.
					<a class="more">Read on...</a>
					<a class="less">Show less...</a>
				</p>
			</div>
			<div class="case-study-content">
				<h3>Lead Nurturing in a Nutshell</h3>
				<ul>
					<li>Identify sales leads that are actively interested to purchase</li>
					<li>Construct a direct marketing message tailored to the sales leads actively interested to purchase, nudging them to buy</li>
					<li>Track and score message recipient activity level</li>
					<li>Automate lead generation process and deliver sales-ready leads</li>
					<li>Periodically message the sales leads identified as 'unready to buy' with a brief marketing message ensuring brand awareness and cultivating interest</li>
				</ul>
				<h3>Traditional Lead Nurturing Process</h3>
				<ul>
					<li>Sequentially messages scored target population</li>
					<li>Manually analyzes campaign performance data</li>
					<li>Establishes A/B control and tests groups to measure campaign efficacy</li>
					<li>Incrementally adjusts marketing message after campaign execution completes</li>
				</ul>
				<img src="images/case_studies/sycle_1.png">
				<h3>Serial Metrics Approach</h3>
				<ul>
					<li>Treats message flow as a network path optimization problem</li>
					<li>Gauges how users interact with a message</li>
					<li>Dynamically incorporates recipient engagement data to determine the next sequential message</li>
					<li>Enables computer-aided scoring algorithm to 'decide' the optimal message flow for maximum yield capture</li>
				</ul>
				<img src="images/case_studies/sycle_2.png">

				<h3>Benefits</h3>
				<p><strong>Automated capture and response streamlines sales process</strong></p>

				<ul>
					<li>Better integrate sales and marketing efforts</li>
					<li>More efficiently allocated sales resources</li>
					<li>Gain insight into sales prospects motivations</li>
				</ul>
				<p><strong>Dynamically discover and address consumer purchase reservations</strong></p>

				<ul>
					<li>Lack of Information</li>
					<li>Price Sensitivity</li>
					<li>Brand Loyalty</li>
					<li>Etc.</li>
				</ul>
				<h3>How it Works</h3>
				<ol>
					<li>Initial marketing message reaches the target population</li>
					<li>Recipient engagement is measured, scored, and communicated to scoring database</li>
					<li>Aggregate recipient scores are rank ordered</li>
					<li>Subsequent email messages are uniquely queued based on score percentile
					<li>High scores, indicating user interest, are more aggressively routed marketing messages</li>
					<li>Low scores, indicating poor user interest, are further 'nurtured' along a 'slow path' until, eventual, sales conversion</li>
					<li>Message sequence permutations form a 'network path'</li>
					<li>Scoring algorithm recursively processes path conversion rate data <em>and </em>individual message scores to determine 'the next message'</li>
					<li>Lead routing system dynamically determines, and leverages, the optimal message sequence to ensure highest sales rate conversion</li>
				</ol>
				<h3>Scoring Algorithm</h3>
				<p>Clicks are given a score of 1 and are divided by the message number. This ratio factors message saturation, i.e., diminishing marginal value of each additional message.<p>
				<img src="images/case_studies/sycle_3.png">
				<p>Adding additional weights: Time to open (1/Xt) and template weight (Tw)</p>
				<img src="images/case_studies/sycle_4.png">
				<p>Leads are routed based on score percentile distribution</p>

				<ul>
					<li>80th percentile receive a more aggressive series of marketing messages</li>
					<li>50th percentile receive a more 'nurturing' series of marketing messages</li>
				</ul>
				<p>Fast Track: Target marketing population receives a sequence of messages that quickly prompt a purchase decision</p>
				<img alt="FastTrack" src="images/case_studies/sycle_5.png">

				<p>Slow Track: Target marketing population continue receiving marketing messages before being prompted with a purchase decision</p>
				<img alt="SlowTrack2" src="images/case_studies/sycle_6.png">

				<h3>Path Scoring</h3>
				<p>The Serial Metrics lead routing application uses a series of decision criteria, incorporating scored recipient engagement values as well as data supporting the message sequence that maximizes the sales conversion propensity.  The resulting process identifies, dynamically, and within the campaign window the series of messages to which each consumer segment reacts.  Information elucidated during this process is critical to future marketing campaigns as it identifies not only the individual messages, but as well the <em>sequence of messages </em>that increase sales conversion.</p>
				<img src="images/case_studies/sycle_7.png">
			</div>
		</div>	<!-- .case-study -->

	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>