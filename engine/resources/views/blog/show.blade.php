@extends("layouts.master")

@section("title")
{{ ucfirst($blog->title) }}
@endsection

@push('css')
{{-- <link rel="stylesheet" href="{{ asset('css/parallax.css') }}" type="text/css"> --}}
<style>

</style>
@endpush

@section("content")
<section>
    <div class="container-fluid" style="background: #FFFDE7; height: 50vh;">
        <div class="row">
            <div class="col-12">
                {{-- <img src="{{ asset('uploads/blog/thumbs'.$blog->image) }}" alt="" class=""> --}}
                {{-- <div class="text-center">
                    <h1 class="font-weight-bolder text-xl" style="padding: 200px 0">
                        BLOG
                    </h1>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<section style="background: #FFFDE7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 pt-5 pb-3 bg-light">
                <h1 class="text-center font-roadway text-xl">{{ strtoupper($blog->title) }}</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 bg-light">
                <div class="col-12 col-lg-8 offset-lg-2 pt-3 bg-light">
                    <div class="text-center">
                        <img src="{{ asset('uploads/blog/thumbs/'.$blog->image) }}" alt="" class="img-fluid">
                    </div>
                    <h5 class="font-roadway pt-5 pb-3">
                        {{ strtoupper($blog->created_at->toFormattedDateString()) }}
                    </h5>
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
