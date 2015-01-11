<!DOCTYPE html>
<html>
<head>
    <title>Recommendation Systems</title>
    <?php include('includes/head_links.php'); ?>
    <link rel="stylesheet" type="text/css" href="styles/modules.css">
    <script type="text/javascript" src="js/modules.js"></script>
</head>
<body class="inside-page">

    <?php include('includes/main_nav.php'); ?>


    <div id="main-content">
        <img class="ico-modules" src="images/home_page/recommendations-icon.png">
        <h1>Recommendation Systems</h1>

        <p>One of the best ways to improve customer engagement and drive sales is to anticipate the precise product
        that your customers will want to buy before they explicitly express interest in the product. Using your customer
        browsing and transaction data, it is possible to gauge the interests of your customers and offer them the products
        they are most likely to buy. </p>

        <p>A Recommendation System connects individual users with the right products, or content, when there is a large
        inventory from which to choose, and personalizes the buying experience for each individual customer. </p>

        <p>With the Orion Recommendation API, finding the right product for your customers, has never been easier.
        In four simple steps, you can easily have a pricing system in place to optimally price your goods.</p>

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