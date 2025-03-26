@extends('layouts.app')

@section('cover-text')
@endsection

@section('content')
<div class="section_3" id="page__section_4">
        <div class="section_3_style">
            <div class="orange_boxs">
                <div>
                    <img class="orange_photo" src="{{ asset ('img/orange_.png') }}">
                </div>

                <div>
                    <img class="orange_photo" src="{{ asset ('img/orange_.png') }}">
                </div>

                <div>
                    <img class="orange_photo" src="{{ asset ('img/orange_.png') }}">
                </div>

                <div class="content_for_orange_box1">
                    <div class="icons_style_for_orange_box">
                        <span id="icon_delivery" class="material-symbols-outlined">local_shipping</span>
                    </div>
                    <div class="h4_white">Доставка</div>
                    <div class="text_white">Доставка осуществляется курьером по адресу, который вы указали на сайте. Курьер позвонит Вам и уточнит все детали.</div>
                </div>

                <div class="content_for_orange_box2">
                    <div class="icons_style_for_orange_box">
                        <span id="icon_delivery" class="material-symbols-outlined">home_work</span>
                    </div>
                    <div class="h4_white">Изменение адреса доставки</div>
                    <div class="text_white">В случае изменения пункта назначения, сообщите об этом курьеру по телефону.</div>
                </div>
                <div class="content_for_orange_box3">
                    <div class="icons_style_for_orange_box">
                        <span id="icon_delivery"class="material-symbols-outlined">departure_board</span>
                    </div>
                    <div class="h4_white">Время доставки</div>
                    <div class="text_white">Доставка осуществляется на следующий день после покупки в любое удобное для Вас время с 7.00 до 22.00.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="delivery_style">
        <div>
            <span id="icon_priority_high" class="material-symbols-outlined">priority_high</span>
        </div>

        <div class="delivery_text">
            Доставка осуществляется только по Беларуси и абсолютно бесплатно
        </div>
    </div>

       


@endsection
