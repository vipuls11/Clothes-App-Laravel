@extends('layout')
@section('content')
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide z-n1" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/Choose any color any size.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/4image.jpg') }}" class="d-block w-100" alt="...">
                </div>
                {{-- <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div> --}}
            </div>
        </div>

        <div class="container-fluid">
            <div class="my-5"> <img src="{{ asset('image/Flat.jpg') }}" class="d-block w-100" alt="..."></div>
        </div>

        <div class="container">
            <div class="my-2"> <img src="{{ asset('image/All Rowdy Collection is here.jpg') }}" class="d-block w-100"
                    alt="..."></div>
        </div>
        {{-- ...................................Grid Cols....................... --}}
        {{-- <div class="">
            <div class="container my-5">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="col border p-0">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-semibold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- ...................................Grid Cols....................... --}}
        <div class="">
            <div class="my-5">
                <div class="slider owl-carousel d-flex g-3">

                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (1).jpeg') }}" alt="xsbchfjbdsjbvfgdhjsb"
                            class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (2).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (3).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (4).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (5).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (6).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (7).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1">
                        <img src="{{ asset('image/11 (8).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (9).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (10).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ...................Offer banner.................. --}}
        <div>
            <div class="sliders_offers owl-carousel d-flex">
                <img src="{{ asset('image/offer banner 1.jpg') }}" class="d-block w-100 rounded-top" alt="...">
                <img src="{{ asset('image/offfer-banner-2.jpg') }}" class="d-block w-100 rounded-top" alt="...">
                <img src="{{ asset('image/offfer-banner-3.jpg') }}" class="d-block w-100 rounded-top" alt="...">
            </div>
        </div>
        {{-- ...................Offer banner.................. --}}

        {{-- ....................................sliderImage.................... --}}
        <div class="">
            <div id="clothes_slider" class="my-5">
                <div class="container-fluid">
                    <h4 class="m-0 fw-bold">T-SHIRTS</h4>
                    <p class="m-0">High On Demand</p>
                </div>
                <div class="sliders_clothes owl-carousel d-flex g-3">

                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (1).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (2).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (3).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (4).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (5).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (6).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (7).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1">
                        <img src="{{ asset('image/11 (8).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (9).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/11 (10).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>

                </div>
                <button id="next-btn"> > </button>
                <button id="prev-btn">
                    < </button>
            </div>
        </div>
        {{-- ..................SHOP THE LOOK........................ --}}
        <div class="container ">
            <h4>SHOP THE LOOK</h4>
            <div>
                <div class="d-flex gap-lg-5 gap-2">
                    <div> <img src="{{ asset('image/morning-look.jpg') }}" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div><img src="{{ asset('image/3.jpg') }}" class="d-block w-100 rounded-top" alt="..."></div>
                    <div><img src="{{ asset('image/office-look.jpg') }}" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div> <img src="{{ asset('image/all-time.jpg') }}" class="d-block w-100 rounded" alt="...">
                    </div>

                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $(".sliders_offers").owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000, //2000ms = 2s;
                    autoplayHoverPause: true,
                    items: 1
                });

            });
        </script>
        {{-- ....................................sliderImage.................... --}}
        <script>
            $(document).ready(function() {
                $(".sliders_clothes").owlCarousel({
                    loop: true,
                    autoplay: false,
                    autoplayTimeout: 2000, //2000ms = 2s;
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 2, // 2 items for mobile
                        },
                        768: {
                            items: 4, // 4 items for tablet
                        },
                        1024: { // 1024px and above for desktop
                            items: 5, // 5 items for desktop
                        },
                    },
                });

                $("#next-btn").click(function() {
                    $(".sliders_clothes").owlCarousel("next");
                });

                $("#prev-btn").click(function() {
                    $(".sliders_clothes").owlCarousel("prev");
                });
            });
        </script>
        {{-- ....................................sliderImage.................... --}}
    </div>
    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s;
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2, // 2 items for mobile
                },
                768: {
                    items: 4, // 4 items for tablet
                },
                1024: { // 1024px and above for desktop
                    items: 5, // 5 items for desktop
                },
            },
        });
    </script>
    </div>
@endsection
