@extends('layout')
@section('content')
    <div class="mb-5">
        <div class="container">
            <p class="m-0 py-2 fw-semibold" style="font-size: 12px; color:black;"><a href="" class="text-dark"
                    style="outline-style: none; text-decoration: none;">HOME</a> >
                <a href="" class="text-dark" style="outline-style: none; text-decoration: none;">MEN'S
                    CLOTHINGT</a> > <a href="" class="text-dark"
                    style="outline-style: none; text-decoration: none;">SHIRTS FOR
                    MEN</a>
            </p>
        </div>
        <img src="https://www.beyoung.in/api//cache/catalog/products/banner_desktop/T-shirts-banner-desktop-view_03_02_2024_1920x475.jpg"
            alt="" class="w-100 d-block">
    </div>
    <div class="container-fluid">
        <div class=" row">
            <div class="col-3">
                @include('sidesubmenu')
            </div>
            <div class="col-9">
                @include('productcard')
            </div>
        </div>
    </div>
@endsection
