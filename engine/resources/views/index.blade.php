@extends("layouts.master")

@section("title")
Home
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/parallax.css') }}" type="text/css">
<style>
    .slick-slide {
        position: relative;
    }

    .overlay-on-hover img {
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .overlay-on-hover .centered {
        transition: .5s ease;
        opacity: 0;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

    .overlay-on-hover:hover img {
        filter: brightness(50%);
    }

    .overlay-on-hover:hover .centered {
        opacity: 1;
    }

    .slick-prev {
        left: 50px;
        z-index: 1;
    }

    .slick-next {
        right: 50px;
    }

    .slick-next:before,
    .slick-prev:before {
        font-size: 50px;
    }

    img.img-insta {
        object-fit: cover;
        width: 350px;
        height: 350px;
    }

</style>
@endpush

@push('js')
<script src="{{ asset('vendor/slick/slick.js') }}"></script>
<script src="{{ asset('js/slick-custom.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.slick').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            autoplay: true
        });

        $('.home-slider').slick();
    });

</script>
@endpush

@section("content")
<div class="home-slider">
    @foreach ($sliders as $slider)
    @if (Arr::exists($slider, 'image'))
    <div>
        <div class="crop1">
            <img src="{{ asset('uploads/sliders/'.$slider['image']) }}" alt="" class="img-fluid w-100 h-100">
            <h1 class="centered text-center text-white font-weight-bolder text-xl">{{ strtoupper($slider['text']) }}</h1>
        </div>
    </div>
    @endif
    @endforeach
</div>

<section>
    <div class="container-fluid pl-0 pr-0">
        <div class="row align-middle no-gutters">

            <div class="col-12 col-lg-4 crop2">
                <a href="{{ url('menu') }}">
                    <img src="{{ asset('images/penyetan-blur.png') }}" alt="penyetan"
                        class="img-fluid img-relative w-100 h-100">
                    <h1 class="centered text-white font-weight-bolder text-lg">PENYETAN</h1>
                </a>
            </div>

            <div class="col-12 col-lg-4 crop2">
                <a href="{{ url('menu') }}">
                    <img src="{{ asset('images/sambal-blur.png') }}" alt="sambal"
                        class="img-fluid img-relative w-100 h-100">
                    <h1 class="centered text-white font-weight-bolder text-lg">SAMBAL</h1>
                </a>
            </div>

            <div class="col-12 col-lg-4 crop2">
                <a href="{{ url('menu') }}">
                    <img src="{{ asset('images/express-blur.png') }}" alt="express"
                        class="img-fluid img-relative w-100 h-100">
                    <h1 class="centered text-white font-weight-bolder text-lg">EXPRESS</h1>
                </a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-fluid pr-0 pl-0">
        <div class="row align-items-center no-gutters">
            <div class="col-lg-6">
                <img src="{{ asset('images/penyetan-hd.png') }}" alt="" class="img-fluid w-100 h-100">
            </div>
            <div class="col-lg-6 w-75 mx-auto text-center">
                <h1 class="mt-5 font-weight-bold">KHAS JAWA TIMUR</h1>
                <p class="mt-5 w-75 mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <a href="{{ url('menu') }}" class="btn btn-caktopan my-5">MENU</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pl-0">
        <div class="row pr-0">
            <div class="col-12 pr-0 parallax sambalIm">
                <div class="centered text-center">
                    <h1 class="text-white font-weight-bolder d-none d-lg-block">MACAM-MACAM SAMBAL</h1>
                    <h4 class="text-white font-weight-bolder d-block d-lg-none">MACAM-MACAM SAMBAL</h4>
                    <a href="{{ url('menu') }}"
                        class="btn btn-caktopan btn-caktopan-white text-white mt-3 w-25">MENU</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 w-75 mx-auto text-center mt-5">
                <h1 class="font-weight-bold">NASI PUTIH DAN UDUK</h1>
                <p class="mt-5 w-75 mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <a href="{{ url('menu') }}" class="btn btn-caktopan my-5">MENU</a>
            </div>
            <div class="col-lg-6 pr-0 pl-0">
                <img src="{{ asset('images/uduk.png') }}" alt="" class="img-fluid w-100 h-100">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pl-0">
        <div class="row pr-0">
            <div class="col-12 pr-0 parallax lokasiIm">
                <div class="centered text-center">
                    <h1 class="text-white font-weight-bolder d-none d-lg-block">LOKASI KAMI</h1>
                    <h3 class="text-white font-weight-bolder d-block d-lg-none">LOKASI KAMI</h3>
                    <a href="{{ url('about') }}" class="btn btn-caktopan btn-caktopan-white text-white mt-3 w-50">ABOUT
                        US</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pl-0">
        <div class="row align-items-center">
            <div class="col-lg-6 pr-0">
                <img src="{{ asset('images/sambal2.png') }}" alt="" class="img-fluid w-100 h-100">
            </div>
            <div class="col-lg-6 w-75 mx-auto text-center">
                <h1 class="font-weight-bold mt-5">RASA BINTANG LIMA <br> HARGA KAKI LIMA</h1>
                <p class="mt-5 w-75 mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <a href="{{ url('menu') }}" class="btn btn-caktopan my-5">MENU</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pl-0" style="background: #FFFDE7">
        <div class="row pr-0">
            <div class="col-12" style="height: 100vh;">
                <div class="centered text-center">
                    <h1 class="font-weight-bold text-lg">
                        ABOUT CAK TOPAN
                    </h1>
                    <p class="mt-4 font-roadway w-100 w-md-75 mx-auto font-weight-bold text-black">
                        LOREM IPSUM DOLOR SIT AMET, CONSETETUR SADIPSCING ELITR, SED DIAM NONUMY EIRMOD TEMPOR
                        INVIDUNT UT LABORE ET DOLORE MAGNA ALIQUYAM ERAT, SED DIAM VOLUPTUA. AT VERO EOS ET
                        ACCUSAM ET JUSTO DUO DOLORES ET EA REBUM. STET CLITA KASD GUBERGREN,
                        <br> <br>
                        NO SEA TAKIMATA SANCTUS EST LOREM IPSUM DOLOR SIT AMET.
                        LOREM IPSUM DOLOR SIT AMET, CONSETETUR SADIPSCING ELITR, SED DIAM NONUMY EIRMOD TEMPOR
                        INVIDUNT UT LABORE ET DOLORE MAGNA ALIQUYAM ERAT, SED DIAM VOLUPTUA. AT VERO EOS ET
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pl-0">
        <div class="row align-items-center">
            <div class="col-lg-12 parallax sambalIm2">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pt-3 text-center">
                <a href="https://www.instagram.com/caktopanpenyetan/" target="_blank" class="btn btn-link ">
                    <h5 class="">@<span class="font-roadway">CAKTOPANPENYETAN</span></h5>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 p-0">
                <div class="slick">
                    @foreach ($instagram->media() as $insta)
                    <a class="overlay-on-hover" href="{{ $insta->link }}" target="_blank">
                        <img src="{{ $insta->images->standard_resolution->url }}" alt=""
                            class="img-fluid p-0 m-0 img-insta">
                        <div class="centered text-center d-flex">
                            <h5 class="font-weight-bold text-light">
                                <i class="fa fa-heart"></i> {{ $insta->likes->count }}
                            </h5>
                            <h5 class="font-weight-bold text-light ml-3">
                                <i class="fa fa-comment"></i> {{ $insta->comments->count }}
                            </h5>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
