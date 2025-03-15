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
	<?php include("signedin-header.php") ?>
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
			<div class="row g-2 d-lg-flex d-md-block">

				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">₹1000 - ₹2000</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">₹2000 - ₹3000</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">₹3000 - ₹4000</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">₹4000 - ₹5000</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">₹5000 - ₹6000</button> </div>

				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Sofas</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Chairs</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Tables</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Beds</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Storage</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Dining</button> </div>
				<div class="col-6 col-md-4 col-lg-auto"> <button type="button" class="bt w-100">Outdoor</button> </div>
				<div class="col-6 col-md-4 col-lg-auto search">
					<form action="index.php" method="GET">
						<input type="text" placeholder="  Search Products..." name="search" class="search-box">
					</form>
				</div>
				<div class="col-12 col-md-6 col-lg-auto">
					<select name="filter" id="filter" class="pr">
						<option value="">Filter by Price</option>
						<option value="low to high">Low to High</option>
						<option value="high to low">High to Low</option>
					</select>
				</div>

			</div>
		</form>
	</div>

	<div class="nestfurn_co-section product-section before-footer-section">
		<div class="container">
			<div class="row justify-content-end">

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹1800</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹3200</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">₹2500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<strong class="product-price">₹4500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->


				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹5000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹3000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">₹3500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<strong class="product-price">₹6000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹2000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹3000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">₹5500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<strong class="product-price">₹1500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹2200</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹5100</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">₹4000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<strong class="product-price">₹3000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹4000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹6000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">₹4600</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<strong class="product-price">₹1000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<!-- Start Column 1 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹1500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">₹4000</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">₹3500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="signedin-product.php">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<strong class="product-price">₹4500</strong>

						<span class="icon-cross" onclick="document.getElementById('id01').style.display='block'">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 4 -->

			</div>
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