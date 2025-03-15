<?php
$con = mysqli_connect("localhost", "root", "", "nestfurn_admin");
$select = "select * from products";
$run = mysqli_query($con, $select);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>

<body class="bg-light">
    <?php include("AdminHeader.php"); ?>
    <br> <br> <br>

    <div class="container mt-5">
        <h2 class="mb-4">Product Management</h2>
        <form id="productForm" method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="productIMG" class="form-label">Product Image</label>
                <input type="file" class="form-control" style="background-color: #fff;" id="productIMG" name="productIMG">
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <!-- Corrected the id and name -->
                <input type="text" class="form-control" style="background-color: #fff; border: .5px solid #dee2e6;" id="productName" name="productName">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice">
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Product category</label>
                <input type="text" class="form-control" id="productCategory" name="productCategory">
            </div>
            <div class="mb-3">
            <label for="productStatus" class="form-label">Product status</label>
                <select name="status" class="form-control">
                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="AddProductBtn">Add Product</button>
        </form>
        <br> <br>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="productTable">
                <?php
                if (isset($_POST['AddProductBtn'])) {
                    
                    if ($_FILES['productIMG']['name'] == "") {
                    ?>
                        <span style="color: red;">Please Select a file to upload</span>
                    <?php
                    } else {
                        if($_FILES['productIMG']['type'] == "image/jpeg" or $_FILES['productIMG']['type'] == "image/png" or $_FILES['productIMG']['type'] == "image/webp"){

                            if(!is_dir("product_imgs")){
                                mkdir("product_imgs");
                            }
                            
                            $file = uniqid() . $_FILES['productIMG']['name'];

                            if (move_uploaded_file($_FILES['productIMG']['tmp_name'], "product_imgs/" . $file)) {
                                
                                // echo "<script>alert('File uploaded')</script>";
                            } else {
                                echo "<script>alert('Error in File uploading')</script>";
                            }
                        } else {
                            echo "<script>alert('please select jpg/png image')</script>";
                        }
                    }
                }
                while ($row = $run->fetch_assoc()) {

                    ?>
                    <tr>
                        </form>
                        <td class="fs-5" name="sr_no"><?= $row['sr_no'] ?></td>
                        <td style="width: 330px;"><img src="product_imgs/<?= $row['Product_Image'] ?>" alt="Error" style="width: 200px;"></td>
                        <td class="fs-5" name="Product_Name"><?= $row['Product_Name'] ?></td>
                        <td class="fs-5"><?= $row['Product_Price'] ?></td>
                        <td class="fs-5"><?= $row['Product_Category'] ?></td>
                        <td class="fs-5 status"><?= $row['status'] ?></td>
                        <td>
                            <form action="" method="post">
                                <input type="submit" class="btn btn-danger my-2 stock-btn" style="background-color: red;" value="Remove" name="RemoveBTN"></input><br>

                                <input type="hidden" name="sr_no" value="<?=$row['sr_no']?>">
                            </form>
                                
                            <form action="edit_product.php" method="post">
                                <input type="hidden" name="sr_no" value="<?=$row['sr_no']?>">
                                
                                <input type="submit" value="Edit Product" class="btn btn-info my-2" style="background-color: green;" name="EditProduct" href="edit_product.php">
                            </form>

                            <form action="view_product.php" method="post">
                                <input type="hidden" name="pname" value="<?=$row['Product_Name']?>">
                                <input type="submit" value="View Product" class="btn btn-info my-2" style="background-color: blue;" name="ViewProduct" href="view_product.php">
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
    if (isset($_POST['AddProductBtn'])) {
        $pname = $_POST['productName'];
        $pprice = $_POST['productPrice'];
        $pcategory = $_POST['productCategory'];
        $pstatus = $_POST['status'];

        $ins = "INSERT INTO `products`(`Product_Image`, `Product_Name`, `Product_Price`,`Product_Category`,`status`) VALUES ('$file','$pname',$pprice,'$pcategory','$pstatus')";

        $run2 = mysqli_query($con,$ins);
        if($run2){
            echo "<script>alert('Product added')</script>";
            echo "<script>window.location.href = 'products_manage.php'</script>";
        }
    }
    
    if(isset($_POST['RemoveBTN'])){
        $id = $_POST['sr_no'];
        $del = "DELETE FROM products WHERE sr_no = $id";
        $run3 = mysqli_query($con,$del);
        echo "<script>window.location.href = 'products_manage.php'</script>";

    }
    ?>

    <!-- Form Validation Script -->
    <script>
        $(document).ready(function() {
            $('#productForm').validate({
                rules: {
                    productIMG: {
                        required: true,
                        extension: "jpg|jpeg|png|gif|webp"
                    },
                    productName: {
                        required: true,
                        minlength: 3
                    },
                    productPrice: {
                        required: true,
                        number: true,
                        min: 1
                    }
                },
                messages: {
                    productIMG: {
                        required: "Please upload a product image.",
                        extension: "Allowed file types: jpg, jpeg, png, gif."
                    },
                    productName: {
                        required: "Please enter the product name.",
                        minlength: "Product name must be at least 3 characters long."
                    },
                    productPrice: {
                        required: "Please enter the product price.",
                        number: "Please enter a valid number.",
                        min: "Price must be at least 1."
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('text-danger');
                    error.insertAfter(element);
                }
            });
        });
        
        let status = document.querySelector(".status");

        if(status.innerHTML == "inactive"){
            status.closest('tr').style.opacity = 0.4;
        }
    </script>
</body>

</html>