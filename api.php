<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PAPI - Privacy API
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-unibody navbar-custom navbar-fixed-top navbar-onepage">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a href="index.php" class="navbar-brand page-scroll">
                <!-- Text or Image logo--><img src="img/logo.png" alt="Logo" class="logo"><img src="img/logodark.png" alt="Logo" class="logodark"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling-->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section-->
                    <li class="hidden"><a href="#page-top"></a></li>
                <li><a href="index.php" class="page-scroll">Home</a></li>
                <li><a href="index.php#about" class="page-scroll">About</a></li>
                <li><a href="index.php#why" class="page-scroll">Why Prifender</a></li>
                <li><a href="index.php#identity" class="page-scroll">Technology</a></li>
                <li><a href="api.php" class="page-scroll">API</a></li>
                <li><a href="gdpr.php" class="page-scroll">GDPR</a></li>
                <li><a href="/news" class="page-scroll">NEWS</a></li>
                <li><a href="#contact" class="page-scroll">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header data-background="img/header/92.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h2>PAPI - Privacy API</h1>
      </div>
    </header>

    
<section>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-lg-5">
                <h3>Rapid Identity Access</h3>
                <p class="no-pad">Many organizations today are struggling to make sense out of the personal information they keep in their repositories. There are many applications who may benefit from having access to Prifender's rich identity inventory. For this reason, Prifender developed PAPI: a privacy API that is aimed to assist applications with rapid identity access.</p>

                <p><p><a href="#contact" class="btn btn-dark">Contact us to learn more</a></p>
            </div>
            <div class="col-lg-7">
                <img src="img/misc/papi.png" alt="" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>

    <section class="bg-gray">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3>Prifender's API Calls</h3>
                </div>
            </div>
            <div data-wow-duration="2s" data-wow-delay=".2s" class="row wow fadeInUp">
                <div class="col-lg-3 col-sm-6">
                    <h5><i class="icon-big ion-ios-monitor-outline"></i> Self-service Data Subject access portal</h5>
                    <p>Provide all private information of data subjects that an organization has to a dedicated portal, non-related to Prifender’s UI, for individuals to query</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5><i class="icon-big icon ion-ios-loop"></i> Data for workflow initiation systems </h5>
                    <p>By utilizing Prifender’s API, systems such as Archer can access relevant data and initiate proper workflows</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5><i class="icon-big ion-ios-bolt-outline"></i> Connectivity for DLP solutions </h5>
                    <p>Enabling DLP solution to query Prifender’s database empowers the solution to cover more use cases and to stop potential violations</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5><i class="icon-big ion-ios-color-filter-outline"></i> Integration with security and eDiscovery tools</h5>
                    <p>Data accumulated in Prifender can enrich other security and eDiscovery tools</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>contact us</h3>
                    <p>To receive updates from Prifender about our products and services, please provide us with the following information.  You can always opt out from receiving messages from us.  See a link to our privacy notice below.
                    </p>
                    <hr>
                    <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> 2443 Fillmore st. Suite 517, SF, CA 94115
                    </h5>
                    <h5><i class="fa fa-envelope fa-fw fa-lg"></i> info@prifender.com
                    </h5>
                    <h5><i class="fa fa-phone fa-fw fa-lg"></i>+1 415 890 6979
                    </h5>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <h3>Schedule a Demo</h3>
                    <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
                    <form id="contactForm" name="sentMessage" novalidate="">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="name" class="sr-only control-label">Your Name</label>
                                <input id="name" type="text" placeholder="Your Name" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="email" class="sr-only control-label">Your Email</label>
                                <input id="email" type="email" placeholder="Your Email" required="" data-validation-required-message="Please enter email" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="phone" class="sr-only control-label">Your Phone</label>
                                <input id="phone" type="tel" placeholder="Your Phone" required="" data-validation-required-message="Please enter phone number" class="form-control input-lg"><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label for="message" class="sr-only control-label">Message</label>
                                <textarea id="message" rows="2" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section-->
    <div class="container-fluid footer-small bg-gray text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p data-wow-iteration="999" data-wow-duration="3s" class="wow flash"><a href="#page-top" class="page-scroll"><i class="icon ion-ios-arrow-up fa-2x"></i></a></p>
                
                <p class="small"><a href="http://PRIFENDER.COM">©2017 PRIFENDER.COM</a> | <a href="privacy.php">PRIVACY POLICY</a></p>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/form.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.parallax.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smartmenus.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="js/main.js"></script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>