@extends('layouts.app')

@section('cover-text')
<div class="text-style-p1-about">
    <h1 class="big-text-about">Новости</h1>
</div>
@endsection

@section('content')
	<section class="section_news">
		<div class="wrapper_news">
			<!-- <h2 class="h2_news">Новости</h2> -->

			<div class="all_boxs_style">
				<div class="box1_style">
					<div>
						<a class="a_headlines_news" href="{{ url('/news/1') }}" target="_blank">
							<img class="img_news" src="{{ asset ('img/details_interior.jpg') }} " alt="details_interior">
						</a>
					</div>
					<h3 class="h3_news"><a class="a_headlines_news" href="{{ url('/news/1') }}" target="_blank">Детали в интерьере</a></h3>
				</div>

				<div class="box2_style">
					<div>
						<a class="a_headlines_news" href="{{ url('/news/2') }}" target="_blank">
							<img class="img_news" src="{{ asset ('img/plant.jpg') }}" alt="plants influence">
						</a>
					</div>
					<h3 class="h3_news"><a class="a_headlines_news" href="{{ url('/news/2') }}" target="_blank">Как растения влияют на твою жизнь</a></h3>
				</div>
			</div>

			<div class="all_boxs_style">
				<div class="box3_style">
					<div>
						<a class="a_headlines_news" href="{{ url('/news/3') }}" target="_blank">
							<img class="img_news" src="{{ asset ('img/m.jpg') }} " alt="details_interior">
						</a>
					</div>
					<h3 class="h3_news"><a class="a_headlines_news" href="{{ url('/news/3') }}" target="_blank">Монохромный интерьер</a></h3>
				</div>

				<div class="box2_style">
					<div>
						<a class="a_headlines_news" href="{{ url('/news/4') }}" target="_blank">
							<img class="img_news" src="{{ asset ('img/color_influence.jpg') }}" alt="plants influence">
						</a>
					</div>
					<h3 class="h3_news"><a class="a_headlines_news" href="{{ url('/news/4') }}" target="_blank">Влияние цвета на психологический комфорт</a></h3>
				</div>
			</div>

			<div class="all_boxs_style">
				<div class="box1_style">
					<div>
						<a class="a_headlines_news" href="{{ url('/news/5') }}" target="_blank">
							<img class="img_news" src="{{ asset ('img/cozy_interior.jpg') }} " alt="details_interior">
						</a>
					</div>
					<h3 class="h3_news"><a class="a_headlines_news" href="{{ url('/news/5') }}" target="_blank">Создание уютного интерьера</a></h3>
				</div>

				<div class="box2_style">
					<div>
						<a class="a_headlines_news" href="{{ url('/news/6') }}" target="_blank">
							<img class="img_news"  src="{{ asset ('img/mirror.jpg') }}" alt="plants influence">
						</a>
					</div>
					<h3 class="h3_news"><a class="a_headlines_news" href="{{ url('/news/6') }}" target="_blank">Подбор зеркал</a></h3>
				</div>
			</div>
		</div>
	</section>
		
@endsection
