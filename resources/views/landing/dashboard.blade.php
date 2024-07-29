@extends("landing.template")
@section("content")
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div
            id="header-carousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        class="w-100 h-[100vh]"
                        src="{{ asset("assets/landing/img/carousel-1.jpeg") }}"
                        alt="Image"
                    />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">
                                        Welcome to
                                        <strong class="text-dark">
                                            WO JeWePe
                                        </strong>
                                    </p>
                                    <h1
                                        class="display-3 text-dark mb-4 animated zoomIn"
                                    >
                                        Modern Intimate Wedding Services
                                    </h1>
                                    <a
                                        href=""
                                        class="btn btn-light rounded-pill py-3 px-5 animated zoomIn"
                                    >
                                        Explore More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        class="w-100"
                        src="{{ asset("assets/landing/img/carousel-2.jpg") }}"
                        alt="Image"
                    />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">
                                        Welcome to
                                        <strong class="text-dark">
                                            WO JeWePe
                                        </strong>
                                    </p>
                                    <h1
                                        class="display-3 text-dark mb-4 animated zoomIn"
                                    >
                                        Modern Intimate Wedding Services
                                    </h1>
                                    <a
                                        href=""
                                        class="btn btn-light rounded-pill py-3 px-5 animated zoomIn"
                                    >
                                        Explore More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Store Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div
                class="section-title text-center mx-auto wow fadeInUp"
                data-wow-delay="0.1s"
                style="max-width: 500px"
            >
                <p class="fs-5 fw-medium fst-italic text-primary">
                    We provide professional solutions for couples. Everything
                    from concept creation to the plan on the day.
                </p>
                <h1 class="display-6">Premium Wedding Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($catalogues as $catalogue)
                    <div
                        class="col-lg-4 col-md-6 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div class="store-item position-relative text-center">
                            <img
                                class="img-fluid"
                                src="{{ Storage::url($catalogue->image) }}"
                                alt="{{ $catalogue->package_name }}"
                            />
                            <div class="p-4">
                                <div class="text-center mb-3">
                                    <small
                                        class="fa fa-star text-primary"
                                    ></small>
                                    <small
                                        class="fa fa-star text-primary"
                                    ></small>
                                    <small
                                        class="fa fa-star text-primary"
                                    ></small>
                                    <small
                                        class="fa fa-star text-primary"
                                    ></small>
                                    <small
                                        class="fa fa-star text-primary"
                                    ></small>
                                </div>
                                <h4 class="mb-3">
                                    {{ $catalogue->package_name }}
                                </h4>
                                <p>{{ $catalogue->description }}</p>
                                <h4 class="text-primary">
                                    {{ $catalogue->price }}
                                </h4>
                            </div>
                            <div class="store-overlay">
                                <a
                                    href=""
                                    class="btn btn-primary rounded-pill py-2 px-4 m-2"
                                >
                                    More Detail
                                    <i class="fa fa-arrow-right ms-2"></i>
                                </a>
                                <a
                                    href="{{ route("cart.create", $catalogue->catalogue_id) }}"
                                    class="btn btn-dark rounded-pill py-2 px-4 m-2"
                                >
                                    Add to Cart
                                    <i class="fa fa-cart-plus ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div
                    class="col-12 text-center wow fadeInUp"
                    data-wow-delay="0.1s"
                >
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">
                        View More Products
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Store End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mt-5">
        <div class="container py-5">
            <div
                class="section-title text-center mx-auto wow fadeInUp"
                data-wow-delay="0.1s"
                style="max-width: 500px"
            >
                <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p>
                <h1 class="display-6">What our clients say about our team</h1>
            </div>
            <div
                class="owl-carousel testimonial-carousel wow fadeInUp"
                data-wow-delay="0.5s"
            >
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                        Clita erat ipsum et lorem et sit, sed stet lorem sit
                        clita duo justo
                    </p>
                    <div
                        class="d-flex align-items-center justify-content-center"
                    >
                        <img
                            class="img-fluid flex-shrink-0"
                            src="{{ asset("assets/landing/img/testimonial-1.jpg") }}"
                            alt=""
                        />
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                        Clita erat ipsum et lorem et sit, sed stet lorem sit
                        clita duo justo
                    </p>
                    <div
                        class="d-flex align-items-center justify-content-center"
                    >
                        <img
                            class="img-fluid flex-shrink-0"
                            src="{{ asset("assets/landing/img/testimonial-2.jpg") }}"
                            alt=""
                        />
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                        Clita erat ipsum et lorem et sit, sed stet lorem sit
                        clita duo justo
                    </p>
                    <div
                        class="d-flex align-items-center justify-content-center"
                    >
                        <img
                            class="img-fluid flex-shrink-0"
                            src="{{ asset("assets/landing/img/testimonial-3.jpg") }}"
                            alt=""
                        />
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
