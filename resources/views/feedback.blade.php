@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card style_feedback1">
                <div class="card-header text_style_feedback1">Leave your feedback</div>

                <div class="card-body style_feedback1">
                    @foreach($feedbacks as $feedback)
                        <div class="feedback_user_name">{{ $feedback->user->name }}</div>
                        <div class="style_of_feedback_body_text">{{ $feedback->body_text }}</div>
                    @endforeach
                    <form action="{{ asset('feedback')}}" method="POST" class="form_larave_feedback">
                        @csrf
                        <textarea class="texterea_laravel_feedback" name="body_text" cols="40" rows="3" placeholder="Enter your feedback"></textarea>
                        <div class="style_button_laravel_feedback ">
                            <button class="submit_laravel_feedback" type="submit">ENTER</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection