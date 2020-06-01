@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 auto-margin">
                <ul>
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            
                            <strong>{{$product['item']['title']}}</strong>
                            <span class="label label-success">{{$product['price']}}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action
                                     <span class="cater"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Reduce by 1</a></li>
                                    <li><a href="#">Remove all</a></li>
                                </ul>
                            </div>
                            <span class="badge">{{$product['qty']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 auto-margin">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 auto-margin">
                <button type="button" class="btn btn-success">Checkout</button>
            </div>
        </div>

    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 auto-margin">
                <h2>No Item in Cart</h2>
            </div>
        </div>
    @endif

@endsection