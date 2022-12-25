@extends('layouts.app')

@section('content')

    <table class="style-border-table" width="100%" class="table table-bordered" > 
        <tr class="border-table">
            <th class="heading_basket_form" width="120px">PICTURE</th>
            <th class="heading_basket_form">NAME OF PRODUCT</th>
            <th class="heading_basket_form">PRICE, $</th>
            <th class="heading_basket_form">COUNT</th>
            <th class="heading_basket_form">SUM</th>
            <th class="heading_basket_form">DELETE</th>
        </tr>


        @php
            $sum = 0;
        @endphp
        @foreach($products_arr as $prod)
            <tr class="border-table">
                <td> <img width="100%" height="150px" class="ph-p2-products" src="{{ asset($prod->picture) }}"></td>
                <td class="row2-style-table">{{ $prod->name }}</td>
                <td class="row2-style-table">{{ $prod->price }}</td>
                <td class="row2-style-table">
                    <form action="{{asset('basket/count/'.$prod->id)}}" method="post">
                        @csrf
                        <input class="input_style" type="number" min="1" name="{{ $prod->id }}" value="{{ $products_count[$prod->id] }}">
                         <button class="button_use" tupe="submit">USE</button>
                    </form>
                </td>
                <td class="style_text_sum">
                    @php
                        $count_value = $products_count[$prod->id]*$prod->price;
                        $sum+=$count_value;
                    @endphp
                    {{ $count_value }} $
                </td>
                <td><a class="clean_button" href="{{asset('/basket/delete/'.$prod->id)}}">&times;</a></td>
            </tr>
        @endforeach
    </table>

    <div class="style_total_sum ">TOTAL SUM: {{$sum}}<span>$</span></div>


<!-- форма  -->
<form class="form-style-basket" action="{{ url('/basket/order') }}" method="post">
    @csrf
	<div class="form-text">ENTER YOUR USER NAME</div>
	<input class="intut-stale_text_form" type="text" name="user_name" placeholder="name">
	<div class="form-text">ENTER YOUR EMAIL</div>
	<input class="intut-stale_text_form" type="email" name="email" placeholder="email">
	<div class="form-text">ENTER YOUR PHONE</div>
	<input class="intut-stale_text_form" type="phone" name="phone" placeholder="phone">
	<div class="form-text">ENTER YOUR DELIVERY COUNTRY</div>
	<input class="intut-stale_text_form" type="text" name="country" placeholder="country">
	<div class="form-text">ENTER YOUR DELIVERY CITY</div>
	<input class="intut-stale_text_form" type="text" name="city" placeholder="city">
	<div class="form-text">ENTER YOUR DELIVERY ADDRESS</div>
	<input class="intut-stale_text_form" type="text" name="address" placeholder="address">
	<div class="button-style-bascet-form">
		<button class="reset-form-basket" type="reset" value="Reset">RESET</button>
		<button class="submit-form-basket" id="submit-form-basket" type="submit" value="Submit">SUBMIT</button>
	</div>
</form>


@endsection
