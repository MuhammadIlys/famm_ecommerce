@extends('frontend.layout.front_layout')
@section('title', 'Shop')
@section('content')
    <div class="">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html"><img width="250"
                            src="{{ asset('assets/frontend/images/logo.png') }}" alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('front.home') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.shop') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </li>
                          @unless (!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger btn-sm text-white" href="{{ route('auth.logout') }}">
                                    Logout
                                </a>
                            </li>
                            @endunless
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger btn-sm text-white" href="{{ route('auth.login') }}">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item ml-2">
                                <a class="nav-link btn btn-danger btn-sm text-white " href="{{ route('auth.register') }}">
                                    Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Product Grid</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Men's Shirt
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p1.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Men's Shirt
                            </h5>
                            <h6>
                                $75
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p2.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Men's Shirt
                            </h5>
                            <h6>
                                $80
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p3.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Women's Dress
                            </h5>
                            <h6>
                                $68
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p4.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Women's Dress
                            </h5>
                            <h6>
                                $70
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p5.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Women's Dress
                            </h5>
                            <h6>
                                $75
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p6.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Women's Dress
                            </h5>
                            <h6>
                                $58
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p7.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Women's Dress
                            </h5>
                            <h6>
                                $80
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p8.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Men's Shirt
                            </h5>
                            <h6>
                                $65
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p9.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Men's Shirt
                            </h5>
                            <h6>
                                $65
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p10.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Men's Shirt
                            </h5>
                            <h6>
                                $65
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p11.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Men's Shirt
                            </h5>
                            <h6>
                                $65
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="" class="option1">
                                    Add To Cart
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('assets/frontend/images/p12.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Women's Dress
                            </h5>
                            <h6>
                                $65
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View All products
                </a>
            </div>
        </div>
    </section>
    <!-- end product section -->
    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Reach at..
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="{{ route('front.home') }}" class="footer-logo">
                            Famms
                        </a>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of over
                            200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <div class="col-lg-7 mx-auto px-0">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/">Free Html Templates</a><br>

                        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
