<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>


	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet"
	integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
	crossorigin="anonymous">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

	@yield('styles')

</head>
<body>

@include('partials.header')	

<div class="container">
	@yield('content')
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@yield('scripts')	
</body>
</html>