@extends("layouts.master")

@section("title")
Menu
@endsection

@push('css')
<style>

</style>
@endpush

@section("content")
<section>
    <div class="container-fluid" style="background: #FFFDE7; height: 400px;">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="font-weight-bolder text-xl" style="padding: 200px 0">
                        BLOG
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 pt-5">
                <div class="media position-relative font-roadway">
                    <img src="{{ asset('assets/images/promo.png') }}" alt="olin-news" style="width: 250px" class="p-3">
                    <div class="media-body">
                        <h3 class="mt-0 font-weight-bold">INI JUDUL</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente labore reprehenderit
                            beatae quasi facere facilis maiores eaque deserunt. Natus autem, voluptate repudiandae qui
                            saepe aliquid consectetur laudantium. Illo, dolorem praesentium.
                        </p>
                        <a href="{{ url('blog/1') }}" class="text-success stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 offset-lg-2 pt-5">
                <div class="media position-relative font-roadway">
                    <img src="{{ asset('assets/images/promo.png') }}" alt="olin-news" style="width: 250px" class="p-3">
                    <div class="media-body">
                        <h3 class="mt-0 font-weight-bold">INI JUDUL</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente labore reprehenderit
                            beatae quasi facere facilis maiores eaque deserunt. Natus autem, voluptate repudiandae qui
                            saepe aliquid consectetur laudantium. Illo, dolorem praesentium.
                        </p>
                        <a href="{{ url('blog/1') }}" class="text-success stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 offset-lg-2 pt-5">
                <div class="media position-relative font-roadway">
                    <img src="{{ asset('assets/images/promo.png') }}" alt="olin-news" style="width: 250px" class="p-3">
                    <div class="media-body">
                        <h3 class="mt-0 font-weight-bold">INI JUDUL</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente labore reprehenderit
                            beatae quasi facere facilis maiores eaque deserunt. Natus autem, voluptate repudiandae qui
                            saepe aliquid consectetur laudantium. Illo, dolorem praesentium.
                        </p>
                        <a href="{{ url('blog/1') }}" class="text-success stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
