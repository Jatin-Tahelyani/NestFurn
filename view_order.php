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
    include('AdminHeader.php');
    ?>

    <!-- Start Product Section -->
    <div class="container-p">
        <div class="product-img">
            <img src="images/sofa.png" alt="sofa">
        </div>
        <div class="product-info">
            <h1>Sofa</h1>
            <p class="price">₹499.99</p>
            <div class="rv">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="rating"></p>
            </div>
            <p class="desc">Add:
                 aarya nagar, bajrang chowk, view road Ahmedabad
            </p>
            <p class="desc">
                 Not coupon code apply
            </p>
            <p class="desc">
                 Customer name : John Raval
            </p>
            <p class="desc">
                Payment done at 12-12-24 5:29 PM
            </p>
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