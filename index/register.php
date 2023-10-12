<?php
include './include/connection.php';

$registrationStatus = null;
$validationSuccess = true;
$sub = '';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $usrname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phoneno = $_POST['phone_no'];
    $farmer_no = $_POST['farm_no'];
    $gstin = $_POST['gstin'];
    $qualif = $_POST['qual'];
    $experience = $_POST['exp'];
    $addr = $_POST['address'];
    $sub = isset($_POST['subject']) ? $_POST['subject'] : '';

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Function to validate email format
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // Function to validate password format
    function isValidPassword($password) {
        // Password should have at least 6 characters, 1 letter, and 1 number
        return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_+]{6,}$/', $password);
    }

    // Clear previous error messages
    $errors = [];

    if (empty($lname)) {
        $errors['lname'] = "Please Enter your last name";
    } elseif (!preg_match("/^([a-zA-Z' ]+)$/", $lname)) {
        $errors['lname'] = "Please Enter only characters";
    }

    if (empty($_POST["email"])) {
        $errors['email'] = "Please Enter your E-mail";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
    }

    // Check for other form fields and add error handling as needed...

    if (empty($errors)) {
        // Process the form data and insert into the database

        $insert_query = "";

        if ($sub == 'Farmers') {
            $insert_query = "INSERT INTO `tbl_farmer`(`username`, `first_name`, `last_name`, `f_email`, `f_password`, `address`, `phone_no`, `farmer_no`) 
            VALUES ('$usrname', '$fname', '$lname', '$email', '$pass', '$addr', '$phoneno', '$farmer_no')";
        } elseif ($sub == 'Dealer') {
            $insert_query = "INSERT INTO `tbl_dealer`(username, first_name, last_name, d_email, d_password, address, phone_no, gst_no) 
            VALUES ('$usrname', '$fname', '$lname', '$email', '$pass', '$addr', '$phoneno', '$gstin')";
        } elseif ($sub == 'Expert') {
            $insert_query = "INSERT INTO `tbl_expert_details`(username, first_name, last_name, e_email, e_password, phone_no, e_qualification, e_experience) 
            VALUES ('$usrname', '$fname', '$lname', '$email', '$pass', '$phoneno', '$qualif', '$experience')";
        }

        if (!empty($insert_query)) {
            $res = mysqli_query($conn, $insert_query);
            if ($res) {
                $registrationStatus = true;
            } else {
                $registrationStatus = false;
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home One || Agrion || Agrion HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Agrion HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
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

        .section-title__tagline {
            color: rgb(0, 0, 0);
            font-size: 1.3rem !important;
        }

        .thm-breadcrumb {
            background-color: rgba(var(--agrion-white-rgb), .50);
        }

        #username-error {
            color: red !important;
        }

        .error {
            color: red;
        }
    </style>

</head>

<body>

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

                                        <h2 class="section-title__title" style="color: black;">Register</h2>
                                        <div class="section-title__icon">
                                            <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="contact-two__form-box">
                                    <?php if (isset($registrationStatus)): ?>
    <div class="registration-message <?php echo $registrationStatus ? 'success' : 'error'; ?>">
        <?php echo $registrationStatus ? 'Registration successful' : 'Registration failed'; ?>
    </div>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="contact-two__form" method="POST" onsubmit="return validateForm()">


                                            <div class="row">

                                                <div class="col-xl-6">
                                                    <div class="contact-form__input-box">
                                                    <input type="text" placeholder="First Name" name="fname" onblur="validateName(this, document.getElementById('fname-error'))">
                                                    <small id="fname-error" class="error"></small>

                                                    </div>

                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="contact-form__input-box">
                                                    <input type="text" placeholder="Last Name" name="lname" onblur="validateName(this, document.getElementById('lname-error'))">
                                                    <small id="lname-error" class="error"></small>

                                                    </div>

                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-form__input-box">
                                                        <input type="text" placeholder="Username" name="username" maxlength="12" minlength="5">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-form__input-box">
                                                        <input type="email"  placeholder="Email Address" name="email">
                                                        <small id="email-error" class="error"></small>

                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-form__input-box">
                                                        <input type="password" placeholder="Password" name="password">
                                                        <small id="password-error" class="error"></small>

                                                            <!-- <ul>
                                                                <li style="color: red;
                                        display: table;">min 6 characters, max 50 characters</li>
                                                                <li style="color: red;
                                        display: table;">must contain 1 letter</li>
                                                                <li style="color: red;
                                        display: table;">must contain 1 number</li>
                                                                <li style="color: red;
                                        display: table;">may contain special characters like !@#$%^&*()_+</li>

                                                            </ul><br /> -->
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-form__input-box">
                                                    <input type="text" placeholder="Phone" name="phone_no" id="phone_no">
                                                    <small id="phone-error" class="error"></small>


                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-form__input-box">
                                                        <input type="text" placeholder="Address" name="address">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-form__input-box">


                                                    <select name="subject" id="Subject" onchange="display_input()">
    <option value="" disabled selected>User Type</option>
    <option name="Farmers" value="Farmers">Farmers</option>
    <option name="Dealer" value="Dealer">Dealer</option>
    <option name="Expert" value="Expert">Expert</option>
</select>

                                                    </div>
                                                </div>


                                                <div class="col-xl-12" id="farmer" style="display: none;">
                                                    <div class="contact-form__input-box">
                                                        <input type="text" placeholder="kheduthaq number" name="farm_no">
                                                        <small id="farm_no-error" class="error"></small>

                                                    </div>
                                                </div>

                                                <div class="col-xl-12" id="dealer" style="display: none;">
                                                    <div class="contact-form__input-box">
                                                        <input type="text" placeholder="GSTIN" name="gstin" min="15" max="15">

                                                    </div>
                                                </div>

                                                <div class="col-xl-12" id="expert" style="display: none;">
                                                    <div class="contact-form__input-box">
                                                        <input type="text" placeholder="Qualification" name="qual">
                                                    </div>
                                                    <div class="contact-form__input-box">
                                                        <input type="text" placeholder="Experience" name="exp">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">

                                                    <div class="contact-form__btn-box">
                                                       
                                                            <input type="submit" class="thm-btn contact-two__btn text-center" style="text-align: center; padding: auto auto;" name="submit" value="Register">


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">

                                                    <div class="contact-form__btn-box">


                                                        <span class="section-title__tagline" style="padding-top: 27px;">Already Have an Account?<br><a style="padding-top: 15px;" class="section-title__tagline" href="login.php">Login</a></span>
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
                    <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143" alt="" /></a>
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




        <!-- template js -->
        <script src="assets/js/agrion.js"></script>
        <script>
    function display_input() {
        let role = $("#Subject").val();

        if (role == "Farmers") {
            $('#farmer').show();
            $('#expert').hide();
            $('#dealer').hide();
        } else if (role == "Dealer") {
            $('#dealer').show();
            $('#expert').hide();
            $('#farmer').hide();
        } else if (role == "Expert") {
            $('#expert').show();
            $('#dealer').hide();
            $('#farmer').hide();
        }
    }
    function validateName(inputElement, errorElement) {
        const nameRegex = /^[A-Za-z]+$/; // Regular expression for alphabets only

        if (!nameRegex.test(inputElement.value)) {
            errorElement.textContent = 'Only alphabets are allowed.';
            return false;
        } else {
            errorElement.textContent = ''; // Clear error message
            return true;
        }
    }
    function validatePhoneNumber(inputElement, errorElement) {
        const phoneNumber = inputElement.value;
        const phoneRegex = /^\d{10}$/; // Regular expression for exactly 10 digits

        if (!phoneRegex.test(phoneNumber)) {
            errorElement.textContent = 'Phone number must be exactly 10 digits.';
            return false;
        } else {
            errorElement.textContent = ''; // Clear error message
            return true;
        }
    }
    function validateForm() {
        let isValid = true;

        // Clear previous error messages
        clearErrors();

        const subject = document.querySelector('select[name="subject"]');

        // Validate First Name
        const fname = document.querySelector('input[name="fname"]');
        if (fname.value.trim() === '') {
            document.getElementById('fname-error').textContent = 'Please enter your first name.';
            isValid = false;
        }

        // Validate Last Name
        const lname = document.querySelector('input[name="lname"]');
        if (lname.value.trim() === '') {
            document.getElementById('lname-error').textContent = 'Please enter your last name.';
            isValid = false;
        }

        // Validate Username
        const username = document.querySelector('input[name="username"]');
        if (username.value.trim() === '') {
            document.getElementById('username-error').textContent = 'Please enter a username.';
            isValid = false;
        }

        // Validate Email
        const email = document.querySelector('input[name="email"]');
        if (email.value.trim() === '') {
            document.getElementById('email-error').textContent = 'Please enter your email address.';
            isValid = false;
        } else if (!isValidEmail(email.value)) {
            document.getElementById('email-error').textContent = 'Invalid email format.';
            isValid = false;
        }

        // Validate Password
        const password = document.querySelector('input[name="password"]');
        if (password.value.trim() === '') {
            document.getElementById('password-error').textContent = 'Please enter a password.';
            isValid = false;
        } else {
            // Only validate if the password field is not empty
            if (!isValidPassword(password.value)) {
                document.getElementById('password-error').textContent = 'Invalid password format.';
                isValid = false;
            }
        }

        // Validate Phone Number
        const phoneNo = document.querySelector('input[name="phone_no"]');
        if (phoneNo.value.trim() === '') {
            document.getElementById('phone-error').textContent = 'Please enter a phone number.';
            isValid = false;
        } else {
            if (!validatePhoneNumber(phoneNo, document.getElementById('phone-error'))) {
                isValid = false;
            }
        }

        // Additional validation for other form fields goes here

        if (subject.value === 'Farmers') {
            // Validate Farmer Number
            const farmNo = document.querySelector('input[name="farm_no"]');
            if (farmNo.value.trim() === '') {
                document.getElementById('farm_no-error').textContent = 'Please enter your kheduthaq number.';
                isValid = false;
            }
        }

        if (subject.value === 'Dealer') {
            // Validate GSTIN
            const gstin = document.querySelector('input[name="gstin"]');
            if (gstin.value.trim() === '') {
                document.getElementById('gstin-error').textContent = 'Please enter your GSTIN.';
                isValid = false;
            }
        }

        return isValid;
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('.error');
        errorElements.forEach((element) => {
            element.textContent = '';
        });
    }

    function isValidEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return emailPattern.test(email);
    }

    function isValidPassword(password) {
        // Password should have at least 6 characters, 1 letter, and 1 number
        const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_+]{6,}$/;
        return passwordPattern.test(password);
    }
</script>





</body>

</html>