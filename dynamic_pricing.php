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
        <script type="text/javascript">var _kmq = _kmq || []; var _kmk = _kmk || '01a16ed3239af3fe13f608ce33b60e13d5109d1e'; function _kms(u){ setTimeout(function(){ var d = document, f = d.getElementsByTagName('script')[0], s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = u; f.parentNode.insertBefore(s, f); }, 1); } _kms('//i.kissmetrics.com/i.js'); _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js'); </script>
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
                    <p>Until now, retailers have had to rely on guesswork to figure out the right prices for their products. Should you raise prices, or lower them? When can you raise them without driving away your customer base? Should you give discounts? To which users? Trial and error means time and money wasted, and lost opportunities for profit.</p>
                    <p>Orion takes the guesswork out of pricing and turns it into an exact science. Pricing mistakes are fixed in an instant, and you’ll never again have to worry about losing chances for maximum revenue. Our algorithms generate prices that always reflect the maximum revenue potential. Because Orion updates 24/7, you’ll be able to change your prices to fit current market trends and changes in demand in real time.</p>
                    <div class="content">

                        <div class="how-intro">
                            <h1>HOW TO WORK WITH SERIAL METRICS</h1>
                            <p>Technology is most powerful when it’s easy to use. That’s why we’ve streamlined our process to make working with Serial Metrics truly effortless.</p>
                            <h2>Integrating Orion</h2>
                            <p>Integration simply requires loading our Java SDK, which scans your databases for relevant and predicatively valuable features.</p>
                            </p>
                            <a class="more">Read on...</a>
                            <a class="less">Show less...</a>
                        </div>

                        <div class="how-content">
                            <h2>Learning About Users</h2>
                            <p>Next, our system develops a starting model based on the column variables taken straight from your database. Orion will build upon this foundation as it learns more from your data.</p>

                            <h2>Fine-tuning Predictions</h2>
                            <p>To make sure that our predictive models are as maximally effective, we hone the parameters of your starting model to minimize the occurrence of type-1 and type-2 statistical errors. Orion gives you only the most accurate, high quality results.</p>

                            <h2>Deploying Results</h2>
                            <p>The newly perfected model will deploy an API that simultaneously checks your database for new users and looks back at the data of old users to see if their preferences or activity has changed. Based on this new information, Orion assigns scores and puts them into a ‘propensity’ table. This table will give you a clear view of Orion’s findings and your most important data at a glance. After creating the table, Orion allows you to easily search it for matches.</p>
                            <p>For more information on how to make the most of your data with Orion, contact us today. Our team of friendly experts will be happy to guide you through the start-up process. You have the data: let Serial Metrics help you maximize your results.</p>
                        </div>
                    </div>

                    <div class = "tab-table">
                        <div role="tabpanel" >

                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class=""><a href="#predictions" aria-controls="predictions" role="tab" data-toggle="tab">Predictions</a></li>
                                <li role="presentation"><a href="#single-modules" aria-controls="single-modules" role="tab" data-toggle="tab">Single Modules</a></li>
                                <li role="presentation"><a href="#full-module" aria-controls="full-module" role="tab" data-toggle="tab">Full Module</a></li>
                                <li role="presentation"><a href="#orion" aria-controls="orion" role="tab" data-toggle="tab">The Orion Platform</a></li>
                            </ul>

                          <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="predictions">
                                    We analyze your data and send you a set of probabilities.
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="single-modules">
                                    Do you have clean data but need help with the predictions? Send us the data, and we'll give you the mathematical model and predictions you want.
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="full-module">
                                    Serial Metrics will build the model you need using Orion, which you will receive in the form of an API.
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="orion">
                                    Orion will process all your data, produce probabilities, dynamically produce charts and graphs, and produce the underlying model to be used for further module development.
                                </div>
                            </div>

                        </div>
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