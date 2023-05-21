@extends('template')

@section('title', 'Detail Page')

@section('content')
<div id="main-body">

</div>
<section id="main-content"  class=" bg-dark">
    <div id="background-gambar">
        {{-- @include('truenavbar') --}}
        <div class="container overflow-hidden">
            <div class="row py-6">
                
                
                @foreach ($barang as $barangs)
                <!-- SISI KIRI -->
                <div class="col-8 py-3" id="col-kiri">
                    <div class="container-fluid justify-content-center">
                        <img src="{{Storage::url($barangs->foto)}}" alt="" class="d-block rounded mx-auto img-fluid" id="itemPic">
                    </div>
                </div>

                <!-- SISI KANAN -->

                <div class="col-4 py-5" id="col-kanan">
                    <div class="container-fluid">
                        <p id="itemName">{{$barangs->nama}}</p>
                        {{-- <h3 id="itemSkinName">Arcana</h3> --}}
                        <h1 id="itemPrice" class="rem">{{$barangs->harga}}</h1>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="container d-flex flex-between justify-content-center">
                        <a href=""><input class="btn btn-outline rounded px-3" type="submit" value="Add to cart"
                            id="sign-up-button"></a>
                        
                    </div>
                    <div class="container d-flex flex-between justify-content-center">
                        <button class="btn success justify-content-center" id="buy-now-btn">
                            Buy now</button>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- UNTUK CAROUSEL CARD -->
        <div class="container py-2" id="text-frame">
            <h3 style="color:white">DOTA 2 SKINS</h3>
        </div>
    
        {{-- Still show item by ID --}}
        <div class="d-flex flex-between" id="card-carousel-frame">
            <div class="container mt-4">
                <div class="row">
                    @foreach ($barang as $barangs)
                    <div class="col-md-4 mb-3 d-flex flex-row overflow-hidden px-3 ">
                        <div class="card border-dark mx-3" style="width: 18rem; img-fluid">
                            @if ($barangs->foto)
                            <img src="{{Storage::url($barangs->foto)}}" class="card-img-top" alt="Image" id="card-image"> 
                            @else
                            <img src="https://source.unsplash.com/600x400?{{ $barangs->nama }}" class="card-img-top" alt="API"> 
                            @endif
                            <div class="card-body bg-dark ">
                                <div class="container align-items-center">
                                    <p class="card-text" id="itemName"> {{$barangs->nama}} </p>
                                    <p class="card-text" id="itemPrice">Rp.
                                        <span>{{$barangs->harga}}</span>
                                    </p>
                                    <a href="/detail/{{$barangs->id}}"class="btn btn-outline-secondary text-align-center"
                                        id="link-card">Get
                                        Skin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- End card section --}}
    @endforeach

</section>
@endsection
