@extends('layouts.carbon')

@section('title')
About Us Settings
@endsection

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css"
    integrity="sha256-f/v2ew/bb0v4el1ALE7bOoXGUDWGk2k+dkPLo3JPhLw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css"
    integrity="sha256-CLMYHViXNCxDUd/ySLeJJjyLtteBZwjqZ4c5p6U7L78=" crossorigin="anonymous" />
@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"
    integrity="sha256-qMOrasYHJknr6tHDc145kBzFD11MBz5npqKdjsJ3E5Q=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 300,
        });
        $('.btn-submit').on('click', function () {
            var $this = $(this);
            var loadingText =
                '<i class="fa fa-circle-o-notch fa-spin"></i> loading...';
            if ($(this).html() !== loadingText) {
                $this.data('original-text', $(this).html());
                $this.html(loadingText);
            }
            setTimeout(function () {
                $this.html($this.data('original-text'));
            }, 2000);
        });
    });

</script>
@endpush

@section('content')
@php
function limit_text($text, $limit) {
if (str_word_count($text, 0) > $limit) {
$words = str_word_count($text, 2);
$pos = array_keys($words);
$text = substr($text, 0, $pos[$limit]) . '...';
}
return $text;
}
@endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between">
                    <h4 class="mb-0">About Us</h4>
                    <a href="{{ url('about') }}" class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Lihat Halaman
                        About</a>
                </div>

                <div class="card-body">
                    <section>

                        <div class="row">
                            <div class="col-12">
                                <h5>First Section</h5>
                            </div>
                        </div>
                        <form action="{{ url('admin/about/first-section') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="content" class="col-md-1 col-form-label text-md-right">Title</label>

                                <div class="col-md-9">
                                    <input id="about_first_title" type="text"
                                        class="form-control @error('about_first_title') is-invalid @enderror"
                                        name="about_first_title" value="{{ $about_first_title }}" required>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-1 col-form-label text-md-right">Text</label>

                                <div class="col-md-9">
                                    <textarea class="form-control summernote"
                                        name="about_first_text">{{ $about_first_text }}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-1">
                                    <button type="submit" class="btn btn-danger btn-submit">
                                        Simpan
                                    </button>
                                </div>
                            </div>

                        </form>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-12">
                                <hr>
                                <h5>Second Section</h5>
                            </div>
                        </div>
                        <form action="{{ url('admin/about/second-section') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="content" class="col-md-1 col-form-label text-md-right">Title</label>

                                <div class="col-md-9">
                                    <input id="about_second_title" type="text"
                                        class="form-control @error('about_second_title') is-invalid @enderror"
                                        name="about_second_title" value="{{ $about_second_title }}" required>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-1 col-form-label text-md-right">Text</label>

                                <div class="col-md-9">
                                    <textarea class="form-control summernote"
                                        name="about_second_text">{{ $about_second_text }}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-1">
                                    <button type="submit" class="btn btn-danger btn-submit">
                                        Simpan
                                    </button>
                                </div>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
