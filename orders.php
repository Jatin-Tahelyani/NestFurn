<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NestFurn - Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    
<?php
        include("AdminHeader.php");
    ?>  <br><br> <br>
    <h1 class="text-center my-4 fw-bolder dark">Orders List</h1>
    <div class="conatiner">
        <table class="table container">
            <thead>
              <tr>
                <th scope="col">Sr no</th>
                <th scope="col">Order Item</th>
                <th scope="col">Order Name</th>
                <th scope="col">Order Price</th>
                <th scope="col">Order Date</th>
                <th scope="col">Delivered Date</th>
                <th scope="col">Payment Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php
                // $ins = "INSERT INTO `orders`(`order_image`, `order_name`, `order_price`, `order_date`, `delivered_date`, `payment_type`) VALUES ('Sofa_img','Sofa',450,NOW(),NOW(),'Razor Pay')";
                $select = "select * from orders";
                $run = mysqli_query($con,$select);

                while($row = $run->fetch_assoc()){

                
                    ?>
                    <tr class="tr">
                      <td class="fs-4" style="position: relative;top:32px"><?=$row['sr_no']?></td>
                      <th scope="row" style="width: 270px;"><img src="images/sarah-dorweiler-x2Tmfd1-SgA-unsplash.jpg" alt="Error" style="width: 120px;"></th>
                      <td class="fs-4" style="position: relative;top:32px"><?=$row['order_name']?></td>
                      <td class="fs-4" style="position: relative;top:32px"><?=$row['order_price']?></td>
                      <td class="fs-4" style="position: relative;top:32px"><?=$row['order_date']?></td>
                      <td class="fs-4" style="position: relative;top:32px"><?=$row['delivered_date']?></td>
                      <td class="fs-4" style="position: relative;top:32px"><?=$row['payment_type']?></td>
                      <td class="fs-4" style="position: relative;top:32px">
                        <a href="view_order.php"><button class="btn-success">View</button></a>
                        <button class="btn-danger ord">Cancel order</button>

                    </td>
                    </tr>
                    <?php
                
                }
                
              ?>
              
            </tbody>
          </table>
    </div>

</body>
<script>
    document.querySelectorAll(".ord").forEach((order) => {
        order.addEventListener("click", () => {
            
                order.classList.remove("btn-danger");
                order.classList.add("btn-success");
                order.innerHTML = "Order cancelled";
                order.closest("tr").style.opacity = "0.3";
                count = false;
            
        });
    });
</script>
</html>