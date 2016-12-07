<!DOCTYPE html>
<!-- UBC BGP Website Template Version 0.1 -->
<html>
<head>
    <?php include_once 'php/html-fragments/html-head.php'; ?>
	
    <script src="js/homepage.js"></script>

    <title>The UBC Biomedical Equipment Recovery Project (Unfinished Alpha)</title>
</head>
<body>
    <div id="navbar">
        <nav class="navbar navbar-default navbar-fixed-top on-cover">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" id="navbar-mobile-toggle" onclick="navbarCheckDropdown()" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">UBC Recovery</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Text</a></li>
                                <li><a href="#">Text</a></li>
                                <li><a href="#">Text</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Text</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Text</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
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
    <div id="footer">
        <div class="container">
            <h3>The UBC Biomedical Equipment Recovery Project</h3>
            <span>Website developed by Richie Zhang. (<a href="https://github.com/FractionalFunction/UBC-Biomedical-Equipment-Recovery" target="_blank">Source Code</a>)</span>
            <span>Copyright notices, TOS, Privacy Policy, etc goes here...</span>
        </div>
    </div>
</body>
</html>
