<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Pricing</title>
    <?php include('includes/head_links.php'); ?>
    <link rel="stylesheet" type="text/css" href="styles/modules.css">
    <script type="text/javascript" src="js/modules.js"></script>
</head>
<body class="inside-page">

    <?php include('includes/main_nav.php'); ?>


    <div id="main-content">
        <img class="ico-modules" src="images/home_page/pricing-icon.png">
        <h1>Dynamic Pricing</h1>

        <p>One of the most difficult decisions a company can make is how to best price their product offerings.
        Charge too much, and the customers go elsewhere.  Charge too little, and you could have made more money.
        Until now, pricing hasn&rsquo;t been much more than a guess.</p>

        <p>Algorithmic Pricing enables finding the revenue maximizing price for any set of goods sold online.
        Business can easily increase profits by correcting pricing mistakes in real-time, and prices will always
        reflect the maximum revenue potential at any given time.</p>

        <p>With the Orion Dynamic Pricing API, finding the perfect price, has never been easier. In four simple steps,
        you can easily have a pricing system in place to optimally price your goods.</p>

        <div class="content">
            <h1>HOW TO WORK WITH SERIAL METRICS</h1>

            <h2>Integrating Orion</h2>
            <p class="description">Integration requires loading our Java SDK, which scans your databases for relevant, and predicatively valuable features.</p>

            <h2>Learning About Users</h2>
            <p class="description">Our system will then develop an initial model from the column variables automatically mined from your database. We call this, automated feature selection.</p>

            <h2>Fine-tuning Predictions</h2>
            <p class="description">To test the efficacy of the predictive models, Serial Metrics fine tunes model parameters to reduce type-1 and type-2 statistical errors.</p>

            <h2>Deploying Results</h2>
            <p class="description">The final model deploys as an API which monitors your database for new users, or changes to current user&rsquo;s tastes/behavior, and writes scores to a designated &lsquo;propensity&rsquo; table. This table is continuously updated as parameters that affect potential matches change. The results are always up-to-date.</p>

            <p>All you need to do is query the propensity table for the recommended price.</p>
        </div>
    </div>


    <?php include('includes/footer.php'); ?>

</body>
</html>