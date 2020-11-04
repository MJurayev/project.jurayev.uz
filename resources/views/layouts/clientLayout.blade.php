<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 12.10.2020
 * Time: 17:01
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="/clientAssets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/clientAssets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/clientAssets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/clientAssets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/clientAssets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">


    <link href="/clientAssets/css/style.css" rel="stylesheet">
    <script src="/adminAssets/demo/demo.css"></script>
    <link rel="stylesheet" href="/clientAssets/css/loader.styles.css" >
</head>
<body>
<div id="loader1">
    <div id="loader-container">
        <p id="loadingText">Loading</p>
    </div>
</div>
<header id="header">


    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">Logo</a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="/">@lang('menu.homepage') </a></li>

                <li class="menu-has-children"><a href="#">@lang('menu.info') </a>
                    <ul>
                        <li><a href="#pricing">@lang('menu.achieve') </a></li>
                        <li><a href="#contact">@lang('menu.contact') </a></li>
                        <li><a href="#team">@lang('menu.our_team')</a></li>
                        <li><a href="#gallery">@lang('menu.gallery') </a></li>
                    </ul>
                </li>

                <li class="nav-tem "><a href="{{route('blog')}}">@lang('menu.blog') </a>

                </li>
                <li class="mr-lg-5 pr-lg-5 "><a href="#about">@lang('menu.about_us')</a></li>
                @guest
                    <li class="ml-lg-5 nav-item ">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('menu.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('menu.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item ml-lg-5 menu-has-children text-info">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul>
                            <li>
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('menu.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>


                    </li>
                @endguest
                <li class="   menu-has-children"><a href="#" class="btn btn-sm btn-outline-info text-white ">{{App()->getLocale()}}</a>
                    <ul>
                        <li><a class="{{App()->getLocale() == 'uz' ? 'd-none' :''}}" href="/setlocale/uz">uz</a></li>
                        <li><a class="{{App()->getLocale() == 'ru' ? 'd-none' :''}}" href="/setlocale/ru">ru</a></li>
                        <li><a class="{{App()->getLocale() == 'en' ? 'd-none' :''}}" href="/setlocale/en">en</a></li>
                        <li><a class="{{App()->getLocale() == 'tr' ? 'd-none' :''}}" href="/setlocale/tr">tr</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>


@if(session()->has('success') )

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> {{session()->get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if(session()->has('error') )

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> {{session()->get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@yield('content')
<section id="contact">
    <div class="container">
        <div class="row wow fadeInUp">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                    <h3>Sitename</h3>
                    <p>@lang('contact.description')</p>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="ion-ios-location-outline"></i>
                        <p>@lang('contact.address') </p>
                    </div>

                    <div>
                        <i class="ion-ios-email-outline"></i>
                        <p>@lang('contact.email')</p>
                    </div>

                    <div>
                        <i class="ion-ios-telephone-outline"></i>
                        <p>@lang('contact.phone')</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                {{--<div class="card ">--}}
                {{--<div class="card-header ">--}}
                {{--Google Maps--}}
                {{--</div>--}}
                {{--<div class="card-body ">--}}
                <div id="map" class="map" style="height: 300px"></div>
                {{--</div>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
</section><!-- #contact -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; @lang('footer.copyrightFrom') <strong>{{ config('app.name') }}</strong>@lang('footer.copyright')
                </div>
                <div class="credits">
                    {{ config('app.name') }} &copy; {{date('Y')}}
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <a href="#intro" class="scrollto">@lang('menu.homepage')</a>
                    <a href="#about" class="scrollto">@lang('AboutUs.aboutUs')</a>
                    <a href="#">@lang('footer.TermsOfUse')</a>
                    <a href="#">@lang('footer.faq')</a>
                </nav>
            </div>
        </div>
    </div>
</footer><!-- #footer -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12292548;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12292548/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<script src="/clientAssets/lib/jquery/jquery.min.js"></script>
<script src="/clientAssets/lib/jquery/jquery-migrate.min.js"></script>
<script src="/clientAssets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/clientAssets/lib/easing/easing.min.js"></script>
<script src="/clientAssets/lib/wow/wow.min.js"></script>
<script src="/clientAssets/lib/superfish/hoverIntent.js"></script>
<script src="/clientAssets/lib/superfish/superfish.min.js"></script>
<script src="/clientAssets/lib/magnific-popup/magnific-popup.min.js"></script>
<script src="/clientAssets/contactform/contactform.js"></script>
<script src="/clientAssets/js/main.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
        defer
></script>
<script>
    $(document).ready(()=>{
        $('#loader1').fadeOut();

        let map;
        map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
    });

</script>
</body>
</html>
