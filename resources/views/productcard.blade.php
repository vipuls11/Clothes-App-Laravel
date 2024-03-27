{{-- @extends('layout')
@section('content') --}}
<div>
    <div class="mb-5">
        <div>
            <h4>T SHIRTS FOR MEN</h4>
            <p class="" style="font-size: 14px; line-height:1.5;">Shop T shirts for men online from Beyoung’s
                diverse
                collections.
                You
                will love resonating
                with our
                premium quality Printed T Shirts available in various colors & interesting themes. We have different
                silhouettes to match your vibe and speak your style. Your one-stop everyday fashion brand Beyoung! Enjoy
                browsing and shopping online Mens T shirts starting from ₹299/-</p>
        </div>
        <div class="row">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-lg-3 col-md-6">
                    <div class="p-0 m-1 border rounded ">
                        <img src="{{ asset('image/11 (1).jpeg') }}" class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                </div>
            @endfor
            {{-- <div class="col-lg-3 col-md-6">
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-3 col-md-6">
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-3 col-md-6">
                    <div class="p-0 m-1 border rounded">
                        <img src="{{ asset('image/white_striped_waffle_shirt_for_men_base_04_03_2024_400x533.jpg') }}"
                            class="d-block w-100 rounded-top" alt="...">
                        <div class="p-2">
                            <h5 class="fw-bolder fs-6 m-0">Light Grey Oversized Urban Shirt for Men</h5>
                            <p class="m-0" style="font-size:14px;">Urban Shirts</p>
                            <p class="m-0"><span class="fw-bold">&#8377;1499</span> <del class=""
                                    style="font-size:12px;">&#8377;899</del> <span class="text-success">(off
                                    60%)</span></p>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>
</div>
{{-- @endsection --}}
