<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="shortcut icon" href="interior.png" type="image/x-icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="font-my.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/additional-methods.js"></script>
</head>

<body>

	<nav class="custom-navbar navbar navbar navbar-expand-md" arial-label="NestFurn navigation bar" id="navbarNav">

		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="images/Group 1.png" alt="NestFurn logo"></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsNestFurn"
				aria-controls="navbarsNestFurn" aria-expanded="false" aria-label="Toggle navigation">
				<span><img src="images/icons8-menu.svg" alt="" class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsNestFurn">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li><a class="nav-link" href="signed-in.php">Home</a></li>
					<li><a class="nav-link" href="signedin-shop.php">Shop</a></li>
					<li><a class="nav-link" href="about.php">About us</a></li>
					<li><a class="nav-link" href="blog.php">Blog</a></li>
					<li><a class="nav-link" href="contact.php">Contact us</a></li>
				</ul>

				<!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="signin.php"><img src="images/reshot-icon-user-7ZXA3QERGV.svg" class="svg"></a></li>
					<li><a class="nav-link" href="cart.php"><img src="images/cart.svg" class="svg"></a></li>
				</ul> -->

				<div class="d-flex align-items-center cart-user">
					<a class="nav-link" href="cart.php"><img src="images/cart.svg" class="svg"></a>
					<div class="dropdown-center">
						<a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="images/person_3.jpg" alt="Profile" class="rounded-circle" width="30" height="30">
						</a>
						<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
							<li>
								<a class="dropdown-item" href="edit-profile.php">
									<i class="fas fa-user-edit me-2"></i>Edit Profile
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="edit-password.php">
									<i class="fas fa-key me-2"></i>Change Password
								</a>
							</li>
							<!-- <li>
								<hr class="dropdown-divider">
							</li> -->
							<li>
								<a class="dropdown-item" href="index.php">
									<i class="fas fa-sign-out-alt me-2"></i>Logout
								</a>
							</li>
						</ul>
					</div>
				</div>

				<!-- <button type="button" class="search-icn" id="search-toggle-btn" onclick="toggleSearchBar()">
					<i class="fa-solid fa-magnifying-glass" src="images/search.svg"></i>
				</button> -->

				<!-- <div id="search-bar" class="search-container" style="display: none;">
					<form action="index.php">
						<input type="text" placeholder="Search Nestfurn..." name="search" class="search-box">
						<button type="submit" class="search-icn"><i class="fa fa-search" src="/images/search.svg"></i></button>
					</form>
				</div> -->

			</div>
		</div>

	</nav>

	</html>