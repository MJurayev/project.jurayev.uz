@extends('layouts.auth')

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Verify Your Email Address') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('resent'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ __('A fresh verification link has been sent to your email address.') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--{{ __('Before proceeding, please check your email for a verification link.') }}--}}
                    {{--{{ __('If you did not receive the email') }},--}}
                    {{--<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">--}}
                        {{--@csrf--}}
                        {{--<button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@section('content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">{{ __('Verify Your Email Address') }}</h1>
    </div>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},


    <form class="user"  method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit"  class="btn btn-primary btn-user btn-block">
            {{ __('click here to request another') }}
        </button>
        <hr>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="/login">Registratsiyadan o'tganmisiz? Kirish</a>
    </div>
@endsection
