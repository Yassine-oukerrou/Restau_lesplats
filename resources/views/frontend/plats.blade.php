@extends('layouts.frontend')
@section('title', 'Les PLats')
@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Les PLats</h1>
        <p>Cooking delicious and tasty food since</p>
    </div>
@endsection
@section('content')
    <section class="about" id="about" style="margin: 2px">

        <div class="image">
            <img src="img-menu-plats/about-img.png" width="40" alt="">
        </div>

        <div class="content">
            <h3 class="title">Welcome</h3>
            <p>We hope you like our dishes </p>

            <div class="icons-container">
                <div class="icons">
                    <img src="img-menu-plats/about-icon-1.png" alt="">
                    <h3>Foods</h3>
                </div>
                <div class="icons">
                    <img src="img-menu-plats/about-icon-2.png" alt="">
                    <h3>drinks</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main_title center" data-cue="slideInUp">
                <span><em></em></span>
                <h2>All Dishes</h2>
                <br>
                <span><em></em></span>
            </div>
        </div>
        <!-- plats-->
        <section class="container margin_120_100">
            <div class="row">
                <div class="col-xl-4">
                    <!-- linke combobox-->
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Pizza Au Poulet.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Pizza Au Poulet</h3>
                            <p>Pizza topped with chicken, tomato sauce ,cheese
                                .Click to add your favourites</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <!-- linke combobox-->
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Pizza Fruit De Mere.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Pizza Fruit De Mere</h3>
                            <p>dish that combines seafood and pizza toppings. Click to add your favourites</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Spaghetti.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Spaghetti </h3>
                            <p>A dish served with sauces, decorated with cheese and vegetables or meat.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Salmon.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Salmon</h3>
                            <p>Salmon as an appetizer with mustard and dill sauce or pickled herring.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Sandwich Au Poul.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Sandwich Au Poul</h3>
                            <p>Bread, chicken, lettuce, tomato, and sauce (such as mayonnaise)</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/burger.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Burger</h3>
                            <p>A sandwich with a slice of ground beef, served between two slices of bread.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="main_title center" data-cue="slideInUp">
                <span><em></em></span>
                <h2>All drinks</h2>
                <br>
                <span><em></em></span>
            </div>
        </div>
        <!-- drinks-->
        <section class="container margin_120_100">
            <div class="row">
                <div class="col-xl-4">
                    <!-- linke combobox-->
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Lemonad.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Lemonade</h3>
                            <p>Coca cola, Fanta, Sprite,Click to add your favourites </p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <!-- linke combobox-->
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/Fruit juice.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Fruit juice</h3>
                            <p>juice include oranges, apples, grapes, pineapples, and cranberries, among others</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="{{ route('combobox') }}" class="img_container">
                        <img src="img-menu-plats/energy drinks.jpg" class="lazy">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <h3>Energy Drinks </h3>
                            <p> Red Bull
                                Monster Energy
                                Rockstar Energy
                                NOS Energy Drink
                                Bang Energy
                                <br>
                        </div>

                    </a>

                </div>
        </section>
        <!--bd-->
        <div class="container margin_60_40" data-cues="slideInUp">
            <div class="main_title center">
                <span><em></em></span>
            </div>

            <div class="row justify-content-center magnific-gallery mb-5">
                @if (!@empty($data))
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $info)
                        <div class="col-md-4 col-xl-3" data-cue="slideInUp">
                            <div class="item menu_item_grid">
                                <div class="item-img" data-cue="slideInUp">
                                    <img src="imgCrud/{{ $info->photo }}" alt="">
                                    <div class="content">
                                        <a href="imgCrud/{{ $info->photo }}" title="Photo title"
                                            data-effect="mfp-zoom-in"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                                <h3>{{ $info->name }}</h3>
                                <p>{{ $info->components }}</p>
                                <p>{{ $info->category }}</p>
                                <div class="price_box">
                                    <span class="new_price">{{ $info->new_price }}DH</span>
                                    <span class="old_price">{{ $info->old_price }}DH</span>
                                </div>
                                <button type="submit" onclick="combobox()"
                                    class="py-2 px-4 bg-blue-400 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                    Select Add-ons
                                </button>
                                <a class="btn_1 add_to_cart" href="#">
                                    @if ($info->available == 1)
                                        ready
                                    @else
                                        not ready
                                    @endif
                                </a>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                @else
                @endif

            </div>
            <script>
                function combobox() {
                Swal.fire({
                    title: 'Select Add-ons ',
                    html: `

            <form class="bg-white shadow-md rounded "  >
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="available">
                    saucer
                </label>
                <select name="available" id="available"
                    class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">choose</option>
                    <option value="#">Tomato sauce</option>
                    <option value="#">teriyaki sauce</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="available">
                    cheese
                </label>
                <select name="available" id="available"
                    class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">choose</option>
                    <option value="#">Mozzarella cheese</option>
                    <option value="#">Provolone cheese</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="available">
                    chicken
                </label>
                <select name="available" id="available"
                    class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">choose</option>
                    <option value="#">Chicken breast</option>
                    <option value="#">Chicken thighs</option>
                </select>
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="bg-blue-500  hover:bg-blue-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Add
                </button>

            </div>
            </form>



            `,
                    showCancelButton: false,
                    showConfirmButton: false
                });
            };

            </script>

        @endsection
