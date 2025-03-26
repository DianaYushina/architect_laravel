@extends('layouts.app')

@section('content')
    <!-- <h2>Оставьте свой отзыв</h2> -->

    <section class="section_feedback">
        <!-- <h2 class="h2_section_products">Продукты</h2> -->
        <div class="wrapper_products">
        @foreach($feedbacks as $feedback)
                <div class="box_feedback">
                    <!-- <div class="style_user_photo_user_name_feedback">
                        <div>
                            <img  class="uset_photo_feedback" src="{{asset('img/user_2.png') }}">
                        </div>
                        <div class="feedback_user_name">{{ $feedback->user->name }}</div>
                    </div> -->
                    <div class="feedback_user_section_style">
                        <div class="feedback_user_name">{{ $feedback->user->name }}</div>
                        <div class="border_feedback"></div>
                    </div>
                    <!-- <div class="style_border_products">
                        <div class="border_products"></div>
                     </div> -->
                    <div class="style_of_feedback_body_text">{{ $feedback->body_text }}</div> 
                </div>
            @endforeach
            <form action="{{ asset('feedback')}}" method="POST" class="form_larave_feedback">
                        @csrf
                        
                        <div class="style_h3_feddback">
                            <div class="h3_feddback">Оставьте ваш отзыв</div>
                        </div>
                        <textarea class="texterea_laravel_feedback" name="body_text" cols="40" rows="3" placeholder="Введите отзыв"></textarea>
                        <div class="style_button_laravel_feedback ">
                            <button class="submit_laravel_feedback" type="submit">отправить</button>
                        </div> 
                    </form>
               
        </div>
        
</section>                     
@endsection