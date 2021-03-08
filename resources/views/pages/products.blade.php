
@extends('pages.master')

@section('title', 'Products')

@section('content')

<body>
       

        {{-- <div class="row">
            <div class="col-lg-4 images-column">
                <table>
                 

                
                        <tr>
                                @foreach ($singles as $single)
                                <td>
                                        <a href="product/{{$single->id}}">
                                                <img class="gg" src="images/product.jpeg" alt="product-1">
                                                </a>
                                </td>
                                @endforeach
                        </tr>
                </table>
                
                {{-- @foreach ($singles as $single)
                <a href="product/{{$single->id}}">
                <img class="gg" src="images/product.jpeg" alt="product-1">
                </a>

                    <a href="product/{{$single->id}}"><h3>Oval Soft Makeup Brush</h3></a>

                    <h3>Product Name: {{$single->proname}}</h3>
                    <h3>Product Price: {{$single->proprice}}</h3>
                    <h3>Product Code: {{$single->procode}}</h3>
                    <h3>Product In Stock: {{$single->prostock}}</h3>
                    <h3>Product Discount: {{$single->prodis}}</h3>
                    <h3>Available Sizes: {{$single->proavail}}</h3>
                    <h3>Material : {{$single->promat}}</h3>
                    <h3>Size : {{$single->prosize}}</h3>

                        <div class="col-lg-12 space">
                            <h1 class="pp">Product Specifications</h1>
                        <p class="product-detail-line-height">
                            {{$single->prospecs}}
                        </p>
                        </div>
                        
                @endforeach --}}
                  
               
       

        <div class="container">
        
        <div class="row">
                @foreach ($singles as $single)
                <div class="col-md-4" style="padding:15px;">
                    <div style="display:inline-block; border:solid 1px #808080; padding:15px; border-radius:5px;">
                        
                        <div>
                            <img src="{{asset('uploads/'.$single->propic)}}" alt="Product image" width="300px" height="300px" style="border-radius: 5px;">
                            <br />
                            <h2 class="float-xs-right">${{$single->proprice}}</h2>
                            <h2 style="color: #007bff;">{{$single->proname}}</h2>
                            {{-- <br />
                            <p class="text-justify">{{$single->prospecs}}</p> --}}
                        </div>
                        <br>
                        <div class="btn-ground text-xs-center" style="padding-bottom: 30px">
                                <a href="product/{{$single->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> See Details</button></a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
        </div>
        </div>
                
        {{-- <div class="col-lg-4 images-column">
                <a href="/product1">
                <img src="images/product.jpeg" alt="product-1">
                </a>
                <a href="/product1"><h3>Oval Soft Makeup Brush</h3></a>
        </div>

        <div class="col-lg-4 images-column">
                <a href="/product1">
                <img src="images/product.jpeg" alt="product-1">
                </a>
                <a href="/product1"><h3>Oval Soft Makeup Brush</h3></a>
        </div>
        </div>

        <div class="row">
            <div class="col-lg-4 images-column">
                <a href="/product1">
                <img class="gg" src="images/product.jpeg" alt="product-1">
                </a>
                    <a href="/product1"><h3>Oval Soft Makeup Brush</h3></a>
                
        </div>

        <div class="col-lg-4 images-column">
                <a href="/product1">
                <img src="images/product.jpeg" alt="product-1">
                </a>
                <a href="/product1"><h3>Oval Soft Makeup Brush</h3></a>
        </div>

        <div class="col-lg-4 images-column">
                <a href="/product1">
                <img src="images/product.jpeg" alt="product-1">
                </a>
                <a href="/product1"><h3>Oval Soft Makeup Brush</h3></a>
        </div> --}}
        </div>


</body>

@endsection