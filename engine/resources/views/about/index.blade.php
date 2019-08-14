@extends("layouts.master")

@section("title")
Menu
@endsection

@section("content")
<section>
    <div class="container-fluid" style="background: #FFFDE7; height: 50vh;">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="font-weight-bolder text-xl" style="padding: 200px 0">
                        ABOUT US
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 pt-5 text-center ">
                <h3 class="font-roadway">
                    {{ strtoupper($about_first_title) }}
                </h3>
                <div class="mt-3">
                    {!! strtoupper($about_first_text) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 pt-5 text-center">
                <h3 class="font-roadway">
                    {{ strtoupper($about_second_title) }}
                </h3>
                <div class="mt-3">
                    {!! strtoupper($about_second_text) !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
