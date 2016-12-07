<?php
    include_once 'php/settings.php';
    $homepage = true;
?>

<!DOCTYPE html>
<!-- UBC BGP Website Template Version 0.1 -->
<html>
<head>
    <?php include_once 'php/html-fragments/html-head.php'; ?>

    <script src="js/homepage.js"></script>

    <title>The UBC Biomedical Equipment Recovery Project (Unfinished Alpha)</title>
</head>
<body>
    <?php include_once 'php/html-fragments/navbar.php' ?>
    
    <div id="content-main">
        <div id="cover-page" class="no-bottom-margin">
            <div class="jumbotron">
                <div class="container">
                    <h2>The UBC Biomedical Equipment Recovery Project</h2>
                    <h4>This page is still under development. There is currently no content here.</h4>
                    <span>Background can also be a picture</span>
                    <br />
                    <span>A brief description of the project...</span>
                </div>
            </div>
        </div>
        <div class="content-full-height no-bottom-margin" style="background-color: rgb(139, 110, 255)">
            <div class="container">
                <h1>Full Height Section</h1>
                <p>Background can also be a picture</p>
                <p>There can be as many of these as we want</p>
            </div>
        </div>
        <div class="container content-media">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <a href="#">
                        <img class="media-object" src="img/test/test-image-grey.png" alt="Test Image" style="width: 100%;">
                    </a>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <h2>Heading</h2>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <a href="#">
                        <img class="media-object" src="img/test/test-image-grey.png" alt="Test Image" style="width: 100%;">
                    </a>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <h2>Heading</h2>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <a href="#">
                        <img class="media-object" src="img/test/test-image-grey.png" alt="Test Image" style="width: 100%;">
                    </a>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <h2>Heading</h2>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                </div>
            </div>
        </div>
    </div>
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
