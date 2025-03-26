@extends('layouts.app')

@section('content')

@foreach($order_hist_arr as $order)


<div class="orders_history_user_name">Ваши покупки: {{ $order->date }}</div>
<section class="section1_products">
        <div class="wrapper_products">

    @foreach($order->products as $prod)
    <div class="box_products">
            <div class="img_products_style">
                <img  class="img_products" src="{{ asset ($prod->picture) }}">
            </div>
            <div class="name_products">{{ $prod->name }}</div>
            <div class="style_border_products">
                <div class="border_products"></div>
            </div>
            <div class="small_description_products">{{ $prod->description_small }}</div>
            <div class="description_products">{{ $prod->description }}</div>
            <div class="style_photo_price">
                <div>
                    <a class="addCart" id="good-{{ $prod->id }}-{{ $prod->price }}" href="#">
                        <i id="basket_product_categories" class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    </a>
                </div>
                <div>
                    <div class="product_price">{{ $prod->price }} p.</div>
                </div>

            </div>

            <div class="price_on_photo">{{ $prod->status }} p.</div>

            <div>
                <a href="{{ url('/') }}">
                    <span id="icon_like" class="material-symbols-outlined">heart_plus</span>
                </a>
            </div>
        </div>
            <!-- <div class="box_products">
                <div class="img_products_style">
                    <img  class="img_products" src="{{ asset ($prod->picture) }}">
                </div>
                <div class="name_products">{{ $prod->name }}</div>
                <div class="small_description_products">{{ $prod->description_small }}</div>
                <div class="style_photo_price">
                    <div>
                        <a class="addCart" id="good-{{ $prod->id }}-{{ $prod->price }}" href="#">
                            <i id="basket_product_categories" class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div>
                        <div class="product_price">{{ $prod->price }} p.</div>
                    </div>
                </div>
                <div class="price_on_photo">{{ $prod->status }} p.</div>
                <div>
                    <a href="{{ url('/') }}">
                        <span id="icon_like" class="material-symbols-outlined">heart_plus</span>
                    </a>
                </div>
            </div> -->
        <!-- </div> -->
    <!-- </div> -->

    @endforeach
    <!-- </div>        -->
</div>
</section>
@endforeach


@endsection
