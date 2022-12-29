<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('site/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('site/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('site/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('site/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('site/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="header d-flex align-items-center">
      @if(session()->get('success'))
          <div class="alert alert-success">
              {{ session()->get('success') }}
          </div><br/>
      @endif
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Store Husam<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('login')}}">Login to Control Panel</a></li>
{{--          <li><a href="#about">About</a></li>--}}
{{--          <li><a href="#services">Services</a></li>--}}
{{--          <li><a href="#portfolio">Portfolio</a></li>--}}
{{--          <li><a href="#team">Team</a></li>--}}
{{--          <li><a href="blog.html">Blog</a></li>--}}
{{--          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
{{--            <ul>--}}
{{--              <li><a href="#">Drop Down 1</a></li>--}}
{{--              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
{{--                <ul>--}}
{{--                  <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                  <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                  <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                  <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                  <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--              <li><a href="#">Drop Down 2</a></li>--}}
{{--              <li><a href="#">Drop Down 3</a></li>--}}
{{--              <li><a href="#">Drop Down 4</a></li>--}}
{{--            </ul>--}}
{{--          </li>--}}
{{--          <li><a href="#contact">Contact</a></li>--}}
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  @if ($errors->any())<div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div><br/>@endif
  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>All Product</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
                @foreach($category as $item)

                    <li ><a href="{{route('category.show',$item->id)}}">{{ $item->name}}</a></li>

                @endforeach

            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            @foreach($product as $products)
                 <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset($products->image)}}" data-gallery="portfolio-gallery-app" class="glightbox">
                    <img src="{{asset($products->image)}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="" title="More Details">{{$products->name}}</a></h4>
                  <p>{{$products->description}}</p>
                  <p>Count Product is : {{$products->count}}</p>
                    <form method="post" action="{{route('orders.store')}}" >
                        @csrf
                        <input type="hidden" name="product_id" value="{{@$products->id}}" >
                         <input type="hidden" name="warehouse_id" value="{{@$products->warehouses->id}}" >
                        <button type="submit" class="btn btn-info">Order</button>
                    </form>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            @endforeach



          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="container mt-4">


    </div>

  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('site/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('site/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('site/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('site/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('site/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('site/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('site/assets/js/main.js')}}"></script>

</body>

</html>
