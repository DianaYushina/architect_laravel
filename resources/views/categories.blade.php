@extends('layouts.app')

@section('cover-text')
<div class="text-style-p1-about">
    <h1 class="big-text-about">Категории</h1>
</div>
@endsection

@section('content')
<section class="section1_products">
  
@foreach($categories as $cat)
    <h2 class="h2_categories_style">{{ $cat->name }}</h2>
    <div class="wrapper_products">
        @foreach($products as $prod)
        @if ($prod->category_id == $cat->id)
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
                                <!-- <img class="photo_basket" src="{{ asset ('img/корзина иконка.png') }}"> -->
                            </a>
                        </div>
                        <div>
                            <div class="product_price">{{ $prod->price }} p.</div>
                        </div>
                    </div>

                    <div class="price_on_photo">{{ $prod->status }} p.</div>

                    <div>
                        <form method="post" action="{{ asset('favorite/'.$prod->id) }}">
                            @csrf
                            <button type="submit" value="send">
                                <span id="icon_like" class="material-symbols-outlined">heart_plus</span>
                            </button>
                        </form>
                        <!-- <a href="{{ url('/') }}">
                            <span id="icon_like" class="material-symbols-outlined">heart_plus</span>
                        </a> -->
                    </div>
                </div>
            @endif
            @endforeach
        </div>  
@endforeach
</section>
@endsection
