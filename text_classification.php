<!DOCTYPE html>
<html>
<head>
    <title>Text Classification</title>
    <?php include('includes/head_links.php'); ?>
    <link rel="stylesheet" type="text/css" href="styles/modules.css">
    <script type="text/javascript" src="js/modules.js"></script>
</head>
<body class="inside-page">

    <?php include('includes/main_nav.php'); ?>


    <div id="main-content">
        <img class="ico-modules" src="images/home_page/gear-icon.png">
        <h1>Text Classification - Find Meaning, not Keywords</h1>

        <p>Structures free-form text into sets of topic categories.  Imagine needing to organize volumes of text into
        ordered categories. This can be quite the manual process! One way to do this is reading each document,
        searching for keywords, then organizing the texts into categories based on keywords that arise. But, is this
        the best way? Our text classification module extracts themes from documents based on term frequencies.
        Forget keywords.  If you can assign topics to documents dynamically, then you don&rsquo;t need to have a list of
        categories a priori.  What&rsquo;s more, if two topics are too closely, cognitively, related, we can identify
        those topics, and coalesce them into broader categories,  accordingly.</p>

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