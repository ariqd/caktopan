<div class="container pb-5">
    <div class="row">
        <div class="col-12 col-lg-4 offset-lg-4">
            <h2 class="text-center font-roadway my-5" style="border-bottom: 1px solid #424242;">
                SAMBAL
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
            <div class="row">
                @foreach ($sambal_menus as $sambal)
                <div class="col-12 col-lg-4">
                    <div class="text-center py-3">
                        <img src="{{ asset('uploads/menus/'.$sambal->image) }}" alt="" class="img-fluid w-100 h-100">
                        <h3 class="font-roadway pt-3">{{ strtoupper($sambal->name) }}</h3>
                        <div class="border-bottom border-dark pt-3"></div>
                        <p class="font-roadway pt-3">
                            {{ strtoupper($sambal->description) }}
                        </p>
                        <h4 class="pt-3">
                            Rp{{ number_format($sambal->price, 0, ',', '.') }}
                        </h4>
                        <a href="{{$sambal->url}}"><img src="{{asset('images/icons/tokped.png')}}" style="height: auto; width: 60%; margin-top: 4%;"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
