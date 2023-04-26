@extends('layouts.frontend')
@section('title', 'Cart')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Order</h1>
        <p>Cooking delicious and tasty food since</p>
    </div>
@endsection
@section('content')

    <div class="bg_gray">
        <div class="container margin_60_40">
            <form action="" method="POST">
                @csrf
                <table class="table table-striped cart-list">
                    <thead>
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Subtotal
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                     
                                <tr>
                                    <td>
                                        <div class="thumb_cart">
                                            <img width="80" src=""
                                                data-src="" class="lazy" alt="Image">
                                        </div>
                                        <span class="item_cart">20 x 10</span>
                                    </td>
                                    <td>
                                        <strong>dh <span>20</span></strong>
                                    </td>
                                    <td>
                                        <div class="numbers-row">
                                            <input type="text" value="1" id="quantity_1"
                                                class="qty2" name="item_2">
                                            <div class="inc button_inc">+</div>
                                            <div class="dec button_inc">-</div>
                                        </div>
                                    </td>
                                    <td>
                                        <strong>$<span>20</span></strong>
                                    </td>
                                    <td class="options">
                                            <a href="" class="btn btn-link text-danger" type="submit"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                          
                    </tbody>
                </table>
                <div class="row add_top_30 flex-sm-row-reverse cart_actions">
                    <div class="col-sm-4 text-end">
                        <button type="submit" class="btn_1 outline">Update Cart</button>
                    </div>
                    <div class="col-sm-8">

                    </div>
                </div>
                <!-- /cart_actions -->
            </form>
        </div>
        <!-- /container -->
    </div>

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <ul>
                        <li>
                            <span>Subtotal</span> $ 20
                        </li>
                        <li>
                            <span>Delivery fee</span> $ 10
                        </li>
                        <li>
                            <span>Total</span> 20+10
                        </li>
                    </ul>
                    <a href="" class="btn_1 full-width cart">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->
@endsection
@section('scripts')
    <script src="{{ asset('assets/frontend/js/specific_shop.js') }}"></script>
@endsection
