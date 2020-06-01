@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-6 auto-margin">
        <h1>Checkout</h1>
        <h4>Your Total: {{ $total }} </h4>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="E-mail">E-mail</label>
                        <input id="E-mail" class="form-control" type="text" name="email" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input id="city" class="form-control" type="text" name="city" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Counry">County</label>
                        <input id="Counry" class="form-control" type="text" name="county" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input id="Address" class="form-control" type="text" name="addess" required>
                    </div>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-success">Buy now</button>
        </form>
    </div>
</div>
@endsection