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
                        <img src="images/orion_page/orion.png" alt="">
                    </div>
                    <h1 class="page-title">Orion - A Packaged Solution Custom To Your Data</h1>
                    <div class="content">
                        
                        <h2>What is Orion</h2>

                        <p>Orion is a layered analytics platform for businesses, which makes use of your data to offer various types of predictions. The Orion platform is a highly portable, real-time, analytics solution that takes your raw data and generates valuable, predictive, insights without the need for hiring a data scientist.</p>

                        <p>You can think of Orion as a virtual assembly line that processes your data in several steps (or layers), churning out - not just predictions from your data - but rather a well trained system that can make predictions from your data.</p>
                        
                        <img src = "images/orion_page/orion_graphic_1.png" class = "fit-img">

                        <h2>How Does it Work?</h2>

                        <p>Orion seamlessly integrates into your database environment, and makes use of your data to offer various forms of predictions, such as recommendations, location inferences, sentiment, optimal matches, etc.</p>
                        <p>Using Orion is as simple as: providing read and write access to a data base environment. Then the magic starts. With just a few steps, Orion:</p>

                            <ul class="list-unstyled">
                                <li>Scans your database for available data columns</li>
                                <li>Joins the necessary columns of data to form a large conical matrix consisting of 1 Dependent</li>
                                <li>Variable and N number of Independent Variables.</li>
                                <li>Reads the canonical matrix to create a fully-trained, predictive model</li>
                            </ul>
                        <p>In three simple steps, you go from raw data to a predictive model.</p>
                        <p>Once additional data are written to your database, Orion will process the new rows of data and write a score to a final “probability” table.</p>

                        <img src = "images/orion_page/orion_graphic_2.png" class = "fit-img">

                        <h2>How Complicated is It?</h2>
                        <p>The goal of Orion is to remove the complexities of Data Science from your development cycle. Interfacing with Orion, is as simple as writing a SELECT statement.</p>

                        <h2>A Simple Use Case</h2>
                        <p>JobR, a mobile app for making job recommendations with a â€œTinder-likeâ€ user interface needed help making relevant job recommendations for both job-seekers and recruiters, alike. Instead of hiring a data scientist to build a predictive model, we simply import their data to the Orion platform, process and store results in a MySQL environment.</p>
                        <p>These tables contain two types of prediction value for each unique recruiter-candidate dyad that indicate whether we think recruiter A is going to like candidate B and vice-versa. We create three variables to indicate a 'Like' (RecrLike, CandLike, MutualLike) for Recruiter-Likes-Candidate, Candidate-Likes-Job and Mutual Likes, each a probability measure between 0 and 1.</p>

                        <p>With these Orion-generated tables, JobR can simply sort potential matches by order of preference. For example, if you wanted to pull a set of candidates for a recruiter with ID = 1, you could just do something like this:</p>
                        <p>SELECT * FROM recruiters WHERE recr_id = 1 ORDER BY RecrLike DESC LIMIT 1000;</p>
                        <p>This would pull up the 1,000 most-likely candidates for that recruiter. If you wanted to mix things up a little, you could add some random 'noise' to this process that would mix in some less-desirable matches so they're not just constantly marching from most- to least-desirable, but that's just an idea.</p>

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