@extends('layouts.app')

@section('content')
<div class="section_basket_order"></div>
     <!-- <table class="style-border-table" width="100%" class="table table-bordered" > 
        <tr class="border-table">
            <th class="heading_basket_form">Товар</th>
            <th class="heading_basket_form">Имя товара</th>
            <th class="heading_basket_form">Цена, р</th>
            <th class="heading_basket_form">Количество</th>
            <th class="heading_basket_form">Итоговоая сумма</th>
            <th class="heading_basket_form">Удалить товар</th>
        </tr>  -->


     @php
        $sum = 0;
    @endphp
    @foreach($products_arr as $prod)
    @if (isset($prod->id))
    <div>   
        <div class="style_basket_order">
            <div class="wrapper_order_basket">
                <div>
                    <img class="picture_product_order_basket" src="{{ asset($prod->picture) }}">
                </div>
                <div>
                    <div class="name_product_order_basket">{{ $prod->name }}</div>
                    <div class="price_product_order_basket">{{ $prod->price }} рублей</div>
                    <form action="{{asset('basket/count/'.$prod->id)}}" method="post">
                        @csrf
                        <input class="count_products_order_basket" type="number" min="1" name="{{ $prod->id }}" value="{{ $products_count[$prod->id] }}">
                        <button class="button_calculate_cost_order_basket" type="submit">рассчитать</button>
                    </form>
                
                    <div class="result_calculate_cost_order_basket">
                        @php
                            $count_value = $products_count[$prod->id]*$prod->price;
                            $sum+=$count_value;
                        @endphp
                        Всего: <span class="orange_result_calculate_cost_order_basket">{{ $count_value }} рублей</span>
                    </div>
                </div>

                <div>
                    <a class="clean_button_order_basket" href="{{asset('/basket/delete/'.$prod->id)}}">удалить</a>
                </div>
            </div>
        </div>
        



            
            @endif
        @endforeach
        <div class="order_basket_total_button">
            <div class="total_sum_order_basket">Итого: {{$sum}}<span>рублей</span></div>
            <div>
                <form class="form-style-basket" action="{{ url('/basket/order') }}" method="post">
                    @csrf
                    <button class="submit_button_order_basket" id="submit-form-basket" type="submit" value="Submit">оплатить</button>
                </form>
            </div>
        </div>
    </div>

    


@if ($user_id == -1)
<!-- форма  -->
<form class="form-style-basket" action="{{ url('/basket/order') }}" method="post">
    @csrf
	<div class="form-text">Введите ваше имя</div>
	<input class="intut-stale_text_form" type="text" name="user_name" placeholder="Имя">
	<div class="form-text">Введите ваш email</div>
	<input class="intut-stale_text_form" type="email" name="email" placeholder="Email">
	<div class="form-text">Введите номер телефона</div>
	<input class="intut-stale_text_form" type="phone" name="phone" placeholder="Телефон">
	<!-- <div class="form-text">ENTER YOUR DELIVERY COUNTRY</div>
	<input class="intut-stale_text_form" type="text" name="country" placeholder="country"> -->
	<div class="form-text">Укажите ваш город</div>
	<input class="intut-stale_text_form" type="text" name="city" placeholder="Город">
	<div class="form-text">Укажите ваш адрес</div>
	<input class="intut-stale_text_form" type="text" name="address" placeholder="Адрес">
	<div class="button-style-bascet-form">
		<button class="reset_button_order_basket" type="reset" value="Reset">удалить</button>
		<button  class="submit_button_order_basket"  id="submit-form-basket" type="submit" value="Submit">сохранить</button>
	</div>
</form>
@endif

@endsection
