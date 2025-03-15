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
  <link rel="stylesheet" href="css/contact.css">
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/additional-methods.js"></script>    
  <title>NestFurn</title>
</head>

<body>

  <!-- Start Header/Navigation -->
  <?php include("header.php") ?>
  <!-- End Header/Navigation -->


  <!-- Start Hero Section -->
  <div class="hero-con">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <!-- <h1 class="tag-con">Get in Touch with Us</h1> -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->


  <!-- Start Contact Form -->
  <h1 class="tag-con text-center">Get in Touch with Us</h1>
    <div class="nestfurn_co-section">
        <div class="container">
            <div class="block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 pb-4">
                        <form class="con-form" id="contactForm" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">First name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" style="background-color: white; border: 1px solid;">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Last name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" style="background-color: white; border: 1px solid;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group mb-5">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- End Contact Form -->

  <script>
        $(document).ready(function() {
            $('#contactForm').validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 2,
                        maxlength: 50,
                        lettersonly: true
                    },
                    lname: {
                        required: true,
                        minlength: 2,
                        maxlength: 50,
                        lettersonly: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: false ,
                        minlength: 10
                    }
                },
                messages: {
                    fname: {
                        required: "First name is required.",
                        minlength: "First name should be at least 2 characters long.",
                        maxlength: "First name should not exceed 50 characters.",
                        lettersonly: "First name should only contain letters."
                    },
                    lname: {
                        required: "Last name is required.",
                        minlength: "Last name should be at least 2 characters long.",
                        maxlength: "Last name should not exceed 50 characters.",
                        lettersonly: "Last name should only contain letters."
                    },
                    email: {
                        required: "Email is required.",
                        email: "Please enter a valid email address."
                    },
                    message: {
                        required: "Message is required.",
                        minlength: "Message should be at least 10 characters long."
                    }
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                }
            });
        });
    </script>

  <!-- Start Footer Section -->
  <?php include("footer.php") ?>
  <!-- End Footer Section -->


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>