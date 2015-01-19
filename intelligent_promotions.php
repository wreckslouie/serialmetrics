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
                        <img src="images/home_page/relations-icon.png" alt="">
                    </div>
                    <h1 class="page-title">Intelligent Promotions</h1>

                    <p>Promotions and discounts are among the most powerful tools to drive incremental revenues, but they are often costly to implement, and require a watchful eye to ensure a desired response. Serial Metrics offers a data-driven approach that identifies the optimal group of customers to target for a promotions - those least likely to make a purchase absent a promotion, and most likely to be influenced by a promotion. By showing promotions to visitors who wouldn’t otherwise make a purchase, you can avoid eroding existing sales and limiting the promotion’s brand impact, boosting both revenue and margin.</p>

                    <p>WThe Orion Promotional API integrates onto your site for a seamless experience that drives revenues and protects your brand.</p>

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