@extends('layouts.app')


@section('content')
<section class="section1_news">
    <div class="wrapper_news_section1">
        <div class="style_news_section1">
            <div>
                <h2 class="h2_section1_news">Детали в интерьере</h2>
                <div class="text_news">Зачастую, читая интервью известных дизайнеров интерьера можно натолкнуться на фразы: «Я увидел эту люстру, и весь интерьер сразу сложился в моей голове», «Цвет диванной обивки задал гамму всеми интерьеру». Разумеется, не профессионалам не стоит «плясать от дивана», однако понять, какую роль играют в интерьере детали, и как их правильно использовать, важно абсолютно для всех.</div>
                <div class="text_news">В роли интерьерных аксессуаров обычно выступают небольшие предметы, выполняющие в большей степени декоративную роль, хотя и не лишенные практической ценности. Яркие вазы, картины и скульптура, постеры, часы и необычные светильники, диванные подушки и коврики, любимая коллекция морских раковин или винотека — правильным образом оформленные и представленные, почти любые предметы могут стать настоящим украшением интерьера. Таких вещей не обязательно должно быть много, тем более, не обязательно тратить на них внушительные суммы, ведь украсить комнату может не только полотно известного мастера, но и рисунок вашего ребенка, вставленный в красивую раму.</div>
            </div>
            <div>
                <img class="img_news news_second_photo" src="{{ asset ('img/news1_1.jpg') }}" />
            </div>
        </div>

        <div class="style_news_section1">
        <div>
                <img class="img_news news_second_photo" src="{{ asset ('img/news1_2.jpg') }}" />
            </div>
            <div>
                <div class="text_news">Памятка: даже если над вашим интерьером работает профессиональный дизайнер, разбираться в приметах избранного стиля будет не лишним, ведь именно вам предстоит жить в этой квартире. Даже самый гармоничный и продуманный интерьер способен «убить» один предмет «не из той оперы», подаренный любимыми друзьями или привезенный из очередного путешествия.</div>
                <div class="text_news">Памятка: не забывайте про «живой» декор: аквариумы, комнатные растения и цветы. Им найдется место в любом интерьере. Главное не переборщить, превращая гостиную или спальню в зимний сад.</div>
            </div>
        </div>

        <div class="style_news_section1">
            <div>
                <div class="text_news">Совет: в небольшом помещение определите один центр интерьера, например, композицию предметов на кофейном столике или стене напротив входа, сделав его декоративным акцентом, а остальные части помещения не перегружайте деталями.</div>
                <div class="text_news">Памятка: элементы декора, собранные в единую композицию, должны соответствовать по масштабу плоскости, на которой они расставлены, однако не занимать ее целиком. Мелкие предметы лучше собрать на подносе или вазе, слишком низкие — поставить поверх пары книг или декоративной шкатулки.</div>
                <div class="text_news">Памятка: избегайте абсолютной симметрии, ведь ее не бывает в живой природе! Для прикроватных тумбочек лучше выбрать разные по форме, но схожие по стилю, лампы, а книжные полки «разбавить» вазочками, фотографиями или сувенирами. Старайтесь заменить симметрию ритмом, придающим интерьеру динамичность и ощущение живого, меняющегося пространства.</div>
                <div class="text_news">Дорогие вещи — не гарантия того, что дизайн порадует глаз. Как оформить пространство так, чтобы не испортить вид квартиры, где находится золотая середина, как сделать стильный ремонт, не тратя на него целое состояние? </div>
            </div>
            <div>
                <img class="img_news" src="{{ asset ('img/news1_3.jpg') }}" />
            </div>
        </div>
    </div>
</section>
@endsection