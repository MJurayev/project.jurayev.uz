<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 12.10.2020
 * Time: 17:05
 */
?>
@extends('layouts.clientLayout')
@section('content')
    <section id="intro">

        <div class="intro-text">
            <h2>@lang('intro.welcome')</h2>
            <p>@lang('intro.description')</p>
            <a href="#about" class="btn-get-started scrollto">@lang('intro.getting_started')</a>
        </div>

        <div class="product-screens">

            <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                <img src="/clientAssets/img/product-screen-1.png" alt="">
            </div>

            <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="/clientAssets/img/product-screen-2.png" alt="">
            </div>

            <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
                <img src="/clientAssets/img/product-screen-3.png" alt="">
            </div>

        </div>

    </section><!-- #intro -->

    {{--<main id="main">--}}

        <!--==========================
          About Us Sectionabout
        ============================-->
        <section id="about" class="section-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">@lang('AboutUs.aboutUs')
                        <span class="section-divider"></span>
                    <   /h3>

                    <p class="section-description">
                    @lang('AboutUs.ourDescription')
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 about-img wow fadeInLeft">
                        <img src="/clientAssets/img/about-img.jpg" alt="">
                    </div>

                    <div class="col-lg-6 content wow fadeInRight">
                        <h2>@lang('AboutUs.title')</h2>
                        <h3>@lang('AboutUs.comfort')</h3>
                        <p>
                            @lang('AboutUs.desc2');
                        </p>

                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> @lang('AboutUs.service1')</li>
                            <li><i class="ion-android-checkmark-circle"></i>  @lang('AboutUs.service2')</li>
                            <li><i class="ion-android-checkmark-circle"></i> @lang('AboutUs.service3')</li>
                        </ul>

                        <p>
                            @lang('AboutUs.desc3')
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- #about -->

        <!--==========================
            Gallery Section
          ============================-->
        <section id="gallery">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">@lang('gallery.gallery')
                        <span class="section-divider"></span>
                    </h3>

                    <p class="section-description">@lang('gallery.description')</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/clientAssets/img/gallery/gallery-1.jpg" class="gallery-popup">
                                <img src="/clientAssets/img/gallery/gallery-1.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/clientAssets/img/gallery/gallery-2.jpg" class="gallery-popup">
                                <img src="/clientAssets/img/gallery/gallery-2.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/clientAssets/img/gallery/gallery-3.jpg" class="gallery-popup">
                                <img src="/clientAssets/img/gallery/gallery-3.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/clientAssets/img/gallery/gallery-4.jpg" class="gallery-popup">
                                <img src="/clientAssets/img/gallery/gallery-4.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/clientAssets/img/gallery/gallery-5.jpg" class="gallery-popup">
                                <img src="/clientAssets/img/gallery/gallery-5.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item wow fadeInUp">
                            <a href="/clientAssets/img/gallery/gallery-6.jpg" class="gallery-popup">
                                <img src="/clientAssets/img/gallery/gallery-6.jpg" alt="">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #gallery -->

        <!--==========================
          Product Featuress Section
        ============================-->
        <section id="features">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 offset-lg-4">
                        <div class="section-header wow fadeIn" data-wow-duration="1s">
                            <h3 class="section-title">@lang('services.services')
                                <span class="section-divider"></span>
                            </h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 features-img">
                        <img src="/clientAssets/img/product-features.png" alt="" class="wow fadeInLeft">
                    </div>

                    <div class="col-lg-8 col-md-7 ">

                        <div class="row">

                            <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                                <h4 class="title"><a href="">@lang('services.fast')</a></h4>
                                <p class="description">@lang('services.fast-desc')</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                                <h4 class="title"><a href="">@lang('services.quality')</a></h4>
                                <p class="description">@lang('services.quality-desc')</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                <h4 class="title"><a href="">@lang('services.cheap')</a></h4>
                                <p class="description">@lang('services.cheap-desc')</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                                <h4 class="title"><a href="">@lang('services.t')</a></h4>
                                <p class="description">@lang('services.t-desc')</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #features -->

        <!--==========================
          Product Advanced Featuress Section
        ============================-->
        <section id="advanced-features">

            <div class="features-row section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="advanced-feature-img-right wow fadeInRight" src="/clientAssets/img/advanced-feature-1.jpg" alt="">
                            <div class="wow fadeInLeft">
                                <h2>@lang('features.features')</h2>
                                <h3>@lang('features.features_desc1')</h3>
                                <p>@lang('features.features_desc2')</p>
                                <p>@lang('features.features_desc3')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="advanced-feature-img-left" src="/clientAssets/img/advanced-feature-2.jpg" alt="">
                            <div class="wow fadeInRight">
                                <h2>@lang('addInfo.addInfo')</h2>
                                <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                                <p class="wow fadeInRight" data-wow-duration="0.5s">@lang('addInfo.desc1')</p>
                                <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
                                <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">@lang('addInfo.desc2')</p>
                                <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4" data-wow-duration="0.5s"></i>
                                <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">@lang('addInfo.desc3')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-row section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="advanced-feature-img-right wow fadeInRight" src="/clientAssets/img/advanced-feature-3.jpg" alt="">
                            <div class="wow fadeInLeft">
                                <h2>@lang('orders.orders')</h2>
                                <h3>@lang('orders.desc1')</h3>
                                <p>@lang('orders.desc2')</p>
                                <i class="ion-ios-albums-outline"></i>
                                <p>@lang('orders.desc3')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #advanced-features -->

        <!--==========================
          Call To Action Section
        ============================-->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">@lang('callToAction.call')</h3>
                        <p class="cta-text">@lang('callToAction.desc1')</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">@lang('callToAction.orderingBtn')</a>
                    </div>
                </div>

            </div>
        </section><!-- #call-to-action -->

        <!--==========================
          More Features Section
        ============================-->
        <section id="more-features" class="section-bg">
            <div class="container">

                <div class="section-header">
                    <h3 class="section-title">@lang('moreOptions.moreOptions')
                        <span class="section-divider"></span>
                    </h3>

                    <p class="section-description">@lang('moreOptions.description')</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
                            <h4 class="title"><a href="">@lang('moreOptions.slug1')</a></h4>
                            <p class="description">@lang('moreOptions.body1')</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                            <h4 class="title"><a href="">@lang('moreOptions.slug2')</a></h4>
                            <p class="description">@lang('moreOptions.body2')</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="ion-ios-heart-outline"></i></div>
                            <h4 class="title"><a href="">@lang('moreOptions.slug3')</a></h4>
                            <p class="description">@lang('moreOptions.body3')/p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                            <h4 class="title"><a href="">@lang('moreOptions.slug4')</a></h4>
                            <p class="description">@lang('moreOptions.body4')</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- #more-features -->

        <!--==========================
          Clients
        ============================-->
        <section id="clients">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">@lang('ourClients.clients')
                        <span class="section-divider"></span>
                    </h3>

                    <p class="section-description">@lang('ourClients.description')</p>
                </div>

                <div class="row wow fadeInUp">

                    <div class="col-md-2">
                        <img src="/clientAssets/img/clients/client-1.png" alt="">
                    </div>

                    <div class="col-md-2">
                        <img src="/clientAssets/img/clients/client-1.png" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="/clientAssets/img/clients/client-1.png" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="/clientAssets/img/clients/client-1.png" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="/clientAssets/img/clients/client-1.png" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="/clientAssets/img/clients/client-1.png" alt="">
                    </div>
                </div>
            </div>
        </section><!-- #more-features -->

        <!--==========================
          Pricing Section
        ============================-->
        <section id="pricing" class="section-bg">
            <div class="container">

                <div class="section-header">
                    <h3 class="section-title">@lang('achievements.achieve')
                        <span class="section-divider"></span>
                    </h3>

                    <p class="section-description">@lang('achievements.description')</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box wow fadeInLeft">
                            <h3> @lang('achievements.free.title') </h3>
                            <h4><sup>$</sup>0<span> @lang('achievements.price')</span></h4>
                            <ul>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.free.item1')</li>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.free.item2')</li>
                                <li><i class="ion-android-checkmark-circle"></i> @lang('achievements.free.item3')</li>
                                <li><i class="ion-android-checkmark-circle"></i> @lang('achievements.free.item4')</li>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.free.item5')</li>
                            </ul>
                            <a href="#" class="get-started-btn">@lang('achievements.start')</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box featured wow fadeInUp">
                            <h3>@lang('achievements.premium.title')</h3>
                            <h4><sup>$</sup>29<span>@lang('achievements.price')</span></h4>
                            <ul>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.premium.item1')</li>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.premium.item2')</li>
                                <li><i class="ion-android-checkmark-circle"></i> @lang('achievements.premium.item3')</li>
                                <li><i class="ion-android-checkmark-circle"></i> @lang('achievements.premium.item4')</li>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.premium.item5')</li>
                            </ul>
                            <a href="#" class="get-started-btn">@lang('achievements.start')</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box wow fadeInRight">
                            <h3>@lang('achievements.UltraPremium.title')</h3>
                            <h4><sup>$</sup>49<span>@lang('achievements.price')</span></h4>
                            <ul>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.UltraPremium.item1')</li>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.UltraPremium.item2')</li>
                                <li><i class="ion-android-checkmark-circle"></i> @lang('achievements.UltraPremium.item3')</li>
                                <li><i class="ion-android-checkmark-circle"></i> @lang('achievements.UltraPremium.item4')</li>
                                <li><i class="ion-android-checkmark-circle"></i>@lang('achievements.UltraPremium.item5')</li>
                            </ul>
                            <a href="#" class="get-started-btn">@lang('achievements.start')</a>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- #pricing -->


        <!--==========================
          Frequently Asked Questions Section
        ============================-->
        <section id="faq">
            <div class="container">

                <div class="section-header">
                    <h3 class="section-title">@lang('faq.faq')
                        <span class="section-divider"></span>
                    </h3>

                    <p class="section-description">@lang('faq.description')</p>
                </div>

                <ul id="faq-list" class="wow fadeInUp">
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">@lang('faq.quiz1') <i class="ion-android-remove"></i></a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <p>
                                @lang('faq.answer1')
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed"> @lang('faq.quiz2') <i class="ion-android-remove"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                @lang('faq.answer2')
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed"> @lang('faq.quiz3') <i class="ion-android-remove"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                @lang('faq.answer3')
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed"> @lang('faq.quiz4') <i class="ion-android-remove"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                @lang('faq.answer4')
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed"> @lang('faq.quiz5')<i class="ion-android-remove"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                @lang('faq.answer5')
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">  @lang('faq.quiz6')<i class="ion-android-remove"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                @lang('faq.answer6')
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- #faq -->

        <!--==========================
          Our Team Section
        ============================-->
        <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Bizning Jamoa
                        <span class="section-divider"></span>
                    </h3>

                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="/clientAssets/img/team/team-1.jpg" alt=""></div>
                            <h4>Ahmadov Ahmad</h4>
                            <span>Tarjimon</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="/clientAssets/img/team/team-2.jpg" alt=""></div>
                            <h4>Qilichov Madamin</h4>
                            <span>Dizayner</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="/clientAssets/img/team/team-3.jpg" alt=""></div>
                            <h4>Bahodir Dustov</h4>
                            <span>Kotib</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="/clientAssets/img/team/team-4.jpg" alt=""></div>
                            <h4>Amanda Jepson</h4>
                            <span>Asistent</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #team -->



        <!--==========================
          Contact Section
        ============================-->

    {{--</main>--}}



@endsection

