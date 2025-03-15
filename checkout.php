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
	<title>NestFurn</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<?php include("header.php") ?>
	<!-- End Header/Navigation -->


	<!-- Start Hero Section -->
	<div class="hero p-0">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Checkout</h1>
					</div>
				</div>
				<!-- <div class="col-lg-7">

				</div> -->
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<div class="nestfurn_co-section p-0">
		<div class="container">

		<div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Billing Details</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <form id="checkoutForm" action="thankyou.php" method="post">
                        <div class="form-group">
                            <label for="c_country" class="text-black">State <span class="text-danger">*</span></label>
                            <select id="c_country" name="c_country" class="form-control" required>
                                <option value="">Select a State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_companyname" class="text-black">Company Name </label>
                                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_state_country" name="c_state_country" required>
                            </div>
                            <div class="col-md-6">
                                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="c_email_address" name="c_email_address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Order Notes</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control mb-5" placeholder="Write your notes here..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                            <div class="input-group w-75 couponcode-wrap">
                                <input type="text" class="form-control me-2" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-black btn-sm" type="button" id="button-addon2">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Your Order</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <table class="table site-block-order-table mb-5">
                                <thead>
                                    <th>Product</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Stylish Sofa <strong class="mx-2">x</strong> 1</td>
                                        <td>₹250.00</td>
                                    </tr>
                                    <tr>
                                        <td>Nordic chair <strong class="mx-2">x</strong> 1</td>
                                        <td>₹100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                        <td class="text-black">₹350.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                        <td class="text-black font-weight-bold"><strong>₹350.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Payment option's</p>
                            <div class="border p-3 mb-5">
                                <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Razorpay</a></h3>
                                <div class="collapse" id="collapsepaypal">
                                    <div class="py-2">
                                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer Section -->
    <?php include("footer.php") ?>
    <!-- End Footer Section -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $("#checkoutForm").validate({
                rules: {
                    c_country: "required",
                    c_fname: "required",
                    c_lname: "required",
                    c_address: "required",
                    c_state_country: "required",
                    c_postal_zip: "required",
                    c_email_address: {
                        required: true,
                        email: true
                    },
                    c_phone: "required"
                },
                messages: {
                    c_country: "Please select your State",
                    c_fname: "Please enter your first name",
                    c_lname: "Please enter your last name",
                    c_address: "Please enter your address",
                    c_state_country: "Please enter your state",
                    c_postal_zip: "Please enter your postal or zip code",
                    c_email_address: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    c_phone: "Please enter your phone number"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
</html>