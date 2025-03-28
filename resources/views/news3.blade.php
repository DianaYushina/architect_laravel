@extends('layouts.app')


@section('content')
<section class="section1_news">
    <div class="wrapper_news_section1">
        <div class="style_news_section1">
            <div>
                <img class="img_news news_second_photo" src="{{ asset ('img/news3_1.jpg') }}" />
            </div>
            <div>
                <h2 class="h2_section1_news">Монохромный интерьер</h2>
                <div class="text_news">В монохромном интерьере за основу берется один цвет, а его оттенки становятся вспомогательными элементами. Это не обязательно черный и белый, можно использовать и яркие цвета, успокаивая их менее интенсивными тонами.</div>
                <div class="text_news">Преимущества монохромного интерьера. Монохромный интерьер никогда не выйдет из моды, а спустя годы, если доминантный цвет начнет надоедать, образ легко разбавить другими тонами. Кроме того, можно использовать текстуры — комбинировать матовые и глянцевые поверхности, кожу и шерсть, стекло и ткань.</div>
                <div class="text_news">Основные правила создания монохромного интерьера. Пространство, которое выполнено в одном цвете, может казаться “плоским”. Поэтому важно избавиться от этого ощущения и придать объем с помощью текстур и разных поверхностей. Чтобы образ стал целостным и “сложился”, наполняйте комнату деталями постепенно. </div>
            </div> 
        </div>

        <div class="style_news_section1">
            
            <div>
                <div class="text_news">Начните с крупных объемов (стен, пола, потолков), затем добавляйте предметы (диван, кресла, столы, стулья). Проверьте, сочетаются ли они с общим тоном пространства и между собой. Совсем мелкие детали — элементы декора — могут слегка разбавлять картину и быть контрастными.</div>
                <div class="text_news">Ольга Куйвашева и Надежда Каракаш считают, что дизайнер — это в первую очередь психолог, поэтому, когда заказчики попросили их оформить всю квартиру, включая детские комнаты, в серых и черных тонах, они не стали спорить, а начали подбирать решения для монохрома. Во “взрослой” части квартиры цвета нет: интерьер кухни-гостиной похож на лунный пейзаж. Дизайнеры даже решили обыграть эту тему и поместили на одну из стен огромный лунный диск.</div>
            </div>
            <div>
                <img class="img_news news_second_photo" src="{{ asset ('img/news3_2.jpg') }}" />
            </div>
        </div>

        <div class="style_news_section1">
            <div>
                <img class="img_news" src="{{ asset ('img/news3_3.jpg') }}" />
            </div>

            <div>
                <div class="text_news">Секрет в обилии фактур и нюансах отделки: кирпичная кладка и бетонный потолок с балками и подтеками раствора выкрашены в белый цвет, на пол уложен укрупненный английский паркет из дуба, вдоль окон сделана минималистичная отбивка стены — переосмысленный вариант буазери, который за диваном превращается в классические панели. А в санузлах уложена квадратная мозаика с темной затиркой, которая в сочетании с текстурой мрамора и бетона задает красивый выверенный ритм.</div>
                <div class="text_news">Не каждый согласится жить в такой аскетичной обстановке, но здесь желания архитектора и владельцев квартиры совпали. Большую часть времени заказчики проводят за городом, в Минск приезжают по делам, и квартира им нужна для отдыха. Минималистичный интерьер для этого подходит как нельзя лучше. Кроме того, почти все предметы одного цвета со стенами и растворяются в воздухе. Интерьер построен на игре объемов и оттенков белого: выбеленный дуб на полу, чуть более темный — в обшивке стен гостиной, белые табуреты, белый текстиль и легчайшие полупрозрачные шторы. Единственное яркое пятно — кухонный остров из дуба.</div>
            </div>
        </div>
    </div>
</section>
@endsection