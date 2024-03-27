{{-- @extends('layout')
@section('content') --}}
<style>
    ul li {
        list-style: none;
        text-decoration: none;
        outline: none;
        cursor: pointer;
        list-style-position: outside;
        line-height: 1.5;
        padding: 0;
        margin: 0;
    }
</style>
<div class="">
    <h4>T-Shirts for Men(1133)</h4>
    <div>
        <h6>FILTERS</h6>
        <div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            Gender
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Men</li>
                                <li>Women</li>
                                <li>Unisex</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            Category
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>T-shirt</li>
                                <li>Vest</li>
                                <li>Hoodies</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Size
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>XS</li>
                                <li>S</li>
                                <li>M</li>
                                <li>L</li>
                                <li>XL</li>
                                <li>2XL</li>
                                <li>2XL</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            Brand
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Bewakoof®</li>
                                <li>Bewakoof Air® 1.0</li>
                                <li>Bewakoof Heavy Duty® 1.0</li>
                                <li>Bewakoof American Pima</li>
                                <li>Rigo</li>
                                <li>Mad Over Print</li>
                                <li>Difference Of Opinion</li>
                                <li>Olavi</li>
                                <li>Dillinger</li>
                                <li>Campus Sutra</li>
                                <li>East Coast Way</li>
                                <li>Brown Mocha</li>
                                <li>The Bargain Street</li>
                                <li>Bushirt</li>
                                <li>Fans Army</li>
                                <li>Blanck</li>
                                <li>Vibebling</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            Color
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Black</li>
                                <li>White</li>
                                <li>Blue</li>
                                <li>Green</li>
                                <li>Brown</li>
                                <li>Purple</li>
                                <li>Red</li>
                                <li>Pink</li>
                                <li>Grey</li>
                                <li>Yellow</li>
                                <li>Brown Red</li>
                                <li>Organ</li>
                                <li>Pine Apple</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false"
                            aria-controls="flush-collapseSix">
                            Design
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Graphic Print</li>
                                <li>Solid</li>
                                <li>Typography</li>
                                <li>Printed</li>
                                <li>Aop</li>
                                <li>Color Block</li>
                                <li>Tie & Dye</li>
                                <li>Striped</li>
                                <li>Self Design</li>
                                <li>Textured</li>
                                <li>Camouflage</li>
                                <li>Ombre</li>
                                <li>Floral Print</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false"
                            aria-controls="flush-collapseSeven">
                            Fit
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Oversized Fit</li>
                                <li>Regular Fit</li>
                                <li>Super Loose Fit</li>
                                <li>Slim Fit</li>
                                <li>Unisex Fit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false"
                            aria-controls="flush-collapseEight">
                            Sleeve
                        </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Half Sleeve</li>
                                <li>Full Sleeve</li>
                                <li>Sleeveless</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false"
                            aria-controls="flush-collapseFourteen">
                            Neck
                        </button>
                    </h2>
                    <div id="flush-collapseFourteen" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Round Neck</li>
                                <li>V-Neck</li>
                                <li>Henley Neck</li>
                                <li>Collar</li>
                                <li>Hooded</li>
                                <li>Mandarin Collar</li>
                                <li>Spread Collar</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false"
                            aria-controls="flush-collapsenine">
                            Type
                        </button>
                    </h2>
                    <div id="flush-collapseNine" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>T-Shirt</li>
                                <li>Vest</li>
                                <li>Hoodies</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false"
                            aria-controls="flush-collapseTen">
                            Ratings
                        </button>
                    </h2>
                    <div id="flush-collapseTen" class="accordion-collapse collapse "
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>4.5 and above</li>
                                <li>4 and above</li>
                                <li>3.5 and above</li>
                                <li>3 and above</li>
                                <li>2.5 and above</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false"
                            aria-controls="flush-collapseEleven">
                            Offers
                        </button>
                    </h2>
                    <div id="flush-collapseEleven" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Buy 3 For 1199</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false"
                            aria-controls="flush-collapseTwelve">
                            Discount
                        </button>
                    </h2>
                    <div id="flush-collapseTwelve" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>10% Or More</li>
                                <li>20% Or More</li>
                                <li>30% Or More</li>
                                <li>40% Or More</li>
                                <li>50% Or More</li>
                                <li>60% Or More</li>
                                <li>70% Or More</li>
                                <li>80% Or More</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed focus-ring focus-ring-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false"
                            aria-controls="flush-collapseThirteen">
                            Sort By
                        </button>
                    </h2>
                    <div id="flush-collapseThirteen" class="accordion-collapse collapse focus-ring focus-ring-light"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Popular</li>
                                <li>New</li>
                                <li>Price : High to Low</li>
                                <li>Price : Low to High</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- @endsection --}}
