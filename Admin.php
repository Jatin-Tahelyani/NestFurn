<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NestFurn - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
   
    <?php
        include("AdminHeader.php");
    ?> 
    <br> <br> <br>
    <div class="container">
        <h2 class="text-center my-3 font-weight-bold">Dashboard</h2>

        <div class="row mt-2">
            <div class="col-md-6 my-4">
                <div class="card text-center p-3 bg-warning">
                    <div class="card-body">
                        <h3>Total Orders</h3>
                        <p class="fs-4 fw-bold text-primary" id="orders">0</p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="card text-center p-3 my-4 bg-primary">
                    <div class="card-body">
                        <h3>Total Viewers</h3>
                        <p class="fs-4 fw-bold text-dark" id="viewers">0</p>
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>
</body>

</html>
