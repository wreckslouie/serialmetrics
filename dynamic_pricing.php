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
        <h1>Dynamic Pricing - Extract Value on Demand</h1>

        <p>Assigns the optimal price to goods such that each unit of inventory is sold
        to achieve revenue-optimality. Should you raise prices, or lower them? Should you
        give a discount just this once, or just to a certain set of users. When should
        you increase prices? Will the users return to your site if your prices are too
        high? These are all common questions that online retailers ask. What if, though,
        you could set prices dynamically to extract as much value as possible from each user?
        Or, what if you could estimate the one, best, price that the majority of your customers
        can pay so you can maximize your revenues. Our dynamic pricing module does just this,
        and more, including real-time demand fluctuations (changes in demand, or price elasticity
        of demand), and can make corrective action! Imagine a control system for regulating prices.</p>

        <div class="content">
            <h1>HOW TO WORK WITH SERIAL METRICS</h1>

            <h2>Integrating Orion</h2>
            <p class="description">Integration requires loading our Java SDK, which scans your databases for relevant, and predicatively valuable features.</p>

            <h2>Learning About Users</h2>
            <p class="description">Our system will then develop an initial model from the column variables automatically mined from your database.</p>

            <h2>Fine-tuning Predictions</h2>
            <p class="description">To test the efficacy of the predictive models, Serial Metrics fine tunes model parameters to reduce type-1 and type-2 statistical errors.</p>

            <h2>Deploying Results</h2>
            <p class="description">The final model deploys as an API which monitors your database for new users, or changes to current user&rsquo;s tastes/behavior, and writes scores to a designated &lsquo;propensity&rsquo; table.</p>

            <p>All you need to do is query the propensity table for matches.</p>
        </div>
    </div>


    <?php include('includes/footer.php'); ?>

</body>
</html>