@extends('layouts.app')

@section('content')
@foreach($categories as $cat)
    <h2 class="h2_categories_style">{{ $cat->name }}</h2>

    <div class="bord-p2-product-main1">
        <div class="photo-style-p2-produsts">
        @foreach($products as $prod)
        @if ($prod->category_id == $cat->id)
            <div class="s-f_p2_products">
                <img class="ph-p2-products" src="{{ asset($prod->picture) }}">
                <a class="addCart" id="good-{{ $prod->id }}-{{ $prod->price }}" href="#">
                    <img class="pos-product-order" src="{{ asset('img/123.png') }}" width="40px">
                </a>
                <div>
                    <div class="t-product-p">{{ $prod->name }}</div>
                    <div class="price_product">${{ $prod->price }}</div>
                    <div class="text-product-p">{{ $prod->description_small }}</div>
                    <div>
                        <!-- <div class="stars-{{ $prod->stars }}"></div> -->
                        <div class="material-icons">
                            <?php  
                                echo str_repeat("star ", $prod->stars);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
        </div>
    </div>  
@endforeach
@endsection
