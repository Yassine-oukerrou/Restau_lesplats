@extends('layouts.frontend')
@section('title', 'combobox')
@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Your dishes in your hands</h1>
        <p>Take control of your plate and choose what you like</p>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="main_title center" data-cue="slideInUp">
            <span><em></em></span>
            <h2>Dish Additions</h2>
            <br>
            <span><em></em></span>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 20px">
        <div class="col-md-4 col-xl-3" data-cue="slideInUp">
            <div class="item menu_item_grid">
                <div class="item-img magnific-gallery" data-cue="slideInUp">
                    <img src="img-menu-plats/Pizza Au Poulet2.jpg" alt="menu item">
                </div>
                <h3>Choose what you wants </h3>
                <hr class="hr">
                <p>
                <form>
                    <p style="  color: rgb(240, 30, 65);
                    text-shadow: 2px 2px 4px #000000">saucer</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>choose</option>
                        <option value="1">Tomato sauce</option>
                        <option value="2">teriyaki sauce</option>
                    </select>
                </form>
                <form>
                    <p style="  color: rgb(240, 30, 65);
                    text-shadow: 2px 2px 4px #000000">cheese</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>choose</option>
                        <option value="1">Mozzarella cheese</option>
                        <option value="2">Provolone cheese</option>

                    </select>
                </form>
                <form>
                    <p style="  color: rgb(240, 30, 65);
                    text-shadow: 2px 2px 4px #000000">chicken</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>choose</option>
                        <option value="1"> Chicken breast</option>
                        <option value="2">Two</option>
                        <option value="3"> Chicken thighs</option>
                    </select>
                </form>
                </p>
                <hr>
                <button
                    class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" style="margin: 5px" onclick="swal()">
                    Add
                </button>
            </div>
        </div>
    </div>
    <!-- script for alert ...-->
    <script>
        function swal() {
            Swal.fire(
                'excellent choice!',
                'Thank you sir, your choice will be added',
                'success'
            );
        }
    </script>
@endsection
