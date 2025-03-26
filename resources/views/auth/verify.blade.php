@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Проверьте свой адрес электронной почты') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш адрес электронной почты отправлена ссылка для подтверждения.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки подтверждения.') }}
                    {{ __('Вы не получили ссылку подтверждения') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button class="verify_button" type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы получить новую ссылку') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
