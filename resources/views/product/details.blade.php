@extends('layouts.master')

@section('title')
    Single Product Page
@endsection

@section('content')

<div class="product-card">
    <div class="row">   

        <div class="col-sm-12 col-md-12 col-lg-7">
            
            <div class="product-image" style="background-image:url('https://yoummock.com/wp-content/uploads/2019/07/Hartie-cu-umbra-hamac1024x1024.png')">
                    
                <a href="https://yoummock.com/wp-content/uploads/2020/04/15-Reducere-hartie-verde.png">
                    <img width="600" height="600" src="{{$product->imagePath}}" class="wp-post-image" alt="" title="15 Reducere hartie verde">
                </a>

                <a href="https://yoummock.com/product/calatorul-sofisticat/">
                
                </a>                

                <div class="price-tag" style="background-image: url('/storage/price-tag-icon.png')">
                    <div class="price-text">
                    <p>{{ $product->price}}</p>     
                    </div>
                </div>

            </div>                
            
        </div>

        <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="product-text">
                
                <!-- Get product title -->
                <div class="product-title">
                <h1> {{$product->title}} </h1>
                </div>
                
                <!-- Get product description -->
                <div class="product-description">
                    <p>{{$product->description}}</p>
                </div>                       

                <!-- Get product buttons -->
                <div class="product-add-to-cart">
                    <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="button small product-link">Add to cart</a>
                    <img src="">
                </div>
                    
            </div>
        </div>

    </div>
</div>

@endsection
