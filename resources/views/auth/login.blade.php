@extends('frontend.layout.front_layout')
@section('title', 'Login')
@section('content')


    <div class="">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('front.home') }}"><img width="250"
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


    <section class="container pt-5 pb-5">

        <div class="row">
            <div class="col-12 col-md-8 offset-0 offset-md-2">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        <h5>Login</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.user.login') }}">
                            @csrf
                             <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end client section -->
@endsection
