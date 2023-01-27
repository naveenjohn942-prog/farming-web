<?php include './include/header.html'; ?>
        <!--Page Header End-->

        <!--Google Map Start-->
        
        <!--Google Map End-->

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="contact-two__shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-two-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Write a Message</span>
                    <h2 class="section-title__title">Always here to help you</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="contact-two__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-two__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" name="Phone Number">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <!-- <input type="text" placeholder="Query Type" name="Subject"> -->
                                    
                                        <select name="Subject" id="Subject">
                                            <option value="" disabled selected>Query Type</option>
                                            <option value="Flower seeds">Flower seeds</option>
                                            <option value="Seasonal seeds">Seasonal seeds</option>
                                            <option value="Tool and Equipment">Tool and Equipment</option>
                                            <option value="Bio Fertilizer">Bio Fertilizer</option>
                                            <option value="Chemical Fertilizers">Chemical Fertilizers</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write your Query"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <a href="about.html" class="thm-btn contact-two__btn">Submit Query<i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Contact Two End-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__top">
                            <div class="section-title text-center">
                                <span class="section-title__tagline">Our Experts</span>
                                <h2 class="section-title__title">What They’re taking about</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__bottom">
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
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
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text"><b>Question:</b> Lorem ipsum is simply free text dolor sit
                                                amet, consect notted  <br>
                                                <b>Answer:</b>eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                                <p class="testimonial-one__client-sub-title">2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text"><b>Question:</b>Lorem ipsum is simply free text dolor sit
                                                amet, consect notted <br>
                                                <b>Answer:</b>adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                                <p class="testimonial-one__client-sub-title">2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text"><b>Question:</b>Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing<br>
                                                <b>Answer:</b> elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Aleesha Brown</h4>
                                                <p class="testimonial-one__client-sub-title">2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text"><b>Question:</b>Lorem ipsum is simply free text dolor sit
                                                amet, consect notted <br>
                                                <b>Answer:</b>adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Mike Hardson</h4>
                                                <p class="testimonial-one__client-sub-title">2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text"><b>Question:</b>Lorem ipsum is simply free text dolor sit
                                                amet, consect notted<br>
                                                <b>Answer:</b> adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-5.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Jolie Michale</h4>
                                                <p class="testimonial-one__client-sub-title">2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text"><b>Question:</b>Lorem ipsum is simply free text dolor sit
                                                amet, consect notted<br>
                                                <b>Answer:</b> adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-6.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">David Smith</h4>
                                                <p class="testimonial-one__client-sub-title">2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-1.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="expert_reply.html">What is the main purpose of crop rotation?</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-2.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="expert_reply.html
                                    ">What are some common pests and diseases that affect crop growth?</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-3.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="expert_reply.html">What is the difference between conventional and organic farming?</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-4.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="expert_reply.html">What are the benefits of sustainable agriculture?</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-5.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="expert_reply.html">What are the importance of irrigation in agriculture?</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-6.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="expert_reply.html">What is the difference between monoculture and polyculture?</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <?php include './include/footer.html'; ?>