@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Регистрация прошла успешно') }}</div>

                <div class="text_dashboard" class="card-body">
                    @if (session('status'))
                        <div class="text_form" class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы вошли в систему!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
