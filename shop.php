<?php
	$con = mysqli_connect("localhost","root","","nestfurn");
	$select = "select * from category";
	$run = mysqli_query($con,$select);

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="nestfurn.co">
	<link rel="shortcut icon" href="interior.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/shop.css">
	<title>NestFurn</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<?php include("header.php") ?>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero" style="background-image: url('images/dada_design-o5GiFSl5iYw-unsplash.jpeg');">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<p class="head">Find your Perspective</p>
						<p class="mb-4 tagline">Your one-stop destination for stylish, high-quality, and affordable furniture. Whether you’re looking for modern, classic, or contemporary pieces, we have something to match every taste and space. Browse our wide collection and transform your home today!</p>
						<p class="mb-4 tagline-h">Your one-stop destination for stylish, high-quality, and affordable furniture. Whether you’re looking for modern, classic, or contemporary pieces, we have something to match every taste and space.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="width: 100%; height: 10px; background-color: #dfdfd6;" class="b-line"></div>
	<!-- End Hero Section -->

	<!-- Filter Dropdown HTML -->

	<div id="filterDropdown" class="container mt-3">
		<form>
			<div class="scroll-container">
				<div class="row g-2 d-flex flex-nowrap">
					<!-- <div class="col-auto"> <button type="button" class="bt">₹5000 - ₹10000</button> </div>
					<div class="col-auto"> <button type="button" class="bt">₹10000 - ₹15000</button> </div>
					<div class="col-auto"> <button type="button" class="bt">₹15000 - ₹20000</button> </div>
					<div class="col-auto"> <button type="button" class="bt">₹20000 - ₹25000</button> </div>
					<div class="col-auto"> <button type="button" class="bt">₹25000 - ₹30000</button> </div> -->
					<?php
						while($row = $run->fetch_assoc()){
							?>
							<div class="col-auto"> <button type="button" class="bt" style="width: 150px;"><?php echo $row['c_name']?></button> </div>
							<?php
						}
					?>
					<!-- <div class="col-auto"> <button type="button" class="bt" style="width: 150px;">Chairs</button> </div>
					<div class="col-auto"> <button type="button" class="bt" style="width: 150px;">Tables</button> </div>
					<div class="col-auto"> <button type="button" class="bt" style="width: 150px;">Beds</button> </div>
					<div class="col-auto"> <button type="button" class="bt" style="width: 150px;">Storage</button> </div>
					<div class="col-auto"> <button type="button" class="bt" style="width: 150px;">Dining</button> </div>
					<div class="col-auto"> <button type="button" class="bt" style="width: 150px;">Outdoor</button> </div> -->


				</div>
			</div>
			<!-- Filter Dropdown -->
			<div class="search-filter-btn">
				<div class="col-auto">
					<select name="filter" id="filter" class="pr">
						<option value="">Filter by Price</option>
						<option value="low to high">Low to High</option>
						<option value="high to low">High to Low</option>
					</select>
				</div>
				<!-- Search Bar -->
				<div class="search-container">
					<form action="shop.php">
						<input type="text" placeholder="Search Products..." name="search" class="search-box">
						<button type="submit" class="search-icon">
							<img src="images/search.svg" alt="Search">
						</button>
					</form>
				</div>

				<!-- Mobile Search Bar -->
				<div class="search-mobile d-md-none">
					<form action="shop.php">
						<input type="text" placeholder="   Search NestFurn..." name="search" class="search-box-m">
						<button type="submit" class="search-icn">
							<img src="images/search.svg" alt="Search">
						</button>
					</form>
				</div>
			</div>
		</form>
	</div>

	<div class="nestfurn_co-section product-section before-footer-section">
		<div class="container">
			<div class="row justify-content-end">

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_1.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ella Leatherette 3 Seater Sofa</h3>
						<strong class="product-price">₹20,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_2.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Elvis Velvet 3 Seater Sofa</h3>
						<strong class="product-price">₹24,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_3.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Optimus Velvet Sofa cum bed</h3>
						<strong class="product-price">₹39,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_4.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Vive Fabric 3 Seater Sofa</h3>
						<strong class="product-price">₹10,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->


				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_11.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Allen Engineered Wood Queen Bed</h3>
						<strong class="product-price">₹8,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_12.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Pico Solid Wood Queen Bed</h3>
						<strong class="product-price">₹14,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_13.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Bordo Solid Wood Queen Bed</h3>
						<strong class="product-price">₹12,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_14.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Dualo Upholstered Study Chair</h3>
						<strong class="product-price">₹5,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_15.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Gaming Chair - Pro</h3>
						<strong class="product-price">₹10,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_16.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Outdoor Folding Chair</h3>
						<strong class="product-price">₹2,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_17.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Fly Mid Back Office Chair</h3>
						<strong class="product-price">₹7,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_18.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Wood Nested Center Table</h3>
						<strong class="product-price">₹17,499</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_19.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Pico Solid Wood 6 Seater Dining Table</h3>
						<strong class="product-price">₹14,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_20.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kasagi Solid Wood Center Table</h3>
						<strong class="product-price">₹10,499</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_21.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nauka Solid Wood Center Table</h3>
						<strong class="product-price">₹7,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_22.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Hako Solid Wood Bedside Table</h3>
						<strong class="product-price">₹4,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_23.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Bianca Engineered Wood 2 Door Wardrobe</h3>
						<strong class="product-price">₹14,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_24.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Bianca Engineered Wood 3 Door Wardrobe</h3>
						<strong class="product-price">₹26,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_25.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Bianca Engineered Wood Chest of Drawer</h3>
						<strong class="product-price">₹10,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_26.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Lana Engineered Wood 2 Door Wardrobe</h3>
						<strong class="product-price">₹16,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_27.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Pico Solid Wood 4 Seater Dining Set</h3>
						<strong class="product-price">₹22,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_28.webp" class="img-fluid product-thumbnail">
						<h3 class="product-title">Mili Solid Wood 4 Seater Dining Set</h3>
						<strong class="product-price">₹15,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_29.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kayra Solid Wood 4 Seater Dining</h3>
						<strong class="product-price">₹28,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="product.php">
						<img src="images/plp_30.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">DRIP 2 Seater Dining Set</h3>
						<strong class="product-price">₹15,999</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->


			</div>
		</div>



		<!-- Start Footer Section -->
		<?php include("footer.php") ?>
		<!-- End Footer Section -->

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
</body>

</html>