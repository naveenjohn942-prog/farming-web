
<?php 

//  include './include/header.html';
//  include './include/connection.php';
include './include/header.php';
include './include/connection_session.php';

$rid = $_SESSION['id'];
$rsql = "SELECT * FROM `tbl_farmer` WHERE f_id = $rid";
$rquery = mysqli_query($conn, $rsql);
$rrow = mysqli_fetch_assoc($rquery);
$name = $rrow['first_name'];

if (isset($_POST['submit']))
{

$review = $_POST['review'];


$query = "INSERT INTO tbl_queries(f_id,q_desc) VALUES('$rid','$review')";

if ($conn->query($query) === TRUE) {
echo "<script>alert('Successfully Recorded');";
echo "window.location.href = 'index.php';</script>;";
}
else{

echo "Error".mysqli_error($conn);
}
}
?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">we are providing expert services</p>
                                        <h4 class="main-slider__title">Online Assistant WebService</h4>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">we are providing expert services</p>
                                        <h4 class="main-slider__title">Online Assistant WebService</h4>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>


                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">the Best Quality <br> Services</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <!-- <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">a Smart organic <br> services</h3>
                            </div>
                        </div>
                    </div> -->
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-harvest"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Natural products</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->
        
        <!--About One Start-->
      
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url(assets/images/shapes/services-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We’re Doing</span>
                    <h2 class="section-title__title">Services We’re offering</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-1.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-tractor"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="product.php">Agriculture <br>
                                        Products</a></h3>
                                <p class="services-one__text">We are offering broad range of agriculture products.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-3.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-vegetables"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="Expert_Guidance.php">Expert
                                        <br>Guidance</a></h3>
                                <p class="services-one__text">We are providing expertise guidance to farmers 
                                    having any issues or queries.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    
                    <!--Services One Single End-->
                    
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="assets/images/services/services-one-2.jpg" alt="">
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-organic-food"></span>
                                    </div>
                                </div>
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><a href="product.php">Organic
                                            <br> Products</a></h3>
                                    <p class="services-one__text">We have dealers who sells organic products to farmers.</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
      
        
         <!--Services One End-->
        </section>
        <!--Brand One Start-->
        
        <!--Unbeatable One Start-->
        <section class="unbeatable-one">
            <div class="unbeatable-one__bg  jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/unbeatable-one-bg.jpg);"></div>
            <!--Testimonial One Start-->
        
            <div class="testimonial-one-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__top">
                            <div class="section-title text-center">
                                
                                <h2 class="section-title__title" style="color: white;">Latest Products</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__bottom">
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <!-- <div class="testimonial-one__single"> -->
                                        <div class="testimonial-one__content">
                                           
                                            <a href="product-details2.php"><img src="./assets/images/product/bf(2).jpeg" alt="" height="500px" style="width: 400px;"></a>
                                            <p style="color: white; font-size: 40px;">Mycorrhiza Biofertilizers</p>
                                        </div>
                                        
                                    <!-- </div> -->
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <!-- <div class="testimonial-one__single"> -->
                                        <div class="testimonial-one__content">
                                        <a href="product-details3.php"><img src="./assets/images/product/bf(3).jpeg" alt=""  height="500px" style="width: 400px;"></a>
                                        <p style="color: white; font-size: 40px;    ">Vasara Neem Cake Powder </p>
                                        <!-- </div> -->
                                        
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <!-- <div class="testimonial-one__single"> -->
                                        <div class="testimonial-one__content">
                                        <a href="product-details4.php"><img src="./assets/images/product/bf(4).jpeg" alt="" height="500px" style="width: 400px;"></a>
                                        <p style="color: white; font-size: 40px;    ">Natures Plus Vermi Compost</p>
                                        <!-- </div> -->
                                    
                                        
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <!-- <div class="testimonial-one__single"> -->
                                        <div class="testimonial-one__content">
                                        <a href="product-details.php"><img src="./assets/images/shop/shop-product-1-1.jpg" alt=""/></a>
                                        <p style="color: white; font-size: 40px;    ">Lavender seeds </p>
                                        <!-- </div> -->
                                        
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                        <img src="./assets/images/offer/img5.jpg" alt=""/>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <img src="./assets/images/offer/img6.jpeg" alt=""/>  
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        <!--Testimonial One End-->
        </section>
        <!--Unbeatable One End-->

    
        <!--Project One Start-->
        
        <section class="project-one">
          
            <div class="project-one__bg float-bob-y-2" id="fcategory"
                style="background-image: url(assets/images/shapes/project-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    
                    <h2 class="section-title__title">Select Category</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="./assets/images/category/cat1.jpg" alt="" height="300px">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="product.php"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    
                                    <h3 class="project-one__title"><a href="product.php">Biofertilizers</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="./assets/images/category/cat2.jpg" alt="" height="300px">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="product.php"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    
                                    <h3 class="project-one__title"><a href="product.php">Seasonal<br>Seeds</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="./assets/images/category/cat3.jpg" alt="" height="300px">
                                   
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project.php"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    
                                    <h3 class="project-one__title"><a href="project.php">Tools and<br>Equipments</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="./assets/images/category/cat4.jpg" alt="" height="300px">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project.php"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    
                                    <h3 class="project-one__title"><a href="project.php">Chemical <br> Fertilizers</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                </div>
            </div>
        </section>
        <!--Project One End-->


        <!--Healthy Food One Start-->
        
        <!--Healthy Food One End-->

       

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url(assets/images/shapes/counter-one-shape-3.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__inner" >
                            <ul class="list-unstyled counter-one__list" style="align-content: center;text-align: center;justify-content: center;">
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-seeds"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="25" data-speed="20">00</h3>
                                        <p class="counter-one__text">Agriculture Products</p>
                                    </div>
                                </li>
                               
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-customer"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="10" data-speed="2">00</h3>
                                        <p class="counter-one__text">satisfied customers</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-farmer"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="10" data-speed="5">00</h3>
                                        <p class="counter-one__text">Experts </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Call One Start-->
        
        <!--Call One End-->

        
        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact Now</span>
                                <h2 class="section-title__title">Get in touch now</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="contact-one__text">Whatever support you're looking for, we can help you.</p>
                            <ul class="list-unstyled contact-one__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="content">
                                        <p>Have Question?</p>
                                        <h4><a href="tel:918588858823">Free +91 85888 58823</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="content">
                                        <p>Write Email</p>
                                        <h4><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker"></span>
                                    </div>
                                    <div class="content">
                                        <p>Visit Now</p>
                                        <h4>St Xavier's college, Ahmedabad</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-one__right">
                            <div class="contact-one__bg float-bob-x"
                                style="background-image: url(assets/images/shapes/contact-one-shape-1.png);"></div>
                            <div class="row">
                                <div class="contact-one__form-box">
                                    <form action="" class="contact-one__form contact-one-validated" method="POST">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="contact-one__input-box">
                                                    <input type="text" name="name" value="<?php echo $name ?>">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-one__input-box text-message-box">
                                                    <textarea name="review" placeholder="Write a Message"></textarea>
                                                </div>
                                                <div class="contact-one__btn-box">
                                                <button class="w-10 btn btn-primary" type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        
        
        <?php include './include/footer.html'; ?>