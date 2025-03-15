<?php

$con = mysqli_connect("localhost", "root", "", "nestfurn_admin");
$select = "SELECT * FROM carousel ORDER BY sr_no ASC";
$run = mysqli_query($con, $select);
$rowCount = mysqli_num_rows($run); // Get current row count

$sr = 1;

// Assign sr_no dynamically (1, 2, or 3)
$used_sr = [];
while ($row = mysqli_fetch_assoc($run)) {
    $used_sr[] = $row['sr_no'];
}

// Find the next available sr_no
for ($i = 1; $i <= 3; $i++) {
    if (!in_array($i, $used_sr)) {
        $sr = $i;
        break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>

<body class="bg-light">
    <?php include("AdminHeader.php"); ?>
    <br><br><br>

    <div class="container mt-5">
        <h2 class="mb-4">Carousel Image Management</h2>

        <form id="productForm" method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="carouseIMG" class="form-label">Carousel Image</label>
                <input type="file" class="form-control" style="background-color: #fff;" id="carouseIMG" name="carouseIMG">
            </div>

            <button type="submit" class="btn btn-primary" name="addIMG">Add Image</button>
        </form>

        <br><br>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col" style="width: 150px;">Sr No.</th>
                    <th scope="col" style="width: 750px;">Carousel Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $run = mysqli_query($con, $select);
                while ($row = mysqli_fetch_assoc($run)) {
                ?>
                    <tr>
                        <td class="fs-5"><?= $row['sr_no'] ?></td>
                        <td style="width: 330px;">
                            <img src="carousel/<?= $row['carousel_image'] ?>" alt="Error" style="width: 300px;">
                        </td>
                        <td class="fs-5">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $row['sr_no'] ?>">
                                <input type="hidden" name="image_name" value="<?= $row['carousel_image'] ?>">
                                <input type="submit" class="btn btn-danger my-2" value="Remove" name="remove">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    if (isset($_POST['addIMG'])) {
        if ($rowCount >= 3) {
            echo "<script>alert('Image limit reached! You must delete an image before adding a new one.');</script>";
        } else {
            if ($_FILES['carouseIMG']['name'] == "") {
                echo "<script>alert('Please select a file to upload');</script>";
            } else {
                $fileType = $_FILES['carouseIMG']['type'];
                if ($fileType == "image/jpeg" || $fileType == "image/png" || $fileType == "image/webp") {

                    if (!is_dir("carousel")) {
                        mkdir("carousel");
                    }

                    $file = uniqid() . $_FILES['carouseIMG']['name'];
                    if (move_uploaded_file($_FILES['carouseIMG']['tmp_name'], "carousel/" . $file)) {
                        // Insert image with dynamically assigned sr_no
                        $ins = "INSERT INTO carousel (sr_no, carousel_image) VALUES ($sr, '$file')";
                        mysqli_query($con, $ins);
                        echo "<script>window.location.href = 'carousel_manage.php';</script>";
                    } else {
                        echo "<script>alert('Error in File uploading');</script>";
                    }
                } else {
                    echo "<script>alert('Please select a valid image (jpg/png/webp)');</script>";
                }
            }
        }
    }

    if (isset($_POST['remove'])) {
        $id = $_POST['id'];
        $image_name = $_POST['image_name'];

        // Delete the image file
        if (file_exists("carousel/" . $image_name)) {
            unlink("carousel/" . $image_name);
        }

        // Delete the database entry
        $del = "DELETE FROM carousel WHERE sr_no = $id";
        mysqli_query($con, $del);

        echo "<script>window.location.href = 'carousel_manage.php';</script>";
    }
    ?>

    <script>
        $(document).ready(function() {
            $('#productForm').validate({
                rules: {
                    carouseIMG: {
                        required: true,
                        extension: "jpg|jpeg|png|gif|webp"
                    }
                },
                messages: {
                    carouseIMG: {
                        required: "Please upload a carousel image.",
                        extension: "Allowed file types: jpg, jpeg, png, gif, webp."
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('text-danger');
                    error.insertAfter(element);
                }
            });
        });
    </script>
</body>

</html>
