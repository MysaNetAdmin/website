<?php
if(isset($_POST['submit'])){
    $to = "contact@samyhussaein.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- ========== PAGE TITLE ========== -->
        <title>Samy Hussaein - Contact</title>
        <link rel="icon" href="favicon.ico"/>
        <!-- ========== META TAGS ========== -->
        <meta name="description" content="Je m’appelle Samy Hussaein et je suis un jeune développeur et tech addict.">
        <meta name="keywords" content="Samy Hussaein, developper,EPITA, contact, cv, linkedin, tech, technologies, linux, geek"/>
        <meta name="robots" content="index, follow" />
        <meta charset="utf-8">
        <meta name="author" content="Mysa">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="twitter:site" content="@SamyHussaein"/>
        <meta name="twitter:title" content="Samy Hussaein"/>
        <meta name="twitter:description" content="Geek, Developer & Tech Addict">
        <meta property="og:title" content="@SamyHussaein's WebSite" />
      	<meta property="og:description" content="Tech Addict, Developer & Geek, fascinated with new technology." />
      	<meta property="og:url" content="https://www.samyhussaein.com" />
      	<meta property="og:image" content="" />
      	<meta property="og:type" content="website" />
      	<meta property="og:site_name" content="Samy Hussaein" />
        <!-- ========== CSS ========== -->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato%7CMontserrat" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen">
        <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">
        <!-- ========== JQUERY PLUGIN ========== -->

        <script type="text/javascript" src="js/ajax-jquery.min.js"></script>

    </head><!-- end head -->
    <body>
        <div class="se-pre-con"></div><!-- ========== PRELOADER ========== -->
        <!-- ========== MENUBAR ========== -->
        <div class="menubar">
            <div class="menubar-content">
                <nav class="navbar navbar-default navbar-fixed-top shadow back">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="site-title">
                                    <a href="index.html"><h3>Samy Hussaein</h3></a>
                                </div><!-- end site-title -->
                            </div><!-- end col-md-4 -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button><!-- end button -->
                            </div><!-- end navbar-header -->
                            <div class="col-md-10 col-sm-10 navbar-style">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                      <li>
                                          <a href="index.html">Home</a>
                                      </li>
                                      <li>
                                          <a href="about.html">About</a>
                                      </li>
                                      <li>
                                          <a href="skills.html">Skills</a>
                                      </li>
                                      <li>
                                          <a href="projects.html">Projects</a>
                                      </li>
                                      <li>
                                          <a href="contact.html" class="active">Contact</a>
                                      </li>
                                    </ul><!-- end nav -->
                                </div><!-- end collapse navbar-collapse -->
                            </div><!-- end col-md-8 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                </nav><!-- navbar -->
            </div><!-- end menubar-content -->
        </div><!-- end menubar -->
        <div class="main-page-content">

            <!-- ================================ CONTACT =============================== -->

            <div id="contact">
                <div id="contact-content">
                    <div class="contact-grid">
                        <div class="contact-form-details wow fadeIn">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                    </div><!-- end col-md-12  -->
                                </div><!-- end row  -->
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contact-col wow fadeIn">
                                        <div class="main-title text-center wow fadeIn">
                                            <h3>Contact</h3>
                                            <div class="underline1"></div>
                                            <div class="underline2"></div>
                                        </div><!-- end testimonial-title  -->
                                        <div class="contact-form main-row">
                                            <form id="contactForm" class="contact-form shake" data-toggle="validator">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="first_name" class="form-control" placeholder="First Name" required data-error="Please enter your name">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="last_name" class="form-control" placeholder="Last Name" required data-error="Please enter your name">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="email" class="email form-control" id="email" placeholder="E-mail" required data-error="Please enter your email">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <button type="submit" id="submit" class="btn btn-success text-center"> Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div><!-- end contact-form -->
                                    </div><!-- end col-md-6 -->
                                </div><!-- end row -->
                                <div class="row margin text-center">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="info-details">
                                            <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                                            <h3>Email</h3>
                                            <p>contact@samyhussaein.com</p>
                                        </div><!-- end info-details  -->
                                    </div><!-- end col-md-4 -->
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div><!-- end contact-form-details -->
                    </div><!-- end contact-grid -->
                </div><!-- end contact-content -->
            </div><!-- end contact -->
        </div><!-- end main-page -->

        <!-- ================================ JQUERY =============================== -->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/wow-anim.js"></script>
        <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
        <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
        <script src="js/jquery.scrolly.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-v=2.1.5.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.pack-v=2.1.5.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jQuery-latest.js" type="text/javascript"></script>
    </body><!-- end body -->
</html><!-- end html -->
