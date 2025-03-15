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
    if(isset($_POST['ViewProduct'])){
        $id = $_POST['pname'];
        
        $select = "select * from products where Product_Name = '$id'";
        $run = mysqli_query($con,$select);
        $row = $run->fetch_assoc();
    }
    ?>

    <!-- Start Product Section -->
    <div class="container-p">
        <div class="product-img">
            <img src="product_imgs/<?=$row['Product_Image']?>" alt="Product_Image" style="width: 320px;height: 350px;">
        </div>
        <div class="product-info">
            <h1><?=$row['Product_Name']?></h1>
            <p class="price">Price : <?=$row['Product_Price']?></p>
            <div class="rv">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="rating">4.5 (125 reviews)</p>
            </div>
            <p class="desc">Upgrade your workspace with our Ergonomic Office Chair, designed for maximum comfort, posture support, and productivity. Whether you’re working from home or in the office, this chair provides the perfect balance of style and functionality.</p>
            
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