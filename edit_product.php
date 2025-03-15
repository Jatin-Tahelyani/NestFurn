<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>
    <?php include("AdminHeader.php"); 
      if(isset($_POST['EditProduct'])){
          
          $id = $_POST['sr_no'];
          $select = "select * from products where sr_no = $id;";
          $run = mysqli_query($con,$select);
          $row = $run->fetch_assoc();
          $file = $row['Product_Image'];
      }
       
    ?>
    <br><br>
    <div class="container">
        <h2 class="mb-4 text-center">Edit Product</h2>
        <form id="productForm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id;?>">
            
            <input type="hidden" name="imgName" value="<?= $file?>">

            <div class="mb-3">
                <label for="productIMG" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="productIMG" name="productIMG">
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" value="<?=$row['Product_Name']?>" style="background-color: #fff;border: .5px solid #dee2e6;"  class="form-control" id="productName" name="productName">
            </div>
            <div class="mb-3">
                <label for="productPrice" minlength="5" class="form-label">Product Price</label>
                <input type="number" value="<?=$row['Product_Price']?>" class="form-control" id="productPrice" name="productPrice">
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Product Category</label>
                <input type="text" value="<?=$row['Product_Category']?>" class="form-control" id="productCategory" name="productCategory">
            </div>
            <div class="mb-3">
            <label for="productStatus" class="form-label">Product status</label>
                <select name="status" class="form-control">
                    <option value="active" <?php
                    if($row['status'] == "active"){
                        echo "selected";
                    }
                    ?>>active</option>
                    <option value="inactive" <?php
                    if($row['status'] == "inactive"){
                        echo "selected";
                    }
                    ?>>inactive</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" name="AddBTN" value="Save changes" >
        </form>
    </div>
    <?php
         

    if(isset($_POST['AddBTN'])){
        
        $id=$_POST['id'];
        $productIMG = $_FILES['productIMG']['name'];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productCategory = $_POST['productCategory'];
        $status = $_POST['status'];

        if($productIMG == ""){
            $h = $_POST['imgName'];
            $file = $h;
        } else {

            if($_FILES['productIMG']['type'] == "image/jpeg" or $_FILES['productIMG']['type'] == "image/png" or $_FILES['productIMG']['type'] == "image/webp"){

                if(!is_dir("product_imgs")){
                    mkdir("product_imgs");
                }
                
                $file = uniqid() . $_FILES['productIMG']['name'];

                if (move_uploaded_file($_FILES['productIMG']['tmp_name'], "product_imgs/" . $file)) {
                    
                } else {
                    echo "<script>alert('Error in File uploading')</script>";
                }
            }

        }

        $update = "UPDATE products 
        SET Product_Image = '$file', 
            Product_Name = '$productName', 
            Product_Price = $productPrice, 
            Product_Category = '$productCategory',
            status = '$status' 
        WHERE sr_no = $id;";


        $run2 = mysqli_query($con,$update);
        
        echo "<script>window.location.href = 'products_manage.php'</script>";
    }

    ?>
    <script>
        $(document).ready(function() {
            $('#productForm').validate({
                rules: {
                    productName: {
                        required: true,
                        minlength: 3
                    },
                    productPrice: {
                        required: true,
                        number: true,
                        min: 1
                    },
                    productCategory: {
                        required: true
                    }
                },
                messages: {
                    productName: {
                        required: "Please enter the product name.",
                        minlength: "Product name must be at least 3 characters long."
                    },
                    productPrice: {
                        required: "Please enter the product price.",
                        number: "Please enter a valid number.",
                        min: "Price must be at least 1."
                    },
                    productCategory: {
                        required: "You have to enter product category"
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
