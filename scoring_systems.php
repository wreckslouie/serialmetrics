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
        <h1>Scoring Systems  -  Identify Quality, Quantifiably</h1>

        <p>Classifies data according to quality, risk, or event likelihood.  Know which users are at risk of quitting
        their subscription, or conversely, which users are completely loyal and price insensitive.   Need to score
        your leads?  It&rsquo;s the same math.  Simply put, the scoring system assigns a value to your data based on an
        estimated event likelihood, given a set of facts (or features). You can score anything from nutritional
        quality to lead quality.</p>

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