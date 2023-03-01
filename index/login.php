<?php include './include/connection.php';


if (isset($_POST['submit'])) {
	$email = ($_POST['email']);
	$pass = $_POST['password'];
	if (empty($_POST["email"])) {
		$error = "<p style='color:red;font-size:10;margin:0px;margin-left:-130px'>*Email is required</p>";
	  } else {
		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $error = "<p style='color:red;font-size:10;margin:0px;margin-left:-40px'>Invalid email format</p>";
		}
	  }
	if (empty($pass)) {
		$error1 = "<p style='color:red;font-size:10;margin:0px;margin-left:-40px'>*Please Enter your password</p>";
	}
	if($sub == 'farmer'){
		$query = "select * from tbl_farmer where f_email='$email'";
		echo $query;
        $res = mysqli_query($conn, $query);
		
			if ($row = mysqli_fetch_assoc($res)) {
				$_SESSION['id'] = $row['f_id'];
				$db_pass = $row['f_password'];
				if((md5($pass) != $db_pass)) {
					$f_error = "<p style='background: #f2dedf;color: #9c4150;border: 1px solid #e7ced1;padding:10px;text-align:center;border-radius:10px;'>Please Enter Valid Password</p> ";
				}
				else{
					?>
                    <script>
                    window.location.href = 'index.php';
                    </script>
                    <?php
                        $_SESSION['id'] = $row['f_id'];
                        $_SESSION['EMAIL_id'] = $row['f_email'];
				
				}
			}
            elseif($sub == 'dealer'){
                $query = "select * from tbl_dealer where d_email='$email'";
		echo $query;
        $res = mysqli_query($conn, $query);
		
			if ($row = mysqli_fetch_assoc($res)) {
				$_SESSION['id'] = $row['d_id'];
				$db_pass = $row['d_password'];
				if((md5($pass) != $db_pass)) {
					$f_error = "<p style='background: #f2dedf;color: #9c4150;border: 1px solid #e7ced1;padding:10px;text-align:center;border-radius:10px;'>Please Enter Valid Password</p> ";
				}
				else{
					?>
                    <script>
                    window.location.href = 'index.php';
                    </script>
                    <?php
                        $_SESSION['id'] = $row['d_id'];
                        $_SESSION['EMAIL_id'] = $row['d_email'];
				
				}
			}

            }
		elseif($sub == 'expert'){
            $query = "select * from tbl_expert_details where e_email='$email'";
		echo $query;
        $res = mysqli_query($conn, $query);
		
			if ($row = mysqli_fetch_assoc($res)) {
				$_SESSION['id'] = $row['e_id'];
				$db_pass = $row['e_password'];
				if((md5($pass) != $db_pass)) {
					$f_error = "<p style='background: #f2dedf;color: #9c4150;border: 1px solid #e7ced1;padding:10px;text-align:center;border-radius:10px;'>Please Enter Valid Password</p> ";
				}
				else{
					?>
                    <script>
                    window.location.href = 'index.php';
                    </script>
                    <?php
                        $_SESSION['id'] = $row['e_id'];
                        $_SESSION['EMAIL_id'] = $row['e_email'];
				
				}
			}

        }
        else
        {
			$f_error = "<p style='background: #f2dedf;color: #9c4150;border: 1px solid #e7ced1;padding:10px;text-align:center;border-radius:10px;'>E-mail does not exists</p> ";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
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
    <style>
        .contact-two {
            padding-top: 0 !important;
            padding-bottom: 100px !important;
        }
        .page-header {
            padding: 0 !important;
            padding-top: 5% !important;
            
        }
        .section-title__tagline{
            color: rgb(0, 0, 0);
            font-size: 1.3rem !important;
        }
        .thm-breadcrumb{
            background-color: rgba(var(--agrion-white-rgb), .50);
        }
        .forgot_link{
            color: black;
            display: flex;
            flex-direction: row-reverse;
        }
        .error{
            color:red !important;
        }
        .error-input {
        border: 1px solid #ff0000 !important;
        color: #ff0000 !important;
}
    </style>

</head>

<div class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

<div class="page-wrapper">
    <!-- <div class="page-wrapper"> -->

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
</div>

    <div class="page-wrapper">
        

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(./assets/images/backgrounds/main-slider-1-3.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                       
                    <br>

                    <!--Contact Two Start-->
        <section class="contact-two">
            <!-- <div class="contact-two__shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-two-shape-1.png" alt="">
            </div> -->
            <div class="container">
                <div class="section-title text-center">
                    
                    <h2 class="section-title__title" style="color: black;">Login</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="contact-two__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-two__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row" style="text-align: center;
                        display: flex;
                        justify-content: center;">
                        
                            <div class="col-xl-9">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="contact-form__input-box">
                                    <input type="password" required onkeyup="pswds(this)" invalid-text="exampleInputPassword16" placeholder="Password" name="password">
                                    <small id="exampleInputPassword16" style="color: red; display: none;">
                                        <ul>
                                        <li style="color: red; display: table;">min 6 characters, max 50 characters</li>
                                        <li style="color: red; display: table;">must contain 1 letter</li>
                                        <li style="color: red; display: table;">must contain 1 number</li>
                                        <li style="color: red; display: table;">may contain special characters like !@#$%^&*()_+</li>
                                        </ul>
                                    </small>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <a href="forgot_pass.php" class="forgot_link">Forgot Password?</a>
                                <div class="contact-form__btn-box">
                                    <a href="index.php" class="thm-btn contact-two__btn" name="submit">Login<i
                                            class="icon-right-arrow"></i> </a>
                                            <br>
                             <span class="section-title__tagline" style="padding-top: 27px;">Don't Have an Account?<br><a style="padding-top: 15px;" class="section-title__tagline" href="register.php">  Create a New Account</a></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Contact Two End-->
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Google Map Start-->
        
        <!--Google Map End-->

      

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/js/validation.js"></script>



    <!-- template js -->
    <script src="assets/js/agrion.js"></script>
    

</body>

</html>