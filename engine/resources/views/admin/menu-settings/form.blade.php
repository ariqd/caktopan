@extends('layouts.carbon')

@section('title')
{{ @$edit ? 'Edit' : 'Tambah' }} Menu
@endsection

@push('js')
<script>
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
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ @$edit ? 'Edit' : 'Tambah' }} Menu
                    {{ @$edit ? $menu->name : '' }}</div>

                <div class="card-body">
                    <form action="{{ @$edit ? route("admin.menu.update", $menu) : url('admin/menu') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        {{ @$edit ? method_field('PUT') : '' }}

                        @if (@$edit)
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Gambar saat ini</label>
                            <div class="col-md-7">
                                <img src="{{ asset("uploads/menus/$menu->image") }}" alt="" class="img-fluid w-50" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">
                                Ubah Gambar<br>
                                <small class="text-secondary">Isi jika gambar ingin diubah</small>
                            </label>
                            <div class="col-md-7">
                                <img onclick=" showupload('image1')" id="image1-show"
                                    src="{{ asset("images/add_image.png") }}" alt="your image" class="img-fluid w-50"
                                    style="cursor:pointer;" />
                            </div>
                            <div class="col-md-7 d-none">
                                <input type="file" name="image" onchange="readURL(this)" id="image1"
                                    class="form-control">
                            </div>
                        </div>
                        @else
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">
                                Gambar
                            </label>
                            <div class="col-md-7">
                                <img onclick=" showupload('image1')" id="image1-show"
                                    src="{{ asset("images/add_image.png") }}" alt="your image" class="img-fluid w-50"
                                    style="cursor:pointer;" />
                            </div>
                            <div class="col-md-7 d-none">
                                <input type="file" name="image" onchange="readURL(this)" id="image1"
                                    class="form-control">
                            </div>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Nama</label>

                            <div class="col-md-7">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ @$edit ? $menu->name : old('name') }}" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-3 col-form-label text-md-right">Kategori</label>

                            <div class="col-md-7">
                                <select name="category" id="category"
                                    class="form-control @error('category') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category }}"
                                        {{ @$edit && $category == $menu->category ? 'selected' : '' }}>{{ $category }}
                                    </option>
                                    @endforeach
                                </select>

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Deskripsi</label>

                            <div class="col-md-7">
                                <input id="description" type="description"
                                    class="form-control @error('description') is-invalid @enderror" name="description"
                                    value="{{ @$edit ? $menu->description : old('description') }}" required>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-3 col-form-label text-md-right">Harga (Rp)</label>

                            <div class="col-md-7">
                                <input id="price" type="price" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ @$edit ? $menu->price : old('price') }}" required>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-3 col-form-label text-md-right">Link TokPed</label>

                            <div class="col-md-7">
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                    name="url" value="{{ @$edit ? $menu->url : old('url') }}" required>

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-danger">
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
