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

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Impact<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('login')}}">Login to Control Panel</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br/>
@endif

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
                        <li ><a href="{{url('/')}}">All Product</a></li>
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
                                        <h4><a href="" title="More Details">{{$products->name}}
                                                {{$products->categories->name}}
                                            </a></h4>
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

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Impact</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    A108 Adam Street <br>
                    New York, NY 535022<br>
                    United States <br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->
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
