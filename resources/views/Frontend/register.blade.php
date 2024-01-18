<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Frontend/assets/img/favicon.ico')}}">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/')}}assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/assets/css/style.css')}}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('Frontend/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->



    <main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
        <!-- Login Admin -->
        <form class="form-default" action="login-bg.mp4" method="POST">
            
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="index.html"><img src="assets/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Registration Here</h2>
    
                <div class="form-input">
                    <label for="name">Full name</label>
                    <input  type="text" name="name" placeholder="Full name">
                </div>
                <div class="form-input">
                    <label for="name">Email Address</label>
                    <input type="email" name="email" placeholder="Email Address">
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-input">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="password" placeholder="Confirm Password">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="Registration">
                </div>
                <!-- Forget Password -->
                <a href="login.html" class="registration">login</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>


    <script src="{{asset('Frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('Frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('Frontend/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Video bg -->
    <script src="{{asset('Frontend/assets/js/jquery.vide.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('Frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('Frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('Frontend/assets/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{asset('Frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.sticky.js')}}"></script>
    <!-- Progress -->
    <script src="{{asset('Frontend/assets/js/jquery.barfiller.js')}}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('Frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('Frontend/assets/js/contact.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('Frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/main.js{{asset('Frontend/')}}')}}"></script>
    
    </body>
</html>