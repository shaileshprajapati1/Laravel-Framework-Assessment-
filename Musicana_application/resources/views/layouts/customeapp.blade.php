<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Music Buzz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Music Buzz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('assest/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ url('assest/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="{{ url('assest/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!--webfonts-->
    <!-- <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"> -->
    <!--//webfonts-->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="homepage">
                    Music Buzz
                </a>
                <!-- <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item active  mr-1">
                            <a class="nav-link" href="homepage">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-1">
                            <a class="nav-link" href="allmusic">all music</a>
                        </li>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item  mr-1">
                            <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item  mr-1">
                            <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown mr-1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item scroll" href="#more">Link1</a> -->
                            </div>
                        </li>
                        @endguest

                     
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->
    @yield('main')

    <!-- copyright -->
    <div class="cpy-right text-center">
        <p>© 2018 Music Buzz. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- js-->
    <script src="{{ url('assest/js/jquery-2.2.3.min.js') }}"></script>
    <!-- js-->
    <!-- start-smooth-scrolling -->
    <script src="{{ url('assest/js/move-top.js ') }}"></script>
    <script src="{{ url('assest/js/easing.js ') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll ").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
             var defaults = {
            	 containerID: 'toTop', // fading element id
            	 containerHoverID: 'toTopHover', // fading element hover id
            	 scrollSpeed: 1200,
            	 easingType: 'linear' 
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ url('assest/js/SmoothScroll.min.js') }}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('assest/js/bootstrap.js') }}">
    </script>
    <!-- //Bootstrap Core JavaScript -->
</body>

</html>