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
        @foreach ($blogs as $blog)
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 pt-5">
                <div class="media position-relative font-roadway">
                    <img src="{{ asset('uploads/blog/thumbs/'.$blog->image) }}" alt="{{ $blog->title }}"
                        style="width: 200px">
                    <div class="media-body pl-3">
                        <h3 class="mt-0 font-weight-bold">{{ $blog->title }}</h3>
                        <p class="mt-2">
                            {!! $blog->content_short !!}
                        </p>
                        <a href="{{ url('blog/'.$blog->slug) }}" class="text-success stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
