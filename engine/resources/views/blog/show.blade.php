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
    <div class="container-fluid" style="background: #FFFDE7; height: 300px;">
        {{-- <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="font-weight-bolder text-xl" style="padding: 200px 0">
                        BLOG
                    </h1>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<section style="background: #FFFDE7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 pt-5 bg-light">
                <h1 class="text-center font-roadway text-xl">PROMO MEMBERSHIP</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 bg-light">
                <div class="col-12 col-lg-8 offset-lg-2 pt-5 bg-light">
                    <h5 class="font-roadway">9 AGUSTUS 2019</h5>
                    <p class="mt-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem omnis officiis
                        obcaecati,
                        deleniti neque cum ipsa velit vel minima numquam molestias voluptate aliquid? Provident quisquam
                        pariatur modi facere aperiam reiciendis.
                    </p>
                    <p class="mt-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem omnis officiis
                        obcaecati,
                        deleniti neque cum ipsa velit vel minima numquam molestias voluptate aliquid? Provident quisquam
                        pariatur modi facere aperiam reiciendis.
                    </p>
                    <p class="mt-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem omnis officiis
                        obcaecati,
                        deleniti neque cum ipsa velit vel minima numquam molestias voluptate aliquid? Provident quisquam
                        pariatur modi facere aperiam reiciendis.
                    </p>
                    <p class="mt-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem omnis officiis
                        obcaecati,
                        deleniti neque cum ipsa velit vel minima numquam molestias voluptate aliquid? Provident quisquam
                        pariatur modi facere aperiam reiciendis.
                    </p>
                    <img src="{{ asset('assets/images/promo.png') }}" alt="" class="img-fluid w-100 h-100 mt-3">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
