<?php
session_start();
$db=mysqli_connect('localhost', 'root', '', 'products');

if(isset($_POST['read_btn']))
{
    $read_id=$_POST['read_id'];
    $query="select * from single where id='$read_id' ";
    $result=mysqli_query($db, $query);       
    foreach($result as $row)
    {
        ;
    }
    
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="form.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Zikhar</title>
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<body>

        <?php require('header.php'); ?>


        <div class="row">

            <div class="col-lg-6">
                <h1 class="pp">Product Details</h1>
                <div class="pro-detail">
                    <img src="images/product.jpeg" alt="product-detail">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-right">
                    <h3>Product Price: <?php  echo $row['proname'];  ?></h3>
                    <h3>Product Code: <?php  echo $row['procode'];  ?></h3>
                    <h3>Product In Stock: <?php  echo $row['prostock'];  ?></h3>
                    <h3>Product Discount: <?php  echo $row['prodis'];  ?></h3>
                    <h3>Available Sizes: <?php  echo $row['proavail'];  ?></h3>
                    <h3>Material : <?php  echo $row['promat'];  ?></h3>
                    <h3>Size : <?php  echo $row['prosize'];  ?></h3>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12 space">
                <h1 class="pp">Product Specifications</h1>
            <p class="product-detail-line-height">
            <?php  echo $row['prospecs'];  ?>
            </p>
            </div>

        </div>


        <?php require('footer.php'); ?>
</body>
</html>