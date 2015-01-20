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
                        <img src="images/home_page/gear-icon.png" alt="">
                    </div>
                    <h1 class="page-title">Text Classification & Sentiment Analysis</h1>
                    
                    <p>Text Classification offers a simple, yet highly effective way to analyze large volumes of unlabeled text Wondering what your customers think of your latest product launch? Rather than manually comb through conversations, automate this analysis for each and every launch.</p>

                    <p>With the Orion Text Classification API, you can assign topics and infer sentiment to blocks of text as well as infer sentiment. In four simple steps, you can easily have a text classification system in place to help analyze unstructured data.</p>

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