<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/font-awesome.min.css">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <script src="/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/font-my.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>NestFurn</title>
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <!-- Start Product Section -->
    <div class="container-p">
        <div class="product-img">
            <img src="images/product-3.png" alt="sofa">
        </div>
        <div class="product-info">
            <h1>Ergonomic Chair</h1>
            <p class="price">₹499.99</p>
            <div class="rv">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="rating">4.5 (125 reviews)</p>
            </div>
            <p class="desc">Upgrade your workspace with our Ergonomic Office Chair, designed for maximum comfort, posture support, and productivity. Whether you’re working from home or in the office, this chair provides the perfect balance of style and functionality.</p>
            <div class="product-action">
                <button id="minus" class="minus">-</button>
                <span id="qty" class="qty">1</span>
                <button id="plus" class="plus">+</button>
                <button class="bt" onclick = "window.location.href='checkout.php';">Buy now</button>
                <button class="bt" onclick = "window.location.href='cart.php';">Add to cart</button>
            </div>
        </div>
    </div>

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>At NestFurn, we blend style, quality, and affordability to create furniture that transforms your space. Enjoy premium craftsmanship, fast delivery, and a seamless shopping experience — because your home deserves the best!</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Fast &amp; Free Shipping</h3>
                                <p>Get your furniture delivered quickly, at no extra cost.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>A seamless online shopping experience from browsing to checkout.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Our team is always here to assist you, anytime, anywhere.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>Not satisfied? Return it easily, no questions asked.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/img-grid-1.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <h1 class="text-center rev">Reviews</h1>
    <div class="reviews">
        <div class="r1">
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <span class="t1 text-center">Perfect Blend of Comfort & Style!</span>
            <span class="t2 text-left">I recently purchased an ergonomic chair from NestFurn, and I’m beyond satisfied! The chair is super comfortable, provides great back support, and the quality is top-notch. Perfect for my home office! Highly recommend. <br> <br>
                Thank you Nestfurn - I would recommend this excellent company to anyone considering purchasing a furniture. <br> <br>
                — Aarav Patel, Ahmedabad</span>
        </div>
        <div class="r1">
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
            <span class="t1 text-center">Amazing Quality & Fast Delivery!</span>
            <span class="t2 text-left">I ordered a wooden dining table set, and it exceeded my expectations. The craftsmanship is excellent, and it arrived well-packaged without any damage. Will definitely shop from NestFurn again! <br> <br>
                We were informed of delivery date, and when the shed arrived on time, the driver rolled the pallet into position. <br> <br>
                — Riya Mehta, Surat</span>
        </div>
        <div class="r1">
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
            <span class="t1 text-center">Stylish Furniture at Great Prices!</span>
            <span class="t2 text-left">What I appreciate most about NestFurn is their attention to detail and customer satisfaction. The ordering process was smooth, and the product arrived in pristine condition.
                <br> <br>The table was easy to assemble, and I was impressed with the overall quality at such a reasonable price. If you’re looking for furniture that combines style with durability, NestFurn is definitely the place to shop! <br> <br>
                — Karan Desai, Vadodara</span>
        </div>
        <div class="r1">
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <span class="t1 text-center">Durable & Worth Every Penny!</span>
            <span class="t2 text-left">What impressed me the most was the overall value for money. The price was reasonable for the premium quality I received, and the customer service was fantastic. They guided me through the selection process and kept me updated on delivery. After using this bed for a few weeks, I can confidently say that NestFurn delivers on its promise of durability and style.
                <br> <br>I will be returning for more furniture soon! <br> <br>
                — Aarav Patel, Ahmedabad</span>
        </div>
    </div>

    <div class="find text-center">
        <h1>Find More Like This</h1>
    </div>

    <div class="nestfurn_co-section product-section before-footer-section">
        <div class="container">
            <div class="row justify-content-end">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">₹50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-1.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">₹50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-2.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">₹78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">₹43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->


                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">₹50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-1.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">₹50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-2.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">₹78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="product.php">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">₹43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>

</html>