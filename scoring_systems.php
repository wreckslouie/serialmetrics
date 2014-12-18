<!DOCTYPE html>
<html>
<head>
    <title>Scoring Systems</title>
    <?php include('includes/head_links.php'); ?>
    <link rel="stylesheet" type="text/css" href="styles/modules.css">
    <script type="text/javascript" src="js/modules.js"></script>
</head>
<body class="inside-page">

    <?php include('includes/main_nav.php'); ?>


    <div id="main-content">
        <img class="ico-modules" src="images/home_page/abacus-icon.png">
        <h1>Scoring Systems</h1>

        <p>This is it.  All of your creative marketing is now in the hands of your sales folks, who are still converting
        less than 10% of the total opportunities.  The leads are no good. You need to start prioritizing the leads. But,
        how do you take the guesswork out of lead prioritization?  Orion takes the data that you have collected from your
        leads, and uses them to create a proprietary model, which can predict the likelihood any specific lead will close.
        This removes the guesswork from the sales process, and introduces new insights such as the attributes that actually
        predict buying behavior.  Each lead is then scored with a number that reflects how likely an individual lead will buy
        from you. In addition, the lead scoring model updates in-realtime as your firm collects new data from new leads.</p>

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

            <p>All you need to do is query the propensity table for matches.</p>
        </div>
    </div>


    <?php include('includes/footer.php'); ?>

</body>
</html>