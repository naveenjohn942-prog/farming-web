<?php
include './include/connection_session.php';

    if (!isset($_SESSION["id"])) {
        header("Location: ../login.php");
    
      }
    
        $id = $_SESSION['id'];
        $sql = mysqli_query($conn, "SELECT * FROM tbl_farmer WHERE f_id = $id");
        $row = mysqli_fetch_assoc($sql);
        $Name = $row['username'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Online Assistant Web Service </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Agrion HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/agrion-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/agrion.css" />
    <link rel="stylesheet" href="assets/css/agrion-responsive.css" />
    <link rel="stylesheet" href="assets/css/validation-style.css">
    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>

</head>

<body class="custom-cursor">
    

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="index.php"><img src="assets/images/resources/logo-1.jpg" alt=""></a>
                    </div>
                    <div class="main-header__menu-box">
                        <!-- style="padding-right: 118px;" -->
                        <div class="main-header__menu-box-top">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:naveenjohn942@gmail.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>  St. Xavier's College, Ahmedabad</p>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="main-header__menu-box-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">
                                                    <li class="current megamenu">
                                                        <a href="index.php">Home </a>
                                                            
                                                    </li>
                                                    <li>
                                                        <a href="#fcategory">Category</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Help</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="faq.php">FAQs</a></li>
                                                            <li><a href="#fcontact">Contact Us</a></li>
                                    
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="expert_guidance.php">Expert-Guidance</a>
                                                        
                                                    </li>
                                                    
                                                    <li class="dropdown">
                                                        <a href="product.php">Products</a>
                                          
                                                    </li>
                                                    <li>
                                                        <a href="about.php">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="logout.php">Logout</a>
                                                    </li>
                                                    <li>
                                                    <li style="display: inline-flex;"><a href="#">Welcome <?php echo $Name ?> </a><i style="padding: 10px;" class="fa fa-user"></i></li>
                                                    </li>
                                                   
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn-box">
                                                <!-- <div class="main-menu__search-box">
                                                    <a href="expert_update_profile.php"
                                                        class="fa fa-user"></a>
                                                </div> -->
                                                <div class="main-menu__cart-box">
                                                    <a href="cart.php" class="main-menu__cart icon-shopping-cart"></a>
                                                </div>
                                                <div class="main-menu__btn-box">
                                                    <a href="contact.php" class="thm-btn main-menu__btn">Get Free Quote
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
        