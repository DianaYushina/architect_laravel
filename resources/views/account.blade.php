@extends('layouts.app')

@section('content')
	<section class="section_account">
		<div class="section_account_style">
			<div class="background_account">
				<img class="background_account_photo" src="{{ asset ('img/bagraund_account.jpg') }}">
			
				<div class="account_links_style">
					<h2 class="h2_account">Добро пожаловать,{{auth()->user()->name}}!</h2>

					<div class="accout_photo">
						<img class="user_photo" src="{{ asset(end($media_arr)) }}">
					</div>

				
					<div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/account') }}" target="_blank">
								<span class="material-symbols-outlined">account_circle</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/account') }}" target="_blank">Профиль</a>
						</div>
					</div>



					<!-- <div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/') }}" target="_blank">
								<span class="material-symbols-outlined">shopping_cart</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/') }}" target="_blank">Корзина товаров</a>
						</div>
					</div>
					 -->
					<div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/') }}" target="_blank">
								<span class="material-symbols-outlined">favorite</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/favorite') }}" target="_blank">Отложенные товары</a>
						</div>
					</div>

					<!-- <div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/') }}" target="_blank">
								<span class="material-symbols-outlined">history</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/') }}" target="_blank">Просмотренные товары</a>
						</div>
					</div> -->
					
					<div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/') }}" target="_blank">
								<span class="material-symbols-outlined">overview</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/orderHistory') }}" target="_blank">История покупок</a>
						</div>
					</div>


					<!-- <div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/') }}" target="_blank">
								<span class="material-symbols-outlined">add_card</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/') }}" target="_blank">Банковская карта</a>
						</div>
					</div> -->

					<!-- <div class="icon_text_box">
						<div class="icon_account_menu">
							<a class="a_icon_account_style" href="{{ url('/') }}" target="_blank">
								<span class="material-symbols-outlined">person_off</span>
							</a>
						</div>
						<div class="text_account_menu">
							<a class="a_text_account_style" href="{{ url('/') }}" target="_blank">Удалить профиль</a></div>
						</div>
					</div> -->
				</div>
			</div>

				
			

				<div class="wrapper_form_accaunt">
					<form class="form_photo" method="post" action="{{ asset ('account/') }}" enctype="multipart/form-data">
						@csrf
						<div>
							<label for="avatar" class="lable_forms">Загрузите фото вашего профиля</label>
							<input class="form-control" name="avatar" type="file" id="avatar">
							
						</div>
						<button class="bnt_submit" type="submit">добавить</button>
					</form>

					<form class="account-form-style-basket" action="{{ url('/account/update') }}" method="post">
   					 @csrf
						<div class="lable_forms">Введите имя</div>
						<input class="intut-stale_text_form" type="text" name="name" placeholder="Диана">
						<div class="lable_forms">Введите адрес электронной почты</div>
						<input class="intut-stale_text_form" type="email" name="email" placeholder="di123@gmail.com">
						<div class="lable_forms">Введите ваш контактный телефон</div>
						<input class="intut-stale_text_form" type="phone" name="phone" placeholder="+37525 663 15 18">
						<div class="lable_forms">Укажите страну доставки</div>
						<input class="intut-stale_text_form" type="text" name="country" placeholder="Беларусь">
						<div class="lable_forms">Укажите город доставки</div>
						<input class="intut-stale_text_form" type="text" name="city" placeholder="Шклов">
						<div class="lable_forms">Укажите адрес доставки</div>
						<input class="intut-stale_text_form" type="text" name="address" placeholder="Якуба Коласа 1">
						<div class="button-style-bascet-form">
							<button class="account-reset-form-basket" type="reset" value="Reset">отменить</button>
							<button class="account-submit-form-basket" id="submit-form-basket" type="submit" value="Submit">сохранить</button>
						</div>
					</form>
				</div>



				


			</div>
	</section>

	<!-- <form method="post" action="{{ asset ('account/') }}" enctype="multipart/form-data">
		@csrf
		<div class="mb-3">
  			<label for="avatar" class="form-label">add avatar</label>
  			<input class="form-control" name="avatar" type="file" id="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form> -->
		
@endsection
