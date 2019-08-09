<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title")</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/favicon.png') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/parallax.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/elegant-font/html-css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/slick/slick.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightbox2/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/caktopan.css') }}">
    @stack('css')
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="blackLine col-lg-12">
                <p class="font-roadway text-secondary">JL. WONOSARI NO. 77, PEKANBARU | DAILY 16:00 - 00:00</p>
            </div>
            <div class="wrap_header" id="navbar">

                <!-- Logo -->
                <a href="index.php" class="logo col-12">
                    <img src="{{ asset('assets/images/icons/logo.png') }}" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu col-12">
                            <li class="{{ request()->is('/') ? 'sale-noti' : '' }}">
                                <a href="{{ url('/') }}">HOME</a>
                            </li>

                            <li class="{{ request()->is('products*') ? 'sale-noti' : '' }}">
                                <a href="{{ url('products?filter=suspensi') }}">MENU</a>
                            </li>

                            <li class="{{ request()->is('products*') ? 'sale-noti' : '' }}">
                                <a href="{{ url('products?filter=suspensi') }}">BLOG</a>
                            </li>

                            <li class="{{ request()->is('blog*') ? 'sale-noti' : '' }}">
                                <a href="{{ url('blog') }}">ABOUT US</a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <!-- Header Icon -->
                <div class="header-icons">
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src="{{ asset('assets/images/social-fb.png') }}" class="header-icon1 mr-3" alt="facebook">
                    </a>
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src="{{ asset('assets/images/social-ig.png') }}" class="header-icon1 mr-3" alt="facebook">
                    </a>
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src="{{ asset('assets/images/social-wa.png') }}" class="header-icon1" alt="facebook">
                    </a>


                    <!-- <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span> -->

                    <!-- Header cart noti -->

                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.php" class="logo-mobile">
                <img src="{{ asset('assets/images/icons/logo.png') }}" alt="IMG-LOGO">
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <!-- <a href="#" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a> -->

                    <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <!-- <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span> -->

                        <!-- Header cart noti -->

                    </div>
                </div>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-menu-mobile">
                        <a href="index.php">Home</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="product.php">Menu</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="blog.php">About Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield("content")

    <!-- Footer -->
    <footer class="bg-dark text-white font-roadway" style="border-bottom: 5px solid #f44336">
        <div class="container py-3">
            <div class="row px-5 pt-3 pb-5">
                <div class="col-12 pt-4 col-lg-3">
                    <h2 class="mb-2">ADDRESS</h2>
                    <h5>JL. WONOSARI NO. 77 PEKANBARU</h5>
                </div>
                <div class="col-12 pt-4 col-lg-3">
                    <h2 class="mb-2">HOURS</h2>
                    <h5>DAILY 16:00 - 00:00</h5>
                </div>
                <div class="col-12 pt-4 col-lg-3">
                    <h2 class="mb-2">CONTACT</h2>
                    <h5>081-1767-8055</h5>
                </div>
            </div>
            <div class="row px-5 pt-3">
                <div class="col-12">
                    <p class="font-roadway text-white">
                        &copy;2019 CAK TOPAN | MADE BY <a href="#"
                            class="font-roadway text-danger text-underline">MAKAYASA ARECA</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    {{--<div class="bg10 p-t-10 p-b-20 p-l-45 p-r-45">--}}

    {{--</div>--}}

    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('assets/js/slick-custom.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $('.block2-btn-addcart').each(function () {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
            $(this).on('click', function () {
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function () {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
            $(this).on('click', function () {
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });

        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        window.onscroll = function () {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

    </script>

    @stack('js')

</body>

</html>
