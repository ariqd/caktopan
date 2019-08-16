@extends('layouts.carbon')

@section('title')
About Us Settings
@endsection

@push('css')

@endpush

@push('js')

<script>
    $(document).ready(function () {});

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
                <div class="card-header bg-dark text-light">
                    <h4 class="mb-0">Slider Settings</h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('admin/slider') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Slider 1</label>
                                <div class="col-md-8">
                                    <img src="{{ asset("uploads/sliders/".$slide_1_image)}}" alt="" class="img-fluid
                                    w-50" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">
                                    Ubah Gambar<br>
                                    <small class="text-secondary">Isi jika gambar ingin diubah</small>
                                </label>
                                <div class="col-md-8">
                                    <img onclick=" showupload('image1')" id="image1-show"
                                        src="{{ asset("images/add_image.png") }}" alt="your image"
                                        class="img-fluid w-25" style="cursor:pointer;" />
                                </div>
                                <div class="col-md-8 d-none">
                                    <input type="file" name="slide_1_image" onchange="readURL(this)" id="image1"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slide_1_text" class="col-md-2 col-form-label text-md-right">Text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="slide_1_text" name="slide_1_text"
                                        value="{{ $slide_1_text }}">
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="form-group row">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <label for="name" class="col-md-2 col-form-label text-md-right">Slider 2</label>
                                <div class="col-md-8">
                                    <img src="{{ asset("uploads/sliders/$slide_2_image") }}" alt="" class="img-fluid
                                    w-50" />
                                </div>
                                <div class="col-md-2">
                                    <a href="#" class="btn btn-danger">Delete Slide</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">
                                    Ubah Gambar<br>
                                    <small class="text-secondary">Isi jika gambar ingin diubah</small>
                                </label>
                                <div class="col-md-8">
                                    <img onclick=" showupload('image2')" id="image2-show"
                                        src="{{ asset("images/add_image.png") }}" alt="your image"
                                        class="img-fluid w-25" style="cursor:pointer;" />
                                </div>
                                <div class="col-md-8 d-none">
                                    <input type="file" name="slide_2_image" onchange="readURL(this)" id="image2"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slide_2_text" class="col-md-2 col-form-label text-md-right">Text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="slide_2_text" name="slide_2_text"
                                        value="{{ $slide_2_text }}">
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="form-group row">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <label for="name" class="col-md-2 col-form-label text-md-right">Slider 3</label>
                                <div class="col-md-8">
                                    <img src="{{ asset("uploads/sliders/$slide_3_image") }}" alt="" class="img-fluid
                                    w-50" />
                                </div>
                                <div class="col-md-2">
                                    <a href="#" class="btn btn-danger">Delete Slide</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">
                                    Ubah Gambar<br>
                                    <small class="text-secondary">Isi jika gambar ingin diubah</small>
                                </label>
                                <div class="col-md-8">
                                    <img onclick=" showupload('image3')" id="image3-show"
                                        src="{{ asset("images/add_image.png") }}" alt="your image"
                                        class="img-fluid w-25" style="cursor:pointer;" />
                                </div>
                                <div class="col-md-8 d-none">
                                    <input type="file" name="slide_3_image" onchange="readURL(this)" id="image3"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slide_3_text" class="col-md-2 col-form-label text-md-right">Text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="slide_3_text" name="slide_3_text"
                                        value="{{ $slide_3_text }}">
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="form-group row">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <label for="name" class="col-md-2 col-form-label text-md-right">Slider 4</label>
                                <div class="col-md-8">
                                    <img src="{{ asset("uploads/sliders/$slide_4_image") }}" alt="" class="img-fluid
                                    w-50" />
                                </div>
                                <div class="col-md-2">
                                    <a href="#" class="btn btn-danger">Delete Slide</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">
                                    Ubah Gambar<br>
                                    <small class="text-secondary">Isi jika gambar ingin diubah</small>
                                </label>
                                <div class="col-md-8">
                                    <img onclick=" showupload('image4')" id="image4-show"
                                        src="{{ asset("images/add_image.png") }}" alt="your image"
                                        class="img-fluid w-25" style="cursor:pointer;"/>
                                </div>
                                <div class="col-md-8 d-none">
                                    <input type="file" name="slide_4_image" onchange="readURL(this)" id="image4"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slide_4_text" class="col-md-2 col-form-label text-md-right">Text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="slide_4_text" name="slide_4_text"
                                        value="{{ $slide_4_text }}">
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="form-group row">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <label for="name" class="col-md-2 col-form-label text-md-right">Slider 5</label>
                                <div class="col-md-8">
                                    <img src="{{ asset("uploads/sliders/$slide_5_image") }}" alt="" class="img-fluid
                                    w-50" />
                                </div>
                                <div class="col-md-2">
                                    <a href="#" class="btn btn-danger">Delete Slide</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">
                                    Ubah Gambar<br>
                                    <small class="text-secondary">Isi jika gambar ingin diubah</small>
                                </label>
                                <div class="col-md-8">
                                    <img onclick=" showupload('image5')" id="image5-show"
                                        src="{{ asset("images/add_image.png") }}" alt="your image"
                                        class="img-fluid w-25" style="cursor:pointer;" />
                                </div>
                                <div class="col-md-8 d-none">
                                    <input type="file" name="slide_5_image" onchange="readURL(this)" id="image5"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slide_5_text" class="col-md-2 col-form-label text-md-right">Text</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="slide_5_text" name="slide_5_text"
                                        value="{{ $slide_5_text }}">
                                </div>
                            </div>
                        </section>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-block btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
