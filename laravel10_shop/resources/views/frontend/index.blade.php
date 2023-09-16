<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="{{asset('frontend/images/1684590428.jpg')}}" type="image/gif">
    <meta content="https://dailybazaar24.com" name="sitelink">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title> 
            Dailybazaar24.com
</title>
    <!-- ***********link-area-start********* -->
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    {{-- <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous"> --}}
    <!-- ********owl-carousel********* -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- ********owl-carousel********* -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
        <style>
      
      </style>
   
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1180553039299368&amp;ev=PageView&amp;noscript=1"></noscript>
<!-- End Meta Pixel Code -->
    <!-- ***********link-area-end*********** -->
</head>
<body>
    <!-- **********header-area-start*********** -->
    <header class="header-area">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-sm-4">
                        <div class="logo-area">
                            <a href="{{url('/')}}">
                                <img src="{{asset('frontend/images/1686063922.jpg')}}" alt>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                    <form method="GET" action="https://dailybazaar24.com/search" accept-charset="UTF-8" class="form-group has-search">
                        <div class="search-box">
                            <input class="search-bar" name="search" type="text" value placeholder="সার্চ করুন">
                            <button type="submit" class="btn search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    </div>
                    <div class="col-sm-12 col-md-3 my-auto">
                        <div class="right-header">
                            <a href="https://dailybazaar24.com/checkout" id="cart">
                                <div class="d-flex justify-content-start">
                                    <div class="my-auto me-1"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="text-start lh-1">
                                        Your Cart <br>
                                                                                                                        <span class="text-secondary">Tk 0</span>
                                    </div>                                    
                                </div>                                
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-content">
                        <ul class="first-ul">
                            <li class>
                                <a class=" " href="https://dailybazaar24.com">Home</a>
                            </li>
                            
                            <li class>
                                <a class=" " href="https://dailybazaar24.com/product_category/hot-offer">Hot Offer</a>
                            </li>

                              <li class>
                                <a class=" " href="https://dailybazaar24.com/product_category/home-living">Home & Living</a></li>

                                <li class>
                                    <a class=" " href="https://dailybazaar24.com/product_category/electronics">Electronic Gadgets</a>
                                </li>
                              <li>

                             

                                @if (Route::has('login'))
                                @auth   
            
                                
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown"  aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="userMenu">
                                
                                       <li> <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>

                                @else
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                                </li>
            
                                    @if (Route::has('register'))
                                    <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ******bootstrap-navbar******** -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('frontend/images/1686063922.jpg')}}" alt></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
            <form method="GET" action="https://dailybazaar24.com/search" accept-charset="UTF-8" class="d-flex">
              <input class="form-control me-2" value type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav><!-- ******bootstrap-navbar******** -->
    <!-- **********header-area-end*********** -->
      <!-- section -->
    
    <!-- **********hero-area-start********** -->
    <div class="slide-area-start">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="hero-area owl-carousel owl-theme">
                                          <div class="single-slider">
                          <a href><img src="{{asset('frontend/images/1686039140.jpg')}}" alt></a>
                      </div>
                                          <div class="single-slider">
                          <a href><img src="{{asset('frontend/images/1686039120.jpg')}}" alt></a>
                      </div>
                                      </div>
              </div>
          </div>
      </div>
  </div> 
  <!-- **********hero-area-end************ -->

    <!-- *********hot-deal-area-start********* -->
    <div class="hot-deal-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="common-header">
                      <div class="left-common-header">
                          <h4>Hot deals</h4>
                      </div>
                      
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="hot-deal-slider owl-carousel owl-theme">

                 
                    @foreach($product as $item)
                    
                     <div class="hot-deal-single-slider">
                        
                          <a href="{{route('check-out', $item->id)}}">
                            <img src="{{asset('uploads/product/'.$item->image)}}" width="178px" height="217px" alt>
                          </a>
                          <div class="hot-deal-price">
                              <p>৳ {{$item->price}}</p>
                          </div>
                      
                      </div>
                    
                      @endforeach
                  
                   
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- *********hot-deal-area-end*********** -->
<!-- ************common-product-area-start********** -->
<div class="product-area">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="common-header">
                  <div class="left-common-header">
                      <h4>All Products</h4>
                  </div>
                  
              </div>
          </div>
      </div>

<div class="row no-gutter">
    @foreach($allProduct as $item)
    
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
    <a href="">
    <div class="single-product text-center p-2">
        <a href="{{route('check-out', $item->id)}}">
        <img src="{{asset('uploads/product/'. $item->image)}}" width="178px" height="217px" alt="">
        </a>
        <div class="product-content">
            <p><del>৳ {{$item->price}}.00</del></p>
          <p class="second-p">৳ {{$item->selling_price}}.00</p>
          <a href="{{route('check-out', $item->id)}}">
            <h3>{{$item->title}}</h3>
          </a>
            <a target="_blank" href="{{route('check-out', $item->id)}}" class="btn btn-success btn-sm w-100"><i class="fa fa-shopping-cart"></i>Buy Now</a>
        </div>
    </div>
    </a>
</div>   

@endforeach                         
</div>
<div class="d-flex float-end">
    {!! $allProduct->links() !!}
</div>

  </div>
</div>
<!-- ************common-product-area-end************ -->


      
    <!-- ***********footer-area-start********* -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-footer first-footer">
                        <h4>About Us</h4>
                        <ul class><li class><a class=" " href="">About</a></li><li class><a class=" " href="">Hot Offer</a></li></ul> 
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-footer second-footer">
                        <h4>More Products</h4>
                        <ul class><li class><a class=" " href="">ALL PRODUCTS</a></li><li class><a class=" " href="">Home</a></li></ul> 
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-footer third-footer">
                        <h4>Our Facebook Page</h4>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="last-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Designed and Developed by <a href>Engr. Mizan</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- ***********footer-area-end*********** -->
    <!-- *********script-area-start********** -->
    <script src="{{asset('frontend/js/jquery-3.6.3.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/all.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- *********script-area-end************* -->

</body></html>