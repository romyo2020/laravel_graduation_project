@extends('layouts.app')

@section('content')
    <!-- Hero section Done (just needs new images for the slider)-->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('images/bg.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>Make A Change</span>
                            <h2>our audiance</h2>
                            <p>Are you trying to find a suitable clothes matches your taste, we can help you with than just click the vote button to see our designs gallary and vote for your favourite ones to put it under radar for fashion copmanies to make a production line for it. </p>
                            <a href="#" class="site-btn sb-white">VOTE NOW</a>
                        </div>
                    </div>
                    {{-- <div class="offer-card text-white">
                        <span>from</span>
                        <h2>$29</h2>
                        <p>SHOP NOW</p>
                    </div> --}}
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{ asset('images/bg-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>Choose A Design</span>
                            <h2>Our brands</h2>
                            <p>we can help your business grow faster by get the feeling of the customer needs and taste in the clothes industry, as you can what's a trend and buy it from our designers list. </p>
                            <a href="#" class="site-btn sb-white">REGISTER NOW</a>
                        </div>
                    </div>
                    {{-- <div class="offer-card text-white">
                        <span>from</span>
                        <h2>$29</h2>
                        <p>SHOP NOW</p>
                    </div> --}}
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{ asset('images/bg.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>Chase Your Dream</span>
                            <h2>our designers</h2>
                            <p>We can help your ideas to see the light by turning them into a real products as the companies can see what is the trending designs and buy it </p>
                            <a href="#" class="site-btn sb-white">REGISTER NOW</a>
                        </div>
                    </div>
                    {{-- <div class="offer-card text-white">
                        <span>from</span>
                        <h2>$29</h2>
                        <p>SHOP NOW</p>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->



    <!-- Features section Done --> 
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icons/1.png') }}" alt="#">
                        </div>
                        <h2>Fast Secure Payments</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icons/2.png') }}" alt="#">
                        </div>
                        <h2>Premium Designs</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icons/3.png') }}" alt="#">
                        </div>
                        <h2>One Click Delivery</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->


    <!-- letest design section (needs to make images dynamic)-->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>LATEST DESIGNS</h2>
            </div>
            <div class="product-slider owl-carousel">
               
                @foreach ($latestDesigns as $design)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('images/product/1.jpg') }}" alt="">
                            <div class="pi-links">
                                @if ($role == 'company')
                                    <a href="javascript:void(0)" data-id="{{ $design->id }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                @endif
                                <a href="javascript:void(0)" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>${{ $design->price }}</h6>
                            <p>{{ $design->title}}</p>
                        </div>
                    </div>
                @endforeach
               
            </div>
    </section>
    <!-- letest design section end -->

    {{-- tags sction --}}
    <div class="container">
        <ul class="product-filter-menu">
            <h4 class="mb-1">Our Tags</h4>
            @foreach ($tags as $tag)
                <li><a href="#">{{$tag->name}}</a></li>
            @endforeach
        </ul>
    </div>
    {{-- End of tags section  --}}

    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP LIKED DESIGNS</h2>
            </div>
            <div class="row">
                @foreach ($topDesigns as $design)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ asset('images/product/9.jpg') }}" alt="">
                                <div class="pi-links">
                                    @if ($role == 'company')
                                        <a href="javascript:void(0)" data-id="{{ $design->id }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    @endif                                    
                                    <a href="javascript:void(0)" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>${{ $design->price }}</h6>
                                <p>{{ $design->title}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pt-5">
                <a href='#' class="site-btn sb-line sb-dark">SEE MORE</a>
            </div>
        </div>
    </section>
    <!-- Product filter section end -->

    <!-- latest Brands section (needs to make images dynamic)-->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>OUR BRANDS</h2>
            </div>
            <div class="product-slider owl-carousel">
                
                @foreach ($companies as $company)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('images/product/1.jpg') }}" alt="">
                            <div class="pi-links">
                                <a href="#" class="btn btn-info">KNOW MORE</a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>${{ $company->name }}</h6>
                        </div>
                    </div>
                @endforeach
                
            </div>
    </section>
    <!-- letest design section end -->

    <!-- Banner section (votes link) -->
    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="{{ asset('images/banner-bg.jpg') }}">
                <div class="tag-new">NEW</div>
                <span>New DESIGNS</span>
                <h2>EVERY DAY</h2>
                <a href="#" class="site-btn">VOTE NOW</a>
            </div>
        </div>
    </section>
    <!-- Banner section end  -->
@endsection
