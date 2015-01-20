<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Modules</title>
        <?php include('includes/head_links.php'); ?>
        <link rel="stylesheet" type="text/css" href="styles/modules.css">
    </head>
    <body>
        <!-- $MAIN_NAV -->
        <section id="navigation">
            <div class="container-fluid">
                <div class="row">
                    <?php include('includes/main_nav.php'); ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <dic class="row">
            <div class="center-block">
                <div class="main-content">
                    <div class="page-icon">
                        <img src="images/home_page/pricing-icon.png" alt="">
                    </div>
                    <h1 class="page-title">Dynamic Pricing</h1>
                    <p>One of the most difficult decisions a company can make is how to best price their product offerings. Charge too much, and the customers go elsewhere. Charge too little, and you could have made more money. Until now, pricing hasn’t been much more than a guess.</p>

                    <p>Algorithmic Pricing enables finding the revenue maximizing price for any set of goods sold online. Business can easily increase profits by correcting pricing mistakes in real-time, and prices will always reflect the maximum revenue potential at any given time.</p>

                    <p>With the Orion Dynamic Pricing API, finding the perfect price, has never been easier. In four simple steps, you can easily have a pricing system in place to optimally price your goods.</p>

                    <div class="content">
                        <h1>HOW TO WORK WITH SERIAL METRICS</h1>
                        <h2>Integrating Orion</h2>
                        <p>Integration requires loading our Java SDK, which scans your databases for relevant, and predicatively valuable features.</p>

                        <h2>Learning About Users</h2>
                        <p>Our system will then develop an initial model from the column variables automatically mined from your database. We call this, automated feature selection.</p>

                        <h2>Fine-tuning Predictions</h2>
                        <p>To test the efficacy of the predictive models, Serial Metrics fine tunes model parameters to reduce type-1 and type-2 statistical errors.</p>
                        <h2>Deploying Results</h2>
                        <p>The final model deploys as an API which monitors your database for new users, or changes to current user’s tastes/behavior, and writes scores to a designated ‘propensity’ table. This table is continuously updated as parameters that affect potential matches change. The results are always up-to-date.</p>
                        <p>All you need to do is query the propensity table for matches.</p>
                    </div>
                </div>
            </div>
            </dic>
        </div>
    </section>
    <!-- $FOOTER SECTION -->
    <?php include('includes/footer.php') ?>
    <!-- JAVASCRIPT IMPORTS -->
    <?php include('includes/scripts.php'); ?>
    <script src="js/modules.js"></script>
</body>
</html>