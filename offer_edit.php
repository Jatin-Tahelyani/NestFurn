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
    <?php
        if(isset($_POST['sub'])){
            $id = $_POST['sr_no'];
            $select = "select * from offers where sr_no = $id";
            $res = mysqli_query($con,$select);
            $row = $res->fetch_assoc();
        }
    ?>
    <div class="container mt-5">
        <h2 class="mb-4">Offer Edit</h2>
        <form id="productForm" method="post" action="">
            <div class="mb-3">
                <label for="offerCode" class="form-label">Offer code</label>
                <input type="text" value="<?=$row['offer_code']?>" class="form-control" style="background-color: #fff;border: .5px solid #dee2e6;" id="offerCode" name="offerCode">
                <input type="hidden" value="<?=$id?>" name="id">
            </div>
            <div class="mb-3">
                <label for="offerMaximum" class="form-label">Offer maximum</label>
                <!-- Corrected the id and name -->
                <input type="text" value="<?=$row['minimum_price']?>" class="form-control" style="background-color: #fff; border: .5px solid #dee2e6;" id="offerMaximum" name="offerMaximum">
            </div>
            <div class="mb-3">
                <label for="offerPercentage" class="form-label">Offer percentage</label>
                <input type="text" value="<?=$row['off_percentage']?>%" class="form-control" id="offerPercentage" style="background-color: #fff; border: .5px solid #dee2e6;" name="offerPercentage">
            </div>
            <div class="mb-3">
                <label for="offerStatus" class="form-label">Offer status</label> <br>
                <select name="status" class="form-control">
                    <option value="active" <?php
                        if($row['offer_status'] == "active"){
                            echo "selected";
                        }
                    ?>>active</option>
                    <option value="inactive" <?php
                        if($row['offer_status'] == "inactive"){
                            echo "selected";
                        }
                    ?>>inactive</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" name="btn" value="Save changes" />
        </form>
        
    <br> <br>
       
    </div>

    <?php
        if(isset($_POST['btn'])){
            $id = $_POST['id'];
            $offer_code = $_POST['offerCode'];
            $offer_maximum = $_POST['offerMaximum'];
            $offer_percentage = str_replace('%', '', $_POST['offerPercentage']);
            $status = $_POST['status'];


            $update = "UPDATE offers 
            SET offer_code = '$offer_code', 
            minimum_price = $offer_maximum, 
            off_percentage = $offer_percentage, 
            offer_status = '$status' 
            WHERE sr_no = $id;";

            $run = mysqli_query($con,$update);

            echo "<script>window.location.href = 'offers.php'</script>";
        }
    ?>

    <!-- Form Validation Script -->
    <script>
        $(document).ready(function () {
            $('#productForm').validate({
                rules: {
                    offerCode: {
                        required: true,
                    },
                    offerMaximum: {
                        required: true,
                        min: 1
                    },
                    offerPercentage: {
                        required: true,
                        min: 1,
                        max: 99
                    }
                },
                messages: {
                    offerCode: {
                        required: "Please enter offer code",
                    },
                    offerMaximum: {
                        required: "Please enter the maximum offer",
                        min: "Price must be greater than 0"
                    },
                    offerPercentage: {
                        required: "Please enter the offer percentage.",
                        min: "off percentage must be greater than 0",
                        max: "off percentage must be less than 100"
                    }
                },
                errorElement: 'div',
                errorPlacement: function (error, element) {
                    error.addClass('text-danger');
                    error.insertAfter(element);
                }
            });
        });
    
    </script>
</body>

</html>
