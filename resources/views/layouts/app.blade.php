<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AttendanceApp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        <!-- meanmenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/meanmenu/meanmenu.min.css')}}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- jvectormap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
        <!-- notika icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/notika-custom-icon.css')}}">
        <!-- wave CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/wave/waves.min.css')}}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('qr_login/option2/js/filereader.js')}}"></script>
        <script type="text/javascript" src="{{asset('qr_login/option2/js/qrcodelib.js')}}"></script>
        <script type="text/javascript" src="{{asset('qr_login/option2/js/webcodecamjs.js')}}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="#"><img src="{{asset('img/logo/logo.png')}}" alt="" /></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    <div id="app">
            <div class="main-menu-area mg-tb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                                    <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-menus"></i> Participants</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Attendance</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#about"><i class="notika-icon notika-mail"></i> About</a>
                                    </li>
                                </ul>
                                <div class="tab-content custom-menu-content">
                                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                                        <ul class="notika-main-menu-dropdown">
                                            <li><a href="/participant/create">Register</a>
                                            </li>
                                            <li><a href="/participant">List of Participants</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                                        <ul class="notika-main-menu-dropdown">
                                            <li><a href="attendance/qrattendance">by QR Code</a>
                                            </li>
                                            <li><a href="attendance/nameattendance">by Name</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
        <div class="container">
            @yield('content')
        </div>
    </div>
    <div class="footer-copyright-area">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright-area">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End Footer area-->
        <!-- jquery
            ============================================ -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{asset('js/jquery-price-slider.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{asset('js/meanmenu/jquery.meanmenu.js')}}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
        <script src="{{asset('js/counterup/counterup-active.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <!-- jvectormap JS
            ============================================ -->
        <script src="{{asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('js/jvectormap/jvectormap-active.js')}}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{asset('js/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('js/flot/curvedLines.js')}}"></script>
        <script src="{{asset('js/flot/flot-active.js')}}"></script>
        <!-- knob JS
            ============================================ -->
        <script src="{{asset('js/knob/jquery.knob.js')}}"></script>
        <script src="{{asset('js/knob/jquery.appear.js')}}"></script>
        <script src="{{asset('js/knob/knob-active.js')}}"></script>
        <!--  wave JS
            ============================================ -->
        <script src="{{asset('js/wave/waves.min.js')}}"></script>
        <script src="{{asset('js/wave/wave-active.js')}}"></script>
        <!--  todo JS
            ============================================ -->
        <script src="{{asset('js/todo/jquery.todo.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{asset('js/plugins.js')}}"></script>
        <!--  Chat JS
            ============================================ -->
        <script src="{{asset('js/chat/moment.min.js')}}"></script>
        <script src="{{asset('js/chat/jquery.chat.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{asset('js/main.js')}}"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{asset('js/tawk-chat.js')}}"></script>
</body>
     @yield('ajaxpart')

</html>
