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
        .modal-p {
            position: fixed;
            left: 0;
            top: 50px;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .modal-content-ed {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            height: 80%;
            width: 80%;
            border-radius: 50px;
            border: none;
            padding: 20px;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .pro {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
    </style>
</head>

<body>

    <?php include("signedin-header.php") ?>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="modal-p">
                        <form class="modal-content-ed" id="changePasswordForm" action="signed-in.php" method="post">
                            <div class="container-s d-flex align-items-center justify-content-center">
                                <div class="user-card">
                                    <img src="images/person_3.jpg" alt="Profile Picture">
                                    <div class="username">
                                        <h2>root</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="edit row d-flex justify-content-center">
                                <h3 class="text-center">Change Password</h3>
                                <div class="container-r" style="position: relative;bottom: 60px;">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-black" for="oldPassword">Old Password</label>
                                                <input type="password" class="form-control" id="oldPassword" name="oldPassword" style="background-color: white; border: 1px solid #ced4da;">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-black" for="newPassword">New Password</label>
                                                <input type="password" class="form-control" id="newPassword" name="newPassword" style="background-color: white; border: 1px solid #ced4da;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
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
            $("#changePasswordForm").validate({
                rules: {
                    oldPassword: {
                        required: true,
                        minlength: 6
                    },
                    newPassword: {
                        required: true,
                        minlength: 8,
                        pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/
                    }
                },
                messages: {
                    oldPassword: {
                        required: "Old password is required",
                        minlength: "Password must be at least 6 characters long"
                    },
                    newPassword: {
                        required: "New password is required",
                        minlength: "Password must be at least 8 characters long",
                        pattern: "Password must contain at least 1 uppercase letter, 1 lowercase letter, and 1 digit"
                    }
                },
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                }
            });
        });
    </script>

</body>

</html>