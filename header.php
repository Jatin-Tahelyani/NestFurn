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
                    <li><a class="nav-link" href="index.php">Home</a></li>
                    <li><a class="nav-link" href="shop.php">Shop</a></li>
                    <li><a class="nav-link" href="about.php">About us</a></li>
                    <li><a class="nav-link" href="blog.php">Blog</a></li>
                    <li><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="guest-cart.php"><img src="images/cart.svg" class="svg"></a></li>
                    <li><a class="nav-link" href="signin.php"><img src="images/reshot-icon-user-7ZXA3QERGV.svg" class="svg"></a></li>
                </ul>

                <!-- <button type="button" class="search-icn" id="search-toggle-btn" onclick="toggleSearchBar()">
                    <i class="fa-solid fa-magnifying-glass" src="images/search.svg"></i>
                </button> -->

                <div id="search-bar" class="search-container" style="display: none;">
                    <form action="index.php">
                        <input type="text" placeholder="Search Nestfurn..." name="search" class="search-box">
                        <button type="submit" class="search-icn"><i class="fa fa-search" src="images/search.svg"></i></button>
                    </form>
                </div>

            </div>
        </div>

    </nav>

    <div id="id01" class="modal-e">
        <span onclick="document.getElementById('id01').style.display='none'" class="close-e"
            title="Close Modal">&times;</span>
        <form class="modal-content-e" id="signInForm" action="signed-in.php" method="post">
            <div class="container-s d-flex align-items-center justify-content-center">
                <div class="user-card">
                    <img src="images/user-svgrepo-com.svg" alt="Profile Picture">
                    <div class="username"><h4>root</h4></div>
                    <a class="btn" href="edit-profile.php">Edit Profile</a>
                </div>
            </div>
            <div class="text-center"><a class="logout-btn mb-5 w-100" style="border-radius: 100px; text-decoration: none; position: relative; bottom: 20px;" href="index.php">Logout</a></div>
        </form>
    </div>

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
    if (isset($_POST["edit-btn"])) {
        $newUsername = $_POST['newUsername'];
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];

        if ($newUsername || $oldPassword || $newPassword) {
    ?>
            <script>
                alert("Profile updated successfully");
            </script>
    <?php
        }
        else{
            ?>
            <script>
                alert("Please fill in all the fields");
            </script>
            <?php
        }
    }
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>

    <!-- </body> -->

    <script>
        function updateProfile() {
            const newUsername = document.getElementById('newUsername').value;
            if (newUsername) {
                document.querySelector('.username').innerText = newUsername;
            }
            document.getElementById('editModal').style.display = 'none';
        }

        $(document).ready(function() {
            // Validate Sign In Form
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

            // Validate Register Form
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

        $(document).ready(function() {
            $("#editProfileForm").validate({
                rules: {
                    newUsername: {
                        required: true,
                        minlength: 2
                    },
                    oldPassword: {
                        required: true,
                        minlength: 6
                    },
                    newPassword: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    newUsername: {
                        required: "Please enter your new username",
                        minlength: "Your username must be at least 2 characters long"
                    },
                    oldPassword: {
                        required: "Please enter your old password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    newPassword: {
                        required: "Please enter your new password",
                        minlength: "Your password must be at least 6 characters long"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>

</html>