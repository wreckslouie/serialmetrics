<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/orion.css">
</head>
<body class="inside-page">
	<?php include('includes/main_nav.php'); ?>
	<div class="main-content">
		<img src="images/products_page/db_icon.png">
		<h1>Products</h1>
		<h2>Orion</h2>
		
		<p>Orion, quite simply, is the fastest database on the planet.</p>
		<h3>How it works</h3>
		<p>
		Orion brings the power of Out-of-Order execution (common to microprocessor architecture) 
		to the world of database processing.  In the old days, database performance was limited 
		by processor performance. Thinsg have changed; today, database performance is only limited by I/O 
		(e.g., disk access).  In the days when processor power was very limited, and memory was 
		expensive, in-order-excution was a reasonable method for query processing. This is because, 
		out-or-order execution increases processing and memory management overhead.  In order to improve 
		database performance, now, we need to change the software execution paradigm to optimize for 
		I/O, instead of optimizing for CPU consumption.  Currently, in many enterprises any single 
		database is stored across numerous disks using servers that have multiple cores. This 
		contrasts with the old paradigm where there was a single core and single core system. 
		If the database software is designed using in-order-exeuction principle, the system can 
		issue a single I/O process any moment in time; that is, I/O processes are serially dependent.  
		This is a highly inefficient process as the data are continually, and repeatedly, read from 
		disk, stored in memory with the CPU idle during the moments where the disk is being accessed.  
		</p>

		<p>
		The conventional database query paradigm underutilized disk and CPU functionality.  Using 
		the OOO paradigm, we are able to vastly increase the utilization rates, thus realizing 
		proportional (to the recovered wait times) performance improvements.
		</p> 

		<p>
		The performance improvements due to out-of-order execution stem from reductions in the 
		instruction and data stall components of execution time. The decoupling of fetch and 
		execute stages in out-of-order processors enables part of the instruction miss latency 
		to be overlapped with the execution of previous instructions in the instruction window. 
		</p>

		<p>
		Further, unique, is the ability to dynamically allocate tasks when CPU utilization falls 
		below an acceptable threshold, thus guaranteeing optimally efficient query performance. 
		Traditional parallel processing technologies allocate task in advanced of query execution. 
		This requires either estimating a reasonable number of tasks to execute a query, which is 
		an almost impossible feat, or partitioning a dataset which requires more overhead and 
		is time-consuming.
		</p>

		<p>
		Reasonably advanced hardware with multiple processing cores and multiple disks is recommend 
		to run our software system.  Our technology can more efficiently exploit an increased number 
		of processing cores and disks than conventional technology. Therefore, system with an 
		increased number of processing cores and disks see performance benefits proportional to the 
		available hardware resources. This is in contrast to many database technologies that cannot 
		fully exploit increased hardware resources.
		</p>  

		<p>
		The technology is able to dynamically allocate tasks to fetch data to keep the CPU(s) fully 
		utilized, and constantly executing the query until completion.  A larger number of tasks to 
		fetch data mean that the same number of I/O can be completed in a shorter period of time, as 
		the ability to allocate more tasks to fetch and convey data for the CPU reduces the miss 
		latency associated with disk/CPU interaction.  Therefore, as the number of disks and processor 
		cores increase, so to can the number of tasks to fetch and convey data to the multiple processor cores. 
		</p>

		<!--Machine Learning Modules -->
		<h2>Machine Learning Modules</h2>

		<h3>Recommendation System -   Personalize Content Discovery</h3>

		<p>Recommends content, tailored specifically to the tastes and preferences of individual users.  
		Imagine visiting a site - your favorite music site, or shopping site, and the site offering just 
		the product that you wanted, before you even thought of it.  Amazing, right?  Amazing, but completely possible.</p>

		<h3>Matching System -  The Perfect Job, The Perfect Partner</h3>

		<p>Pairs users from one set with users from the other set.  Think of a job board, where one set of 
		users (job posters) and another set of users (job seekers), are looking for each other.  A matching 
		system looks at  the features and preferences from each side of the market and recommends optimal pairs of users.</p>  

		<h3>Scoring System -  Identify Quality, Quantifiably</h3>

		<p>Classifies data according to quality, risk, or event likelihood.  What  if you could 
		instantly identify if someone will buy from your store, and even know the exact purchase amount? 
		This ability to determine expected value, in real-time can help you better allocate resources, 
		offer discounts, nurture leads. Combine this with the ability identify the risk a that a customer 
		will attrite, and you have a working model to determine the lifetime expected value.</p> 


	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>