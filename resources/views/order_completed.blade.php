@extends('layouts.app')

@section('cover-text')
<div class="text-style-p1-about extra-padding">
    <h1 class="big-text-about">Будь в тренде вместе с - DY</h1>
</div>
@endsection

@section('content')
<div class="style_box_for_our_history" id="page__section_1">
    <div class="box_for_our_history">
        <img class="photo_for_our_history" src="{{ asset ('img/подложка под текст наша истрория.png') }}">
    </div>

    <div class="text_box_for_our_history">
        <div class="h2_black">Наша история</div>
        <div class="text_black">Наша история начинается с 2006 года. Компания «DY» - это стремительно растущее, прогрессирующее предприятие, которая обладает широкими технологическими возможностями, различной номенклатурой изготовляемой продукции.</div>
        <div class="text_black">На сегодняшний день компания «DY» является чрезвычайно прогрессирующей компанией, которая специализируется на изготовлении мебели европейского класса. Мы ориентируемся на клиентов, которые предпочитают прекрасное качество жизни и классическое дизайнерское решение.</div>
        <div class="text_black">Название нашей компании - «DY» – образовано от инициалов основателя компании Diana Yshina (Диана Юшина)</div>
    </div>
</div>

<div class="wrapper">
    <div class="section2_style" id="page__section_2">
        <div>
            <img class="photo_our_workers" src="{{ asset ('img/фото наше производство.png') }}">
        </div>

        <div class="class_box_for_our_work">
            <div class="h2_black">Наше производство</div>
            <div class="text_black_2">В основе нашего производства мебели «DY» лежит принцип технологической специализации. Каждый участок производства осуществляет непосредственно свои определенные операции, при этом доводя их до совершенства. Наше оборудование для производства мебели позволяет обрабатывать детали с высокой точностью. Именно это и дало возможность за довольно короткий срок достичь очень высокого качества продукции и занять достойное положение в мебельной отрасли.</div>
            <div class="orange_text_style">
                <div class="orange_text">100+ продуктов</div>
                <div class="orange_text">1000+ клиентов</div>
                <div class="orange_text">100+ К</div>
            </div>
        </div>
    </div>


    <div class="section2_style" id="page__section_3">
        <div class="class_box_for_our_work2 text_none_mobile">
            <div class="h2_black">Наша компания</div>
            <div class="text_black_2">На сегодняшний день компания «DY» является чрезвычайно прогрессирующей компанией, которая специализируется на изготовлении мебели европейского класса. Мы ориентируемся на клиентов, которые предпочитают прекрасное качество жизни и классическое дизайнерское решение.</div>
            <div class="text_black_2">Благодаря этому мебель для своего дома может купить каждый желающий по единой цене.</div>
            <div class="orange_text_style">
                <div class="orange_text">100+ продуктов</div>
                <div class="orange_text">1000+ клиентов</div>
                <div class="orange_text">100+ К</div>
            </div>
        </div>
       
        <div>
            <img class="photo_our_work" src="{{ asset ('img/фото наши работы.png') }}">
        </div>


        <div class="class_box_for_our_work2 text_none_desktop" id="page__section_3">
            <div class="h2_black">Наша компания</div>
            <div class="text_black_2">На сегодняшний день компания «DY» является чрезвычайно прогрессирующей компанией, которая специализируется на изготовлении мебели европейского класса. Мы ориентируемся на клиентов, которые предпочитают прекрасное качество жизни и классическое дизайнерское решение.</div>
            <div class="text_black_2">Благодаря этому мебель для своего дома может купить каждый желающий по единой цене.</div>
            <div class="orange_text_style">
                <div class="orange_text">100+ продуктов</div>
                <div class="orange_text">1000+ клиентов</div>
                <div class="orange_text">100+ К</div>
            </div>
        </div>
    </div>
</div>


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
                        <img src="{{ asset ('img/icon_pensil.png') }}">
                    </div>
                    <div class="h4_white">Проектирование</div>
                    <div class="text_white">Наша креативная команда дизайнеров и проектировщиков  создают мебель с использованием самых новейших технологий</div>
                </div>

                <div class="content_for_orange_box2">
                    <div class="icons_style_for_orange_box">
                        <img src="{{ asset ('img/icon_молоток.png') }}">
                    </div>
                    <div class="h4_white">Создание</div>
                    <div class="text_white">Для создания нашего продукта мы используем только натуральное и качественное сырье.</div>
                </div>

                <div class="content_for_orange_box3">
                    <div class="icons_style_for_orange_box">
                        <img src="{{ asset ('img/icon_internet.png') }}">
                    </div>
                    <div class="h4_white">Интернет коммерция</div>
                    <div class="text_white">Огромная команда креативных программистов, дизайнеров, маркетологов, кооператоров создают для Вас удобный, качественное и полезный сайт.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="section_4">
        <div class="box_for_video">
            <video class="video_work" controls="controls" poster="{{ asset ('img/photo_for_video.png') }}">
                <source src="{{ asset ('img/video/woood.mp4') }}">
            </video>    

            <div class="instagram_text_style">
                <div class="instagram_text">
                    <a class="a_instagram_text" href="https://www.instagram.com/p/CbibBuIF26u/" target="_blank">
                        <img  class="instagram_photo_text" src="{{ asset ('img/icon_instagram.png') }}">
                     </a>
                </div>
            </div>
        </div>
    </div>

    

    <div class="section5" id="page__section_5">
        <div class="h2_partners">Наши партнеры</div>
        <div class="partners_style">
            <div class="box_for_photo_partners">
                <img  class="photo_partners" src="{{ asset ('img/partners/forest_icon.png') }}">
            </div>
            <div class="box_for_photo_partners">
                <img class="photo_partners" src="{{ asset ('img/partners/green_icon.png') }}">
            </div>
            <div class="box_for_photo_partners">
                <img class="photo_partners"  src="{{ asset ('img/partners/house_icon.png') }}">
            </div>
            <div class="box_for_photo_partners">
                <img class="photo_partners" src="{{ asset ('img/partners/men_icon.png') }}">
            </div>
            <div class="box_for_photo_partners">
                <img class="photo_partners" src="{{ asset ('img/partners/peace_icon.png') }}">
            </div>
            
        </div>

<div class="averLay"></div>
<div class="modal-window">
    <div class="successful_message_modal">
        <div class="text_pament_success_modal">Ваш заказ прошел успешно</div>
        <div>
            <img src="{{ asset ('img/success.png') }}">
        </div>
        <div class="text_thanks_modal">Спасибо за покупку!</div>
    </div>
    <a href="{{ url('/') }}" class="modal-close">×</a>
</div>
@endsection
