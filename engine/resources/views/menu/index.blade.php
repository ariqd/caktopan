@extends("layouts.master")

@section("title")
Menu
@endsection

@push('css')
<style>
    .bg-grey {
        background: #E0E0E0 !important;
    }

    .bg-grey:hover {
        background: #212121;
    }

    .bg-grey.active {
        background: #F8F9FA !important;
    }

    .text-md {
        font-size: 1.5em;
    }

    .text-underline {
        text-decoration: underline;
    }

</style>
@endpush

@section("content")
<section>
    <div class="container-fluid" style="background: #FFEB3B; height: 50vh;">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="font-weight-bolder text-xl text-white" style="padding: 200px 0">
                        MENU
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid" style="background: #FFFFFF;">
        <div class="row ">
            <div class="col-12 px-0" style="background: #FFEB3B;">
                <nav style="background: #FFFFFF;">
                    <div class="nav nav-tabs d-flex flex-row justify-content-center px-0" id="nav-tab" role="tablist"
                        style="background: #FFEB3B;">
                        <a class="nav-item nav-link bg-grey font-roadway text-center w-25 active px-0 py-2"
                            id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                            aria-selected="true">
                            <h5>PENYETAN</h5>
                        </a>
                        <a class="nav-item nav-link bg-grey font-roadway text-center mx-3 mx-md-5 w-25 px-0 py-2"
                            id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">
                            <h5>SAMBAL</h5>
                        </a>
                        <a class="nav-item nav-link bg-grey font-roadway text-center w-25 px-0 py-2"
                            id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                            aria-controls="nav-contact" aria-selected="false">
                            <h5>EXPRESS</h5>                            
                        </a>
                    </div>
                </nav>
                <div class="tab-content bg-light" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        @include('menu.menu-penyetan')
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        @include('menu.menu-sambal')
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        @include('menu.menu-express')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
