@extends('layouts.app')

@section('cover-text')
<div class="text-style-p1-about">
    <h1 class="big-text-about">Контакты</h1>
</div>
@endsection

@section('content')
    <section class="contacts_section">
        <div class="wrapper_contacts">
            <div class="contacts_style">
                <div class="info_style_contacts">
                    <div class="info_contacts">
                        <div class="contacts_blok_1">
                            <a class="a_contacts" href="tel:375256631518" target="_blank">
                                <div class="icon_contacts"><span id="icon_contacts" class="material-symbols-outlined">phone_in_talk</span></div>
                                <div class="text_contacts"><span class="bold_text_contacts">Контактный телефон:</span><br> +37525 663 15 18</div>
                            </a>
                        </div>

                        <div class="contacts_blok_1">
                            <a class="a_contacts" href="https://www.google.com/search?q=%D1%88%D0%BA%D0%BB%D0%BE%D0%B2+%D1%8F%D0%BA%D1%83%D0%B1%D0%B0+%D0%BA%D0%BE%D0%BB%D0%BE%D1%81%D0%B01&rlz=1C5CHFA_enBY878BY878&oq=%D1%88%D0%BA%D0%BB%D0%BE%D0%B2+%D1%8F%D0%BA%D1%83%D0%B1%D0%B0+%D0%BA%D0%BE%D0%BB%D0%BE%D1%81%D0%B01&aqs=chrome..69i57j33i10i160l5.10714j0j7&sourceid=chrome&ie=UTF-8" target="_blank">
                                <div class="icon_contacts"><span id="icon_contacts"class="material-symbols-outlined">location_on</span></div>
                                <div class="text_contacts"><span class="bold_text_contacts">Адрес:</span><br>Шклов, Якуба Коласа 1</div>
                            </a>
                        </div>

                        <div class="contacts_blok_1">
                            <a class="a_contacts" href="tel:375256631518" target="_blank">
                                <div class="icon_contacts"><span class="material-symbols-outlined">phone_in_talk</span></div>
                                <div class="text_contacts"><span class="bold_text_contacts">График работы: </span><br>Пн. - Пят. с 9.00 до 21.00 <br>Сб. - Вс. с 10.30 до 21.30</div>
                            </a>
                        </div>
                    </div>
                    <div class="sosial_media_contacts">
                        <div class="media_contacts">
                            <a href="https://www.linkedin.com/in/diana-yushyna-785b281b7/" target="_blank">
                                <img class="img_media" src="{{ asset ('img/in.svg') }}">
                            </a>
                        </div>

                        <div class="media_contacts">
                            <a href="https://t.me/Diana_Yshina" target="_blank">
                                <img class="img_media" src="{{ asset ('img/telegram.svg') }}">
                            </a>
                        </div>

                        <div class="media_contacts">
                            <a href="https://www.instagram.com/diana_yushyna/" target="_blank">
                                <img class="img_media" src="{{ asset ('img/instagram.svg') }}">
                            </a>
                        </div>

                        <div class="media_contacts">
                            <a href="https://www.behance.net/dianay_ushyna" target="_blank">
                                <img class="img_media" src="{{ asset ('img/Be.svg') }}">
                            </a>
                        </div>

                        <div class="media_contacts">
                            <a href="https://www.pinterest.com/diana_yushyna/pins/" target="_blank">
                                <img class="img_media" src="{{ asset ('img/Pinterest.svg') }}">
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <img class="map_contacts" src="{{ asset ('img/map.png') }}">
                </div>
            </div>
        </div>
    </section>
@endsection
