@extends('layouts.frontend')
@section('title', 'Menu')
@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Menu</h1>
        <p>Cooking delicious and tasty food since</p>
    </div>
@endsection
@section('content')
    <div class="pattern_2">
        <div class="container margin_60_40" data-cues="slideInUp">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Drinks</h2>
                <p>Cum doctus civibus efficiantur in imperdiet</p>
            </div>

            <div class="row justify-content-center mb-5">

                <div class="col-md-4 col-xl-3" data-cue="slideInUp">
                    <div class="item menu_item_grid">
                        <div class="item-img magnific-gallery" data-cue="slideInUp">
                            <img src="img-menu-plats/drinks.jpg" alt="">
                            <div class="content">
                                <a href="img-menu-plats/drinks.jpg" title="Chicken with Garlic"
                                    data-effect="mfp-zoom-in"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <h3>We offer you the best Starters</h3>
                        <p> Hot Food </p>
                        <div class="price_box">
                            <span class="new_price">... DH</span>
                            {{-- <span class="old_price">${{ $item->price }}</span> --}}
                        </div>

                        <a href="javascript:void(0)" class="btn_1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">add to cart</a>
                        <a href="{{ route('plats') }}" class="btn_1">visit more</a>

                    </div>
                </div>

            </div>

            <div class="main_title center" data-cue="slideInUp">
                <span><em></em></span>
                <h2>All Dishes</h2>
                <p>Cum doctus civibus efficiantur in imperdiet</p>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-4 col-xl-3" data-cue="slideInUp">
                    <div class="item menu_item_grid">
                        <div class="item-img magnific-gallery" data-cue="slideInUp">
                            <img src="img-menu-plats/AllDishes.jpg" alt="menu item">
                            <div class="content">
                                <a href="img-menu-plats/AllDishes.jpg" title="Chicken with Garlic"
                                    data-effect="mfp-zoom-in"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <h3>We offer you the best All Dishes </h3>
                        <p> Hot Food </p>
                        <div class="price_box">
                            <span class="new_price">...DH</span>
                            {{-- <span class="old_price">${{ $item->price }}</span> --}}
                        </div>

                        <a href="javascript:void(0)" class="btn_1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">add to cart</a>
                        <a href="{{ route('plats') }}" class="btn_1">visit more</a>


                    </div>
                </div>

            </div>

            <div class="banner lazy">
                <p class="text-center"><a href="#0" class="btn_1 outline">Download Menu (PDF)</a></p>
            </div>

        </div>

    @endsection
