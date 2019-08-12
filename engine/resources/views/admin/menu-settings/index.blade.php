@extends('layouts.carbon')

@section('title')
Menu
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.btnDelete').on('click', function (e) {
            e.preventDefault();
            var parent = $(this).parent();

            swal({
                    title: "Apa anda yakin?",
                    text: "Data akan terhapus secara permanen!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                })
                .then(function (willDelete) {
                    if (willDelete) {
                        parent.find('.formDelete').submit();
                    }
                });
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
                <div class="d-flex justify-content-between align-items-baseline card-header bg-dark text-light py-2">
                    <h5 class="mb-0">Menu</h5>
                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-white active" id="pills-paket-tab" data-toggle="pill"
                                href="#pills-paket" role="tab" aria-controls="pills-paket"
                                aria-selected="true">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" id="pills-sambal-tab" data-toggle="pill" href="#pills-sambal"
                                role="tab" aria-controls="pills-sambal" aria-selected="false">Sambal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" id="pills-express-tab" data-toggle="pill"
                                href="#pills-express" role="tab" aria-controls="pills-express"
                                aria-selected="false">Express</a>
                        </li>
                    </ul>
                </div>

                <div class="card-body tab-content" id="pills-tabContent">
                    <div class="row tab-pane fade show active py-0" id="pills-paket" role="tabpanel"
                        aria-labelledby="pills-paket-tab">
                        <div class="row">
                            <div class="col-12">
                                <h4>Menu Paket ({{ $paket_menus->count() }})</h4>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($paket_menus as $paket)
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('uploads/menus/'.$paket->image) }}"
                                        class="card-img-top img-fluid" alt="{{ $paket->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $paket->name }}</h5>
                                        <p class="card-text">{{ limit_text($paket->description, 20) }}</p>
                                        <p class="card-text">Rp{{ number_format($paket->price, 0, ',', '.') }}</p>
                                        <a href="{{ route('admin.menu.edit', $paket) }}"
                                            class="text-warning card-link">Edit</a>
                                        <a href="#" class="text-danger card-link btnDelete">Hapus</a>
                                        <form action="{{ route('admin.menu.destroy', $paket) }}" method="post"
                                            class="formDelete d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row tab-pane fade py-0" id="pills-sambal" role="tabpanel"
                        aria-labelledby="pills-sambal-tab">
                        <div class="row">
                            <div class="col-12">
                                <h4>Menu Sambal ({{ $sambal_menus->count() }})</h4>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($sambal_menus as $sambal)
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('uploads/menus/'.$sambal->image) }}"
                                        class="card-img-top img-fluid" alt="{{ $sambal->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $sambal->name }}</h5>
                                        <p class="card-text">{{ limit_text($sambal->description, 20) }}</p>
                                        <p class="card-text">Rp{{ number_format($sambal->price, 0, ',', '.') }}</p>
                                        <a href="{{ route('admin.menu.edit', $sambal) }}"
                                            class="text-warning card-link">Edit</a>
                                        <a href="#" class="text-danger card-link">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row tab-pane fade py-0" id="pills-express" role="tabpanel"
                        aria-labelledby="pills-express-tab">
                        <div class="row">
                            <div class="col-12">
                                <h4>Menu Express ({{ $express_menus->count() }})</h4>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($express_menus as $express)
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('uploads/menus/'.$express->image) }}"
                                        class="card-img-top img-fluid" alt="{{ $express->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $express->name }}</h5>
                                        <p class="card-text">{{ limit_text($express->description, 20) }}</p>
                                        <p class="card-text">Rp{{ number_format($express->price, 0, ',', '.') }}</p>
                                        <a href="{{ route('admin.menu.edit', $express) }}"
                                            class="text-warning card-link">Edit</a>
                                        <a href="#" class="text-danger card-link">Hapus</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
