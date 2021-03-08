@extends('pages.master')

@section('title', 'Products')

@section('content')


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
</head>
<body>

    


        <div class="row">

            <div class="col-lg-6">
                <h1 class="pp">Product Details</h1>
                <div class="pro-detail">
                    <img src="images/product.jpeg" alt="product-detail">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-right">
                    <h3>Product Price: PKR 1500</h3>
                    <h3>Product Code: 78645</h3>
                    <h3>Product In Stock: YES</h3>
                    <h3>Product Discount: 20%</h3>
                    <h3>Available Sizes: Small,Medium,Large</h3>
                    <h3>Material : Nylon</h3>
                    <h3>Size : 15cm</h3>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12 space">
                <h1 class="pp">Product Specifications</h1>
            <p class="product-detail-line-height">This brush is a simple but stylish design. Its unique ergonomic form makes the brush for a flawless finish and excellent for natural beauty.

                The makeup brush is many uses. It can be used as a concealer, contour, panel, or powder brush. It is ideal for creamy, powdery, liquid, solid, and loose makeup products to create great facial makeup.
                
                The makeup brush is made from highly dense, fine, and soft brush hair from long-lasting synthetic. The brush is very smooth and pleasant on the skin. Its ergonomic and flexible handle is very robust and fits snugly in the hand and Passst locker and contours of your face.
                
                The oval voice shape as well as the super soft bristles feel soft and pleasant to wear the facial skin.
                
                The makeup brush is robust and durable. A high-quality product that is easy to clean. To achieve this it is recommended to brush once a week with a little baby shampoo, or a mild soap too, then to air while drying.Description:
                
                Give you a flawless foundation application every single time
                
                No streaks and no areas with too much makeup or too little
                
                With a concave design, which is perfect for you to apply liquid foundation on your face
            
            </p>
            </div>

        </div>

        @endsection
</body>
</html>