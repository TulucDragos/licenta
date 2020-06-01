@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-6 auto-margin">
        <h1>Checkout</h1>
        <h4>Your Total: {{ $total }} </h4>
        <form action="{{route('checkout')}}" method="post" id="checkout-form" class="require-validation" data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" csrf>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Your Name" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="E-mail">E-mail</label>
                        <input id="E-mail" class="form-control" type="text" name="email" placeholder="Your E-mail" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input id="city" class="form-control" type="text" name="city" placeholder="Your City" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Counry">County</label>
                        <input id="Counry" class="form-control" type="text" name="county" placeholder="Your County" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input id="Address" class="form-control" type="text" name="addess" placeholder="Your Address" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <h3 class="panel-title display-td" >Payment Details</h3>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="card-name">Name on Card</label>
                        <input id="card-name" class="form-control card-name" type="text" name="card-name" placeholder="ex. Joe Doe" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="card-number">Card Number</label>
                        <input id="card-number" class="form-control card-number" type="text" placeholder="ex. 1234 1234 1234 1234" name="card-number" required>
                    </div>
                </div>


                <div class='col-xs-12 col-md-4 form-group cvc required'>
                    <label class='control-label'>CVC</label>
                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                </div>

                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Month</label>
                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                </div>

                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Year</label>
                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                </div>

                <div class='col-md-12 error form-group hide'>
                    <div class='alert-danger alert'>Please correct the errors and try
                        again.</div>
                    </div>
                </div>

                {{csrf_field()}}
                <button type="submit" class="btn btn-success">Pay now {{$total}} lei</button>

        </form>
    </div>
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('/js/stripe.js') }}"></script>