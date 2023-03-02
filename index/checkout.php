
<?php 
include './include/header.html';
include './include/connection.php'; 

     if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $apart_name = $_POST['apart_name'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $form_zip = $_POST['form_zip'];
            $farmer_no = $_POST['farm_no'];
            $email = $_POST['email'];
            $phoneno = $_POST['phoneno'];
            

            $insert_query = " INSERT INTO tbl_product(product_name, product_type, price, quantity, p_image, p_description, p_status) 
            VALUES ('$pname','$ptype','$price','$quant','$image','$p_desc', 'ACTIVE')";

            $res = mysqli_query($conn, $insert_query);
            if($res){
               ?> 
               <script>
                alert("Data inserted");
                </script>
                <?php
            }else{
                ?>
                <script>
                alert("Data not inserted");
                </script>
                <?php
                }
                
            }
?>
  

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
                    <h2>Checkout</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Checkout Page-->
        <section class="checkout-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="billing_details">
                            <div class="billing_title">
                                
                                <h2 align="center">Billing Details</h2>
                            </div>
                            <form class="billing_details_form">
                                
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="fname" value="" placeholder="First Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="lname" value="" placeholder="Last Name"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <input type="text" name="address" value="" placeholder="Address">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input name="email" type="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="tel" name="phoneno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                required="" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>


                    
                </div>
                <div class="your_order">
                    <h2>Your Order</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="order_table_box">
                                <table class="order_table_detail">
                                    <thead class="order_table_head">
                                        <tr>
                                            <th>Product</th>
                                            <th class="right">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pro__title">Product Name</td>
                                            <td class="pro__price">&#8377;100.00 </td>
                                        </tr>
                                        <tr>
                                            <td class="pro__title">Subtotal</td>
                                            <td class="pro__price">&#8377;100.00 </td>
                                        </tr>
                                        <tr>
                                            <td class="pro__title">Shipping</td>
                                            <td class="pro__price">&#8377;0.00 </td>
                                        </tr>
                                        <tr>
                                            <td class="pro__title">Total</td>
                                            <td class="pro__price">&#8377;200.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="checkout__payment">
                                <div class="checkout__payment__item checkout__payment__item--active">
                                    <h3 class="checkout__payment__title">Cash on delivery</h3>
                                    <div class="checkout__payment__content">
                                        Make your payment when the order arrives at your door step.
                                    </div><!-- /.checkout__payment__content -->
                                </div><!-- /.checkout__payment__item -->
                                <div class="checkout__payment__item">
                                    <h3 class="checkout__payment__title">UPI payment </h3>
                                    <div class="checkout__payment__content">
                                        Make your payment directly into our bank account.
                                    </div><!-- /.checkout__payment__content -->
                                </div><!-- /.checkout__payment__item -->
                            </div><!-- /.checkout__payment -->
                            <div class="text-right d-flex justify-content-end">
                                <a href="https://pmny.in/prd0VoQ0r1R4" class="thm-btn">Place your order <i
                                        class="icon-right-arrow"></i></a>
                            </div><!-- /.text-right -->

                        </div><!-- /.col-lg-6 -->
                    </div>
                </div>
            </div>
        </section>
        <!--End Checkout Page-->

        <?php include './include/footer.html'; ?>