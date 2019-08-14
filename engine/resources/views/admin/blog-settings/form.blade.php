@extends('layouts.carbon')

@section('title')
{{ @$edit ? 'Edit' : 'Tambah' }} Blog
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
            var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> loading...';
            if ($(this).html() !== loadingText) {
                $this.data('original-text', $(this).html());
                $this.html(loadingText);
            }
            setTimeout(function () {
                $this.html($this.data('original-text'));
            }, 2000);
        });
    });

    function showupload(id) {
        $('#' + id).trigger('click');
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#' + input.id + '-show').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ @$edit ? 'Edit' : 'Tambah' }} Blog
                    {{ @$edit ? $blog->title : '' }}</div>

                <div class="card-body">
                    <form action="{{ @$edit ? route("admin.blog.update", $blog) : url('admin/blog') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        {{ @$edit ? method_field('PUT') : '' }}

                        @if (@$edit)
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Gambar saat ini</label>
                            <div class="col-md-8">
                                <img src="{{ asset("uploads/blog/thumbs/$blog->image") }}" alt="" class="img-fluid w-50" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">
                                Ubah Gambar<br>
                                <small class="text-secondary">Isi jika gambar ingin diubah</small>
                            </label>
                            <div class="col-md-8">
                                <img onclick=" showupload('image1')" id="image1-show"
                                    src="{{ asset("images/add_image.png") }}" alt="your image" class="img-fluid w-50"
                                    style="cursor:pointer;" />
                            </div>
                            <div class="col-md-8 d-none">
                                <input type="file" name="image" onchange="readURL(this)" id="image1"
                                    class="form-control">
                            </div>
                        </div>
                        @else
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">
                                Gambar
                            </label>
                            <div class="col-md-8">
                                <img onclick=" showupload('image1')" id="image1-show"
                                    src="{{ asset("images/add_image.png") }}" alt="your image" class="img-fluid w-25"
                                    style="cursor:pointer;" />
                            </div>
                            <div class="col-md-8 d-none">
                                <input type="file" name="image" onchange="readURL(this)" id="image1"
                                    class="form-control">
                            </div>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Judul</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ @$edit ? $blog->title : old('title') }}" required>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content_short" class="col-md-2 col-form-label text-md-right">Deskripsi
                                Singkat</label>

                            <div class="col-md-8">
                                <textarea class="form-control"
                                    name="content_short">{{ @$edit ? $blog->content_short : old('content_short') }}</textarea>

                                @error('content_short')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-2 col-form-label text-md-right">Isi</label>

                            <div class="col-md-8">
                                <textarea class="form-control summernote"
                                    name="content">{{ @$edit ? $blog->content : old('content') }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-2">
                                <button type="submit" class="btn btn-danger btn-submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
