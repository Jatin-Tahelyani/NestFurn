<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }
    </style>
</head>

<body>
    <?php
    include("AdminHeader.php");
    ?>
    <br> <br> <br> 
    <div class="container">
        <h1 class="text-center">Offers</h1>
        <br>

        <form id="productForm" method="post" action="" enctype="multipart/form-data">
           
            <div class="mb-3">
                <label for="offerCode" class="form-label">Offer code</label>
                <input type="text" class="form-control" style="background-color: #fff; border: .5px solid #dee2e6;" id="offerCode" name="offerCode" require>
            </div>
            <div class="mb-3">
                <label for="maximumPrice" class="form-label">Minimum price</label>
                <input type="number" class="form-control" id="maximumPrice" name="maximumPrice" require>
            </div>
            <div class="mb-3">
                <label for="offPercentage" class="form-label">OFF percentage</label>
                <input type="number" class="form-control" id="offPercentage" name="offPercentage" require>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Offer status</label>
                <select name="status" class="form-control">
                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="AddBTN">Add Offer</button>
        </form>
        <?php
            if(isset($_POST['AddBTN'])){
                $offerCode = $_POST['offerCode'];
                $maximumPrice = $_POST['maximumPrice'];
                $offPercentage = $_POST['offPercentage'];
                $status = $_POST['status'];
                
                $ins = "INSERT INTO `offers`(`offer_code`, `minimum_price`, `off_percentage`, `offer_status`) VALUES ('$offerCode',$maximumPrice,$offPercentage,'$status')";

                $run = mysqli_query($con,$ins);

                if($run){
                    echo "<script>alert('Offer added')</script>";
                }

            }
        ?>
        <br> 
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Sr no.</th>
                    <th>Offer code</th>
                    <th>Minimum price</th>
                    <th>OFF percentage</th>
                    <th>Offer status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $select = "select * from offers";
                    $run = mysqli_query($con,$select);
                    while($row = $run->fetch_assoc()){
                ?>
                <tr>
                    <td><?=$row['sr_no']?></td>
                    <td><?=$row['offer_code']?></td>
                    <td><?=$row['minimum_price']?></td>
                    <td><?=$row['off_percentage']?>%</td>
                    <td class="statusLabel"><?=$row['offer_status']?></td>
                    <td>
                        <!-- <a href="offer_edit.php"><button class="btn btn-primary">Edit</button> </a> -->
                        <form action="offer_edit.php" method="post">
                            <input type="hidden" name="sr_no" value="<?= $row['sr_no']?>">
                            <input type="submit" style="width: 120px;" value="Edit" name="sub" class="btn btn-primary">
                        </form> <br>
                        <form action="" method="post">
                            <input type="hidden" name="sr_no" value="<?= $row['sr_no']?>">
                            <input type="submit" value="Remove" name="remove" class="btn btn-primary">
                        </form>
                    </td>
                </tr>
                <?php
                    }

                    if(isset($_POST['remove'])){
                        $id = $_POST['sr_no'];
                        $del = "delete from offers where sr_no = $id";
                        $run2 = mysqli_query($con,$del);
                        if($run2){
                            echo "<script>alert('Offer removed')</script>";
                            echo "<script>window.location.href = 'offers.php'</script>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script>
        $(document).ready(function() {
            $('#productForm').validate({
                rules: {
                    offerCode: {
                        required: true,
                        minlength: 1
                    },
                    maximumPrice: {
                        required: true,
                        min: 1,
                        minlength: 1,
                        number: true
                    },
                    offPercentage: {
                        required: true,
                        min: 1,
                        number: true,
                        max: 99
                    },
                    status: {
                        required: true
                    }
                },
                messages: {
                    offerCode: {
                        required: "Please enter a offer code",
                        minlength: "length must be greater than 1"
                    },
                    maximumPrice: {
                        required: "Please enter the minimum price.",
                        min: "Enter a positive number",
                        minlength: "price must be greater than 1",
                        number: "minimum price must be a number"
                    },
                    offPercentage: {
                        required: "Please enter the off percentage.",
                        min: "Enter a positive number",
                        number: "Please enter a valid number(don't add % sign).",
                        max: "You have to enter less than 100"
                    },
                    status: {
                        required: "please select a status"
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
</html>
