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
                        <ul class="first-ul"><li class><a class=" " href="https://dailybazaar24.com">Home</a></li><li class><a class=" " href="https://dailybazaar24.com/product_category/hot-offer">Hot Offer</a></li><li class><a class=" " href="https://dailybazaar24.com/product_category/home-living">Home & Living</a></li><li class><a class=" " href="https://dailybazaar24.com/product_category/electronics">Electronic Gadgets</a></li><li class><a class=" " href="https://dailybazaar24.com/page/about-us">About</a></li></ul>
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"><li class="nav-item"><a class="nav-link " href="https://dailybazaar24.com">Home</a></li><li class="nav-item"><a class="nav-link " href="https://dailybazaar24.com/product_category/hot-offer">Hot Offer</a></li><li class="nav-item"><a class="nav-link " href="https://dailybazaar24.com/product_category/home-living">Home & Living</a></li><li class="nav-item"><a class="nav-link " href="https://dailybazaar24.com/product_category/electronics">Electronic Gadgets</a></li><li class="nav-item"><a class="nav-link " href="https://dailybazaar24.com/page/about-us">About</a></li></ul>
            
            <form method="GET" action="https://dailybazaar24.com/search" accept-charset="UTF-8" class="d-flex">
              <input class="form-control me-2" value type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav><!-- ******bootstrap-navbar******** -->
    <!-- **********header-area-end*********** -->
    <!-- *********single-product********* -->
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="left-single-product">
					<img src="{{asset('uploads/product/'.$product_view->image)}}" width="572px" height="584px" alt="shoe" id="mainImage">
				</div>
				
			</div>
			<div class="col-md-6">
				<form method="GET" action="" accept-charset="UTF-8" class="cart">
                  

                        <div class="right-single-product">
                            <h3>{{$product_view->title}}</h3>
                        
                        <div class="price-area">
                                <p><del>৳ {{$product_view->price}}.00</del><span class="price-taka">৳ {{$product_view->selling_price}}.00</span></p>
                            </div>
                            <span class="number-area">
                                <button type="button" class="minus">-</button>                           
                                <span class="num">1</span>                           
                                <button type="button" class="plus">+</button> 
                            </span>
                            <input type="hidden" value="1" class="num2" name="quantity">
                            <div class="order-button">
                                <a href="{{url('/checkout')}}" type="submit" class="order">
                                    <i class="fa fa-shopping-cart"></i> অর্ডার করুন
                                </a>
                            </div>

                            <div class="cotact-area-delivery">
                                <h4>প্রয়োজনে কল করুন - 01875398881</h4>
                                <h5>ঢাকায় ডেলিভারি খরচ <span> ৳ 60</span></h5>
                                <h5>ঢাকার বাইরের ডেলিভারি খরচ <span> ৳ 130</span></h5>
                            </div>

                        </div>
                 

				</form>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2>Description</h2>
				<p>

                    {{$product_view->description}}
                    
                </p>
			</div>
		</div>
	</div>
</div><!-- *********single-product********* -->
<!-- ********* Related Prdouct area product-area-start********** -->
<div class="product-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="common-header">
					<div class="left-common-header">
						<h4>Necessary Items</h4>
					</div>
					<div class="right-common-header">
						<h4><a href>All Products <i class="fa-solid fa-arrow-right-long"></i></a></h4>
					</div>
				</div>
			</div>
		</div>

<div class="row no-gutter">

    @foreach( $allProduct as $item)
	<div class="col-lg-2 col-md-4 col-sm-6 col-6">      
    <div class="single-product text-center p-2">
        <a href="{{route('product.details', ['slug'=>$item->slug])}}">
        <img src="{{asset('uploads/product/'.$item->image)}}" width="178px" height="217px" alt>
        </a>
        <div class="product-content">
            <p><del>৳ {{$item->price}}.00</del></p>
<p class="second-p">৳ {{$item->selling_price}}.00</p>
<a href="{{route('product.details', ['slug'=>$item->slug])}}"> <h3>{{$item->title}}</h3> </a>
            <a href="" class="btn btn-success btn-sm w-100"><i class="fa fa-shopping-cart"></i>  অর্ডার করুন</a>
        </div>
    </div>
</div>		
@endforeach	
</div>	


		</div>		
	</div>
</div><!-- *********product-area-end************ -->			
			
    
    <!-- ***********footer-area-start********* -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-footer first-footer">
                        <h4>About Us</h4>
                        <ul class><li class><a class=" " href="https://dailybazaar24.com/page/about-us">About</a></li><li class><a class=" " href="https://dailybazaar24.com/#">Hot Offer</a></li></ul> 
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-footer second-footer">
                        <h4>More Products</h4>
                        <ul class><li class><a class=" " href="https://dailybazaar24.com/#">ALL PRODUCTS</a></li><li class><a class=" " href="https://dailybazaar24.com/#">Home</a></li></ul> 
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
    <!-- *********script-area-start********** -->
    <script src="{{asset('frontend/js/jquery-3.6.3.min.js')}}" crossorigin="anonymous"></script>
    /* <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script> */
    <script src="{{asset('frontend/js/all.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
   

</body>
</html>