<?php include './include/header.html'; ?><br>
        <h2 style="font-family: 'Times New Roman';text-align: center;">PROFILE SETTING</h2><br>
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-one__left" style="text-align: center; color: black;">
                    <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Broken image" style="width: 250px;border-radius: 50%;height: 300px;"><br> <span><b style="text-align: center;">Amelly</b></span><br>
                    <span><b style="text-align: center; ">amelly@gmail.com</b></span>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-one__right">
                    <div class="contact-one__bg float-bob-x" style="background-image: url(assets/images/shapes/contact-one-shape-1.png);"></div>
                    <div class="row">
                        <div class="contact-one__form-box">
                            <form action="assets/inc/sendemail.php" class="contact-one__form contact-one-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="First Name" name="fname">
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Last Name" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Number" name="number">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Address" name="address">
                                        </div>
                                      </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="password" placeholder="Old Password" name="o_password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="password" placeholder="New Password" name="n_password">
                                        </div>
                                    </div>
                                <div class="row">
                                    
                                        <div class="contact-one__btn-box">
                                            <a href="#" class="thm-btn contact-one__btn">Save Profile
                                                <i class="icon-right-arrow"></i> </a>
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
<?php include './include/footer.html'; ?>