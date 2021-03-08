<?php


?>
@extends('pages.master')

@section('title','Home')
    

@section('content')
    
<body>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/slider3.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                    
                <div>
                    <h1 class="h1-heading">Zikhar, We Bring Products Beyond Your Imagination</h1>
                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-lg-4 images-column">
                    <a href="static">
                    <img class="gg" src="images/product.jpeg" alt="product-1">
                    </a>
                        <a href="static"><h3 style="margin-left: 93px;">Oval Soft Makeup Brush</h3></a>
                    
            </div>

            <div class="col-lg-4 images-column">
                    <a href="static">
                    <img src="images/product.jpeg" alt="product-1">
                    </a>
                    <a href="static"><h3 style="margin-left: 93px;">Oval Soft Makeup Brush</h3></a>
            </div>

            <div class="col-lg-4 images-column">
                    <a href="static">
                    <img src="images/product.jpeg" alt="product-1">
                    </a>
                    <a href="static"><h3 style="margin-left: 93px;">Oval Soft Makeup Brush</h3></a>
            </div>

        </div>
        
</body>

@endsection
