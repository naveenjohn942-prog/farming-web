<?php include './include/header.html';
include './include/connection.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Shop</li>
                    </ul>
                    <h2>Our Products</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Start-->
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="product__sidebar">
                            <!-- <div class="shop-search product__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                </form>
                            </div> -->
                            <!-- <div class="product__price-ranger product__sidebar-single">
                                <h3 class="product__sidebar-title">Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div> -->
                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li class="active" id="flower-seeds"><a>Flower seeds</a></li>
                                    <li id="seasonal-seeds"><a>Seasonal Seeds</a></li>
                                    <li id="tools"><a>Tool and Equipment</a></li>
                                    <li id="bio-fertilizer"><a>Bio Fertilizer</a></li>
                                    <li id="chemical-fertilizer"><a>Chemical Fertilizers</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="product__items">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__showing-result">
                                        <div class="product__showing-text-box">
                                            <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                                        </div>
                                        <!-- <div class="product__showing-sort">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Sort by popular">Sort by popular</option>
                                                    <option value="1">Sort by popular</option>
                                                    <option value="2">Sort by Price</option>
                                                    <option value="3">Sort by Ratings</option>
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="product__all">
                                <div class="row">
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 flower-seeds">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img" >
                                                    <img src="assets/images/shop/cart-page-img-1.jpg" alt="" height="307">
                                                    <span class="product__all-sale">Sale</span>
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Rajnigandha Bulb</a></h4>
                                                <p class="product__all-price">&#x20b9;25.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 flower-seeds">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-1.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Lavinder</a></h4>
                                                <p class="product__all-price">&#x20b9;35.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 flower-seeds">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-3.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a
                                                        href="product-details.php">Lotus</a></h4>
                                                <p class="product__all-price">&#x20b9;20.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 seasonal-seeds">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-4.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Bhendi</a></h4>
                                                <p class="product__all-price">&#x20b9;30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 seasonal-seeds">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-5.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a
                                                        href="product-details.php">White Bitter Gourd</a></h4>
                                                <p class="product__all-price">&#x20b9;30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 seasonal-seeds">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-6.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Spinach</a>
                                                </h4>
                                                <p class="product__all-price">&#x20b9;30.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-7.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Bio Decomposer</a></h4>
                                                <p class="product__all-price">&#x20b9;2500.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-8.jpg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a
                                                        href="product-details.php">Potassium Mobilizing</a></h4>
                                                <p class="product__all-price">&#x20b9;200.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-2.jpg" alt="" height="307">
                                                    <span class="product__all-sale">Sale</span>
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Zinc Solubilising</a></h4>
                                                <p class="product__all-price">&#x20b9;200.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img" >
                                                    <img src="assets/images/product/bf(1).jpeg" alt="" height="307">
                                                    <span class="product__all-sale">Sale</span>
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Mustard Cake Powder </a></h4>
                                                <p class="product__all-price">&#x20b9;Rs200.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/product/bf(2).jpeg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Mycorrhiza Biofertilizers</a></h4>
                                                <p class="product__all-price">&#x20b9;Rs250.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/product/bf(3).jpeg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a
                                                        href="product-details.php">Vasara Neem Cake Powder</a></h4>
                                                <p class="product__all-price">&#x20b9;Rs200.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/product/bf(10).jpeg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a
                                                        href="product-details.php">Natures Plus Vermi Compost</a></h4>
                                                <p class="product__all-price">&#x20b9;Rs280.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/product/bf(4).jpeg" alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <!-- <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> -->
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.php">Azofix - Liquid 1 Litre</a></h4>
                                                <p class="product__all-price">&#x20b9;Rs665.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 bio-fertilizer">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/product/bf(5).jpeg"  alt="" height="307">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a
                                                        href="product-details.php">SPIC MOB-K</a></h4>
                                                <p class="product__all-price">&#x20b9;Rs235.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product End-->


    <script>
        jQuery(document).ready(function($){
	
        
        jQuery("#flower-seeds").click(function(){
            console.log("hELlo");
            jQuery(".flower-seeds").css("display", "block");
            jQuery(".seasonal-seeds").css("display", "none");
            jQuery(".bio-fertilizer").css("display", "none");
            jQuery(".chemical-fertilizer").css("display", "none");
            jQuery(".tools").css("display", "none");
        });
        jQuery("#seasonal-seeds").click(function(){
            console.log("hELlo");
            jQuery(".seasonal-seeds").css("display", "block");
            jQuery(".flower-seeds").css("display", "none");
            jQuery(".bio-fertilizer").css("display", "none");
            jQuery(".chemical-fertilizer").css("display", "none");
            jQuery(".tools").css("display", "none");
        });
        jQuery("#bio-fertilizer").click(function(){
            console.log("hELlo");
            jQuery(".bio-fertilizer").css("display", "block");
            jQuery(".flower-seeds").css("display", "none");
            jQuery(".seasonal-seeds").css("display", "none");
            jQuery(".chemical-fertilizer").css("display", "none");
            jQuery(".tools").css("display", "none");
        });
        jQuery("#chemical-fertilizer").click(function(){
            console.log("hELlo");
            jQuery(".chemical-fertilizer").css("display", "block");
            jQuery(".flower-seeds").css("display", "none");
            jQuery(".seasonal-seeds").css("display", "none");
            jQuery(".bio-fertilizer").css("display", "none");
            jQuery(".tools").css("display", "none");
        });
        jQuery("#tools").click(function(){
            console.log("hELlo");
            jQuery(".tools").css("display", "block");
            jQuery(".flower-seeds").css("display", "none");
            jQuery(".seasonal-seeds").css("display", "none");
            jQuery(".bio-fertilizer").css("display", "none");
            jQuery(".chemical-fertilizer").css("display", "none");
        });

});
    </script>

<?php include './include/footer.html'; ?>
  