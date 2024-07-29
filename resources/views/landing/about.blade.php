@extends('landing.template')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-dark mb-4 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{ asset('assets/landing/img/about-1.jpg') }}" alt="">
                        <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="{{ asset('assets/landing/img/about-3.jpg') }}" alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="{{ asset('assets/landing/img/about-4.jpg') }}" alt="">
                        <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="{{ asset('assets/landing/img/about-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                    <h1 class="display-6">Creating Unforgettable Moments for Over 15 Years                    </h1>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-sm-4">
                        <img class="img-fluid bg-white w-100" src="{{ asset('assets/landing/img/about-5.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h5>Experience the Magic of a Perfectly Planned Wedding                        </h5>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                    </div>
                </div>
                <div class="border-top mb-4"></div>
                <div class="row g-3">
                    <div class="col-sm-8">
                        <h5>Our Commitment to Excellence
                        </h5>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                    </div>
                    <div class="col-sm-4">
                        <img class="img-fluid bg-white w-100" src="{{ asset('assets/landing/img/about-6.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
