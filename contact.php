<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Contact Us - FutoRex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/futoicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/orange.css">
    
    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
    <style>
        .loader-container {
  width: 100vw;
  height: 100vh;
  background: #25313f;
  position: absolute;
  left: 0;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.loader {
  width: 100px;
  height: 100px;
}
.loader path {
  fill: #fff;
  transform-origin: center;
  animation: rotate 1.5s linear infinite;
}
.loaderreverse {
  animation-direction: reverse !important;
}

@keyframes rotate {
  to {
    transform: rotate(360deg);
  }
  from {
    transform: rotate(0deg);
  }
}
    </style>


</head>

<body>
    <!-- SVG Preloader Starts -->
    <?php include("header.php")?>
        <!-- Header Ends -->
        <!-- Banner Area Starts -->
        <section class="banner-area">
            <div class="banner-overlay">
                <div class="banner-text text-center">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <div class="col-xs-12">
                                <!-- Title Starts -->
                                <h2 class="title-head">Contact <span>Us</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="index.php"> home</a></li>
                                    <li>contact</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area Ends -->
        <!-- Contact Section Starts -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 contact-form">
                        <h3 class="col-xs-12">Get In Touch</h3>
                        <p class="col-xs-12">Join the financial revolution with Futorex Prime & explore the smartest trading tools.</p>
                        <p class="col-xs-12">Get in touch and start smart.</p>
                        <!-- Contact Form Starts -->
                        <form class="form-contact" method="post" action="php/process-form.php">
                            <!-- Input Field Starts -->
                            <div class="form-group col-md-6">
                                <input class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME" type="text" required>
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="form-group col-md-6">
                                <input class="form-control" name="lastname" id="lastname" placeholder="YOUR EMAIL" type="text" required>
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="form-group col-md-6">
                                <input class="form-control" name="email" id="email" placeholder="YOUR PHONE NUMBER" type="email" required>
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="form-group col-md-6">
                                <input class="form-control" name="text" id="subject" placeholder="SUBJECT" type="text" required>
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="form-group col-xs-12">
                                <textarea class="form-control" id="message" name="message" placeholder=" YOUR MESSAGE" required></textarea>
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Submit Form Button Starts -->
                            <div class="form-group col-xs-12 col-sm-4">
                                <button class="btn btn-primary btn-contact" type="submit">send message</button>
                            </div>
                            <!-- Submit Form Button Ends -->
                            <!-- Form Submit Message Starts -->
                            <div class="col-xs-12 text-center output_message_holder d-none">
                                <p class="output_message"></p>
                            </div>
                            <!-- Form Submit Message Ends -->
                        </form>
                        <!-- Contact Form Ends -->
                    </div>
                    <!-- Contact Widget Starts -->
                    <div class="col-xs-12 col-md-4">
                        <div class="widget">
                            <div class="contact-page-info">
                                <!-- Contact Info Box Starts -->
                                <div class="contact-info-box">
                                    <i class="fa fa-home big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Address</h4>
                                        <p>London, United Kingdom </p>
                                    </div>
                                </div>
                                <!-- Contact Info Box Ends -->
                                <!-- Contact Info Box Starts -->
                                
                                <!-- Contact Info Box Ends -->
                                <!-- Contact Info Box Starts -->
                                <div class="contact-info-box">
                                    <i class="fa fa-envelope big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Email Addresses</h4>

                                        <p>support@Futorexprime.com </p>
                                    </div>
                                </div>
                                <!-- Contact Info Box Ends -->
                                <!-- Social Media Icons Starts -->
                                <div class="contact-info-box">
                                    <i class="fa fa-share-alt big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Social Profiles</h4>
                                        <div class="social-contact">
                                            <ul>
                                                <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Social Media Icons Starts -->
                            </div>
                        </div>
                    </div>
                    <!-- Contact Widget Ends -->
                </div>
            </div>
        </section>
        <!-- Contact Section Ends -->
       <?php include("footer.php");?>
       
        <!-- Template JS Files -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/custom.js"></script>
        
        <!-- Live Style Switcher JS File - only demo -->
        <script src="js/styleswitcher.js"></script>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>