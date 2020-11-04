<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 14.10.2020
 * Time: 16:17
 */
?>
<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/adminAssets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/adminAssets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>

         -@lang('admin.'.\Request::route()->getName())
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/adminAssets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/adminAssets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <link href="/adminAssets/demo/demo.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" href="/adminAssets/my/style.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>

<div id="loader">
    <div class="contain">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
            </filter>
        </defs>
    </svg>
</div>

<div class="wrapper ">
    <div class="sidebar" data-color="orange">

        <div class="logo">
            <a class="simple-text logo-mini">
                Admin
            </a>
            <a class="simple-text logo-normal">
                Panel
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                {{--<li  class="{{ url()->current()==route('AdminDashboard')? 'active':'' }}">--}}
                    {{--<a href="{{route('AdminDashboard')}}">--}}
                        {{--<i class="now-ui-icons design_app"></i>--}}
                        {{--<p>Dashboard </p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li  class="{{ url()->current()==route('AdminUsers')? 'active':'' }}">
                    <a href="{{route('AdminUsers')}}">
                        <i class="now-ui-icons users_single-02"></i>

                        <p>@lang('admin.menu.users')</p>
                    </a>
                </li>
                <li  class="{{ url()->current()==route('AdminPosts')? 'active':'' }}">
                    <a href="{{route('AdminPosts')}}">
                        <i class="now-ui-icons education_paper"></i>
                        <p>@lang('admin.menu.posts')</p>
                    </a>
                </li>
                <li  class="{{ url()->current()==route('addPost')? 'active':'' }}">
                    <a href="{{route('addPost')}}">
                        <i class="now-ui-icons files_single-copy-04"></i>
                        <p>@lang('admin.menu.addPost')</p>
                    </a>
                </li>
                <li  class="{{ url()->current()==route('AdminAdmins')? 'active':'' }}">
                    <a href="{{route('AdminAdmins')}}">
                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                        <p>@lang('admin.menu.admins')</p>
                    </a>
                </li>
                <li  class="{{ url()->current()==route('AdminProfile')? 'active':'' }}">
                    <a href="{{route('AdminProfile')}}">
                        <i class="now-ui-icons users_circle-08"></i>
                        <p>@lang('admin.menu.adminProfile')</p>
                    </a>
                </li>

                <li class="active-pro">
                    <a href="{{route('home')}}">
                        <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                        <p>@lang('admin.menu.goHome')</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">@lang('admin.'.\Request::route()->getName())</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                 {{App()->getLocale()}}
                                <p>
                                    <span class="d-lg-none d-md-block">{{App()->getLocale()}}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item {{App()->getLocale()=='uz' ? 'd-none' :''}}" href="/setlocale/uz">uz</a>
                                <a class="dropdown-item {{App()->getLocale()=='en' ? 'd-none' :''}}" href="/setlocale/en">en</a>
                                <a class="dropdown-item {{App()->getLocale()=='ru' ? 'd-none' :''}}" href="/setlocale/ru">ru</a>
                                <a class="dropdown-item {{App()->getLocale()=='tr' ? 'd-none' :''}}" href="/setlocale/tr">tr</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">@lang('admin.Settings')</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="/admin/profile">@lang('admin.menu.adminProfile')</a>
                                <a class="dropdown-item text-danger"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        {{--@if( url()->current()==route('AdminDashboard'))--}}
        {{--<div class="panel-header panel-header-lg">--}}
            {{--<canvas id="bigDashboardChart"></canvas>--}}
        {{--</div>--}}
        {{--@endif--}}
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
<div class="row">
    @if(session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session()->has('error') )

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>@lang('admin.error'):</strong> {{session()->get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
            <div class="row">

              @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="/adminAssets/js/core/jquery.min.js"></script>
<script src="/adminAssets/js/core/popper.min.js"></script>
<script src="/adminAssets/js/core/bootstrap.min.js"></script>
<script src="/adminAssets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="/adminAssets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/adminAssets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/adminAssets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/adminAssets/demo/demo.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });


    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
        selector: 'textarea#full-featured-non-premium',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'http://www.tinymce.com' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'http://www.tinymce.com' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: function (callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 400,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });


</script>

<script>


     $(document).ready(()=>{
         $('#loader').fadeOut();
     });

</script>
</body>

</html>