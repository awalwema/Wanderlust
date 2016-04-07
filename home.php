<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Class Project Site</title>

            <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href = "css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href = "css/full-width-pics.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>

            <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <?php if (($_SESSION['username']) != $user) : ?>

                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="aboutus.php">About Us</a>
                        </li>

                        <?php else : ?>

                                <li>
                                    <a href="home.php">Home</a>
                                </li>
                                <li>
                                    <a href="contactus.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="aboutus.php">About Us</a>
                                </li>
                                <li>
                                    <a href="charactersheet.php">Character Sheet</a>
                                </li>

                        <?php endif; ?>

                        </li>

                    </ul>
                        <ul class="nav navbar-nav navbar-right navbar-text">
                         <li class="active">
                             <?php if (($_SESSION['username']) != $user) : ?>

                                 <li><a href="login.php"> Log In</a></li>
                                <li><a href="registration.php"> Register</a></li>

                             <?php else : ?>
                                 <p>Logged in as: <?php echo $_SESSION['username'] ?>   </p>
                                 <a href="logout.php"> Logout </a>
                             <?php endif; ?>

                         </li>

                        </ul>

                </div>
                    <!-- /.navbar-collapse -->
            </div>
                <!-- /.container -->
        </nav>

            <!-- Full Width Image Header with Logo -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->
        <header class="image-bg-fluid-height">
            <img class="img-rounded img-responsive img-center" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/5459b646539419.5607d7390e203.png" width="200" height="200">
        </header>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <?php
                                
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    echo '<h1 class="section-heading text-danger">Welcome to Character Creator!</h1>';
}
 ?>
                        <p class="lead section-lead">This website will allow you to easily create your own Wanderlust Character sheet</p>
                        <br>
                        <p class="section-paragraph text-success" >Login or Register now by clicking on the corresponding tab in the upper <br> right corner
                        of the page.  Once you are logged in, click the Character Sheet <br> tab on the navigational menu to edit or start
                        creating your character!

                        <img class="img-responsive pull-right" src="http://villageoffaith.org/uploads/6/2/2/8/62282299/1370146_orig.png" alt="">

                        </p>
                    </div>
                </div>
            </div>
        </section>

            <!-- Fixed Height Image Aside -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->


            <!-- Content Section -->
            <!-- Content Section -->

            <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2016</p>
                    </div>
                </div>
                    <!-- /.row -->
            </div>
                <!-- /.container -->
        </footer>

            <!-- jQuery -->
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>

</html>