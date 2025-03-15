<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nestfurn</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>

    <!-- Font & Styles -->
    <link rel="stylesheet" href="font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="font-my.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery & jQuery Validate Plugin -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

    <style>

        .modal-f {
            position: fixed;
            left: 0;
            top: 50px;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .error {
            color: red;
            font-size: 14px;
        }

        .otp-section {
            display: none;
        }
    </style>
</head>

<body>

    <?php include("header.php") ?>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="modal-f">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        
                        <form class="modal-content" id="emailForm" action="forgot.php" method="post">
                            <div class="container-s align-items-center justify-content-center">
                                <h1>Forgot Password</h1>
                                <hr>

                                <label for="f-email">Enter E-mail</label>
                                <input type="email" name="f-email" id="f-email" style="color: black;" class="email" required>
                                
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" id="getOtpBtn" class="btn btn-default mt-3">Get OTP</button>
                                    </div>
                                </div>

                                <div class="otp-section">
                                    <label for="otp">Enter OTP</label>
                                    <input type="number" name="otp" class="password" id="otp" style="color: black;" disabled>

                                    <label for="opswd">Enter New Password</label>
                                    <input type="text" name="opswd" class="password" id="opswd" style="color: black;" disabled>

                                    <div class="row">
                                        <div class="col text-center">
                                            <button type="submit" class="btn btn-default mt-3" name="s-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $(document).ready(function () {

            $(".otp-section").hide();

            $("#getOtpBtn").click(function () {
                var email = $("#f-email").val();
                
                if (email === "") {
                    alert("Please enter your email first.");
                    return;
                }

                if ($("#emailForm").valid()) {
                    alert("OTP Sent! Please check your email.");

                    $(".otp-section").slideDown();
                    $("#otp, #opswd").prop("disabled", false);
                }
            });

            $("#emailForm").validate({
                rules: {
                    "f-email": {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    "f-email": {
                        required: "Please enter your email",
                        email: "Enter a valid email address"
                    }
                }
            });

            $("#emailForm").on("submit", function (e) {
                if ($(".otp-section").is(":visible")) {
					
					if ($("#otp").val()!=1234) {
                        alert("Error! Invalid OTP");
                        e.preventDefault();
                        return;
                    }

                    if ($("#otp").val().length < 4 || $("#otp").val().length > 6) {
                        alert("OTP must be between 4 and 6 digits.");
                        e.preventDefault();
                        return;
                    }
				
                    if ($("#opswd").val().length < 6) {
                        alert("Password must be at least 6 characters.");
                        e.preventDefault();
                        return;
                    }
                }
            });
        });
    </script>

</body>
</html>