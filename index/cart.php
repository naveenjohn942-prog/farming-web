<?php include './include/header.html'; ?>

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
                    <h2>Cart</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Cart Page-->
        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="assets/images/product/bf(7).jpeg" alt="">
                                        </div>
                                        <h3><a href="product-details.php">Bee NPK</a></h3>
                                    </div>
                                </td>
                                <td id="Price">&#8377;230.00</td>
                                <td>
                                    <div class="quantity-box">
                                        <button type="button" class="sub" onclick="quantity_value()"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="product-1" value="1" onchange="quantity_value(this.value)" />
                                        <button type="button" class="add" onclick="quantity_value()"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td id="total-1">
                                    &#8377;230.00
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="icon-close remove-icon"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="assets/images/product/bf(1).jpeg" alt="">
                                        </div>
                                        <h3><a href="product-details.php">Mustard Cake Powder</a></h3>
                                    </div>
                                </td>
                                <td id="price-2">&#8377;200.00</td>
                                <td>
                                    <div class="quantity-box">
                                        <button type="button" class="sub" onclick="quantity_value()"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="product-2" value="1" onchange="quantity_value(this.value)" />
                                        <button type="button" class="add" onclick="quantity_value()"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td id="total-2">
                                    &#8377;200.00
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="icon-close remove-icon"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <!-- <div class="col-xl-8 col-lg-7">
                        <form action="#" class="default-form cart-cupon__form">
                            <input type="text" placeholder="Enter Coupon Code" class="cart-cupon__input">
                            <button class="thm-btn" type="submit">
                                <span>Apply Coupon</span> <i class="icon-right-arrow"></i>
                            </button>
                        </form>
                    </div> -->
                    <div class="col-xl-12 col-lg-9">
                        <ul class="cart-total list-unstyled">
                            <li>
                                <span>Subtotal</span>
                                <span>&#8377;430.00</span>
                            </li>
                            <li>
                                <span>Shipping Cost</span>
                                <span>&#8377;0.00 </span>
                            </li>
                            <li>
                                <span>Total</span>
                                <span class="cart-total-amount">&#8377;430</span>
                            </li>
                        </ul>
                        <div class="cart-page__buttons">
                            
                            <div class="cart-page__buttons-2">
                                <a href="checkout.php" class="thm-btn">Checkout <i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cart Page-->



    <script>
        var price = document.getElementById('Price').innerText;
        price = price.slice(1);
        console.log(price);
        function quantity_value(val) {

            var quantity1 = document.getElementById('product-1').value;
            var quantity2 = document.getElementById('product-2').value;
            
            // console.log(quantity);
            var total1 = price * quantity1;
            var total2 = price * quantity2;
            document.getElementById('total-1').innerText = "$"+total1;
            document.getElementById('total-2').innerText = "$"+total2;

            
        }
      </script>  
        <?php include './include/footer.html'; ?>