<!DOCTYPE html>
<html>
<head>
    <title>Intelligent Promotions</title>
    <?php include('includes/head_links.php'); ?>
    <link rel="stylesheet" type="text/css" href="styles/modules.css">
    <script type="text/javascript" src="js/modules.js"></script>
</head>
<body class="inside-page">

    <?php include('includes/main_nav.php'); ?>


    <div id="main-content">
        <img class="ico-modules" src="images/home_page/relations-icon.png">
        <h1>Intelligent Promotions</h1>

        <p>Promotions and discounts are among the most powerful tools to drive incremental revenues, but they are often
        costly to implement, and require a watchful eye to ensure a desired response. Serial Metrics offers a data-driven
        approach that identifies the optimal group of customers to target for a promotions - those least likely to make a
        purchase absent a promotion, and most likely to be influenced by a promotion.  By showing promotions to visitors who
        wouldn&rsquo;t otherwise make a purchase, you can avoid eroding existing sales and limiting the promotion&rsquo;s brand
        impact, boosting both revenue and margin.</p>

        <p>The Orion Promotional API integrates onto your site for a seamless experience that drives revenues and protects your brand.</p>

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