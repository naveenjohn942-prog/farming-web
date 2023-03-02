<?php include './include/header.php';
include './include/connection_session.php'; ?>

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
                                    <li  id="flower-seeds"><a>Flower seeds</a></li>
                                    <li> <a href="#seasonal-seeds">Seasonal Seeds</a></li>
                                    <li> <a href="#tools-equipments">Tool and Equipment</a></li>
                                    <li> <a href="#bio-fertilizers">Bio Fertilizer</a></li>
                                    <li> <a href="#chemical-fertilizers">Chemical Fertilizers</a></li>
                                    
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
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="product__all">
                                <div class="row">
                                    
                                    <?php
                                    $sqla="SELECT * FROM `tbl_product` WHERE c_id=1";
                                    $resulta=mysqli_query($conn,$sqla);
                                    if($resulta){
                                        while($rowa=mysqli_fetch_assoc($resulta)){
                                            $name=$rowa['product_name'];
                                            $price=$rowa['price'];
                                            $image=$rowa['p_image'];
                                      
                                            echo '<div class="col-xl-4 col-lg-4 col-md-6 flower-seeds" id="flower-seeds">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img" >
                                                        <img src="product/'.$image.'" alt="" height="307">
                                                        ';?>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.php?id=<?php echo $rowa["product_id"]; ?>"><i class="icon-shopping-cart"></i></a>
                                                        </div><?php 
                                                        echo '
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
                                                    <h4 class="product__all-title"><a href="product-details.php">'.$name.'</a></h4>
                                                    <p class="product__all-price">'.$price.'</p>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }

                                ?>
                                </div>
                                <div class="row" id="tools-equipments">

                                 <?php
                                    $sqla="SELECT * FROM `tbl_product` WHERE c_id=2";
                                    $resulta=mysqli_query($conn,$sqla);
                                    if($resulta){
                                        while($rowa=mysqli_fetch_assoc($resulta)){
                                            $name=$rowa['product_name'];
                                            $price=$rowa['price'];
                                            $image=$rowa['p_image'];
                                      
                                            echo '<div class="col-xl-4 col-lg-4 col-md-6 flower-seeds" id="">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img" >
                                                        <img src="product/'.$image.'" alt="" height="307">
                                                        ';?>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.php?id=<?php echo $rowa["product_id"]; ?>"><i class="icon-shopping-cart"></i></a>
                                                        </div><?php 
                                                        echo '
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
                                                    <h4 class="product__all-title"><a href="product-details.php">'.$name.'</a></h4>
                                                    <p class="product__all-price">'.$price.'</p>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }

                                ?>
                                </div>
                                <div class="row" id="bio-fertilizers">
                                 <?php
                                    $sqla="SELECT * FROM `tbl_product` WHERE c_id=3";
                                    $resulta=mysqli_query($conn,$sqla);
                                    if($resulta){
                                        while($rowa=mysqli_fetch_assoc($resulta)){
                                            $name=$rowa['product_name'];
                                            $price=$rowa['price'];
                                            $image=$rowa['p_image'];
                                      
                                            echo '<div class="col-xl-4 col-lg-4 col-md-6 flower-seeds" id="tools">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img" >
                                                        <img src="product/'.$image.'" alt="" height="307">
                                                        ';?>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.php?id=<?php echo $rowa["product_id"]; ?>"><i class="icon-shopping-cart"></i></a>
                                                        </div><?php 
                                                        echo '
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
                                                    <h4 class="product__all-title"><a href="product-details.php">'.$name.'</a></h4>
                                                    <p class="product__all-price">'.$price.'</p>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }

                                ?>
                                </div>
                                <div class="row" id="chemical-fertilizers">
                                 <?php
                                    $sqla="SELECT * FROM `tbl_product` WHERE c_id=4";
                                    $resulta=mysqli_query($conn,$sqla);
                                    if($resulta){
                                        while($rowa=mysqli_fetch_assoc($resulta)){
                                            $name=$rowa['product_name'];
                                            $price=$rowa['price'];
                                            $image=$rowa['p_image'];
                                      
                                            echo '<div class="col-xl-4 col-lg-4 col-md-6 flower-seeds" id="bio-fertilizers">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img" >
                                                        <img src="product/'.$image.'" alt="" height="307">
                                                        ';?>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.php?id=<?php echo $rowa["product_id"]; ?>"><i class="icon-shopping-cart"></i></a>
                                                        </div><?php 
                                                        echo '
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
                                                    <h4 class="product__all-title"><a href="product-details.php">'.$name.'</a></h4>
                                                    <p class="product__all-price">'.$price.'</p>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }

                                ?>
                                </div>
                                <div class="row" id="seasonal-seeds">
                                 <?php
                                    $sqla="SELECT * FROM `tbl_product` WHERE c_id=5";
                                    $resulta=mysqli_query($conn,$sqla);
                                    if($resulta){
                                        while($rowa=mysqli_fetch_assoc($resulta)){
                                            $name=$rowa['product_name'];
                                            $price=$rowa['price'];
                                            $image=$rowa['p_image'];
                                      
                                            echo '<div class="col-xl-4 col-lg-4 col-md-6 flower-seeds" id="chemical-fertilizers">
                                            <div class="product__all-single">
                                                <div class="product__all-img-box">
                                                    <div class="product__all-img" >
                                                        <img src="product/'.$image.'" alt="" height="307">
                                                        ?>';?>
                                                        <div class="product__all-img-icon">
                                                            <a href="cart.php?id=<?php echo $rowa['product_id']; ?>"><i class="icon-shopping-cart"></i></a>
                                                        </div><?php
                                                        echo '
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
                                                    <h4 class="product__all-title"><a href="product-details.php">'.$name.'</a></h4>
                                                    <p class="product__all-price">'.$price.'</p>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }

                                ?>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
  