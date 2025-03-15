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
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <style>
        .container-si {
            padding: 50px;

        }

        .container-si h2 {
            color: black;
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .container-si input {
            border-radius: 10px;
            margin-bottom: 1px;
        }

        .container-si input[type="checkbox"] {
            margin-right: 10px;
            margin-top: 20px;
        }

    </style>
</head>

<body>

    <?php include("header.php") ?>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <form class="modal-content-r" id="registerForm" action="signed-in.php" method="post">
                    <div class="container-r" style="position: relative;bottom: 60px;">
                        <h1 style="position: relative;top:40px;">Sign in</h1>
                        <hr style="visibility: hidden;">
                        <form class="con-form" id="contactForm" method="post">
                            <div class="form-group">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    style="background-color: white; border: 1px solid #ced4da;">
                            </div>
                            <div class="form-group mb-5">
                                <label class="text-black" for="pswd">Password</label>
                                <input name="pswd" class="form-control" id="pswd">
                            </div>
                        </form>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label> <br>

                        <a href="forgot.php" class="forgot" style="text-decoration: none;">Forgot Password?</a> <br>
                        <p class="forgot">Don't have an Acoount - <a href="register.php" style="text-decoration: underline;" class="forgot">Create one</a></p> <br>

                        <div class="clearfix-r" style="position: relative;bottom: 60px;">
                            <button type="submit" class="regbtn bton" name="btn">Sign in</button>
                            <a href="index.php" class="cancelregbtn bton text-center" style="text-decoration: none;">Cancel</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <?php include("footer.php") ?>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>

</body>

<?php
if (isset($_POST["btn"])) {
    $email = $_POST['email'];
    $password = $_POST['psw'];

    if ($email == "root@a" || $password == "root@123") {
?>
        <script>
            alert("You are signed in successfully");
        </script>
<?php
    }
}
?>

</html>

<script>
    $(document).ready(function() {
        $("#signInForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                psw: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                psw: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                }
            }
        });

        $("#registerForm").validate({
            rules: {
                fname: "required",
                lname: "required",
                email: {
                    required: true,
                    email: true
                },
                pswd: {
                    required: true,
                    minlength: 6
                },
                rpswd: {
                    required: true,
                    equalTo: "#pswd"
                }
            },
            messages: {
                fname: "Please enter your first name",
                lname: "Please enter your last name",
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                pswd: {
                    required: "Please provide a password" + "<br>",
                    minlength: "Your password must be at least 6 characters long"
                },
                rpswd: {
                    required: "Please repeat your password",
                    equalTo: "Passwords do not match"
                }
            }
        });
    });
</script>
