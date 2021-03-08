
@extends('pages.master')

@section('title', 'Products')

@section('content')

<body>


        <div class="row">

            <div class="col-lg-6">
                <h1 class="pp">Product Details</h1>
                <div class="pro-detail">
                    <img src="{{asset('uploads/'.$single->propic)}}" alt="Product image" width="100px" height="100px">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-right">
                    <h3>Product Name: {{$single->proname}}</h3>
                    <h3>Product Price: {{$single->proprice}}</h3>
                    <h3>Product Code: {{$single->procode}}</h3>
                    <h3>Product In Stock: {{$single->prostock}}</h3>
                    <h3>Product Discount: {{$single->prodis}}</h3>
                    <h3>Available Sizes: {{$single->proavail}}</h3>
                    <h3>Material : {{$single->promat}}</h3>
                    <h3>Size : {{$single->prosize}}</h3>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12 space">
                <h1 class="pp">Product Specifications</h1>
            <p class="product-detail-line-height">
                {{$single->prospecs}}
            </p>
            </div>

        </div>

</body>
@endsection