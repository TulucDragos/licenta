<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('product.index')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('product.index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
           <a class="nav-link" href="{{route('product.shoppingCart')}}">
                <i class="fa fa-shopping-cart"></i> Shopping Cart
                <span class="badge"> {{Session::has('cart') ? Session::get('cart')->totalQty : ""}}</span>
            </a>
          </li>
          
          <li class="nav-item dropdown">           
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              @if(Auth::check())
                <a class="dropdown-item" href="{{route('user.profile')}}">User Profile</a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                </div>
              @else
                <a class="dropdown-item" href="{{route('user.signup')}}">Signup</a>
                <a class="dropdown-item" href="{{route('user.signin')}}">Login</a>
              @endif            
              
          </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>