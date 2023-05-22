@extends('template')

@section('title', 'Home')

@section('content')
<section class="bg-dark" id="main-body">
    <section id="main-content">
        <div id="background-gambar">
            @include('truenavbar')
            <!-- UNTUK CAROUSEL MAIN -->
            <div class="container overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-12 align-items-center" id="carousel-main">
                        <div id="carousel-frame">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        @if ($barang[0]->foto)
                                            <div style="max-height: 600px; max-width: 1600px; overflow: hidden" id="carousel-gambar">
                                                <img src="{{Storage::url($barang[0]->foto)}}" class="img-fluid" alt="photo">
                                            </div>
                                        @else
                                            <img src="https://source.unsplash.com/1600x600?{{ $barang[0]->nama }}" class="img-fluid" alt="photo">
                                        @endif
                                    </div>
                                    <div class="carousel-item">
                                        @if ($barang[1]->foto)
                                            <div style="max-height: 600px; max-width: 1600px; overflow: hidden" id="carousel-gambar">
                                                <img src="{{Storage::url($barang[1]->foto)}}" class="img-fluid" alt="photo">
                                            </div>
                                        @else
                                            <img src="https://source.unsplash.com/1600x600?{{ $barang[1]->nama }}" class="img-fluid" alt="photo">
                                        @endif
                                    </div>
                                    <div class="carousel-item">
                                        @if ($barang[2]->foto)
                                            <div style="max-height: 600px; max-width: 1600px; overflow: hidden" id="carousel-gambar">
                                                <img src="{{Storage::url($barang[2]->foto)}}" class="img-fluid" alt="photo">
                                            </div>
                                        @else
                                            <img src="https://source.unsplash.com/1600x600?{{ $barang[2]->nama }}" class="img-fluid" alt="photo">
                                        @endif
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- UNTUK CAROUSEL CARD -->
            <div class="container" id="text-frame">
                <h3 style="color:white">DOTA 2 SKINS</h3>
            </div>
            <div class="d-flex flex-between" id="card-carousel-frame">
                    <div class="container mt-4">
                        <div class="row">
                            @for ($i = 0; $i < 3; $i++)
                            <div class="col-md-4 mb-3 d-flex flex-row overflow-hidden px-3 ">
                                <div class="card border-dark mx-3" style="width: 18rem; img-fluid">
                                    @if ($barang[$i]->foto)
                                    <img src="{{Storage::url($barang[$i]->foto)}}" class="card-img-top" alt="Image" id="card-image">
                                    @else
                                    <img src="https://source.unsplash.com/600x400?{{ $barang[$i]->nama }}" class="card-img-top" alt="API">
                                    @endif
                                    <div class="card-body bg-dark ">
                                        <div class="container align-items-center">
                                            <p class="card-text" id="itemName"> {{$barang[$i]->nama}} </p>
                                            <p class="card-text" id="itemPrice">Rp.
                                                <span>{{$barang[$i]->harga}}</span>
                                            </p>
                                            <a href="/detail/{{$barang[$i]->id}}"class="btn btn-outline-secondary text-align-center"
                                                id="link-card">Get Skin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATALOG ITEMS-->
            <section class="catalog">
                <div class="container d-flex flex-column align-items-center">
                    <h1 class="text-light text-center mt-5">DISCOVER MORE</h1>
                    <h3 class="text-light text-center mb-4" id="description-bawah">
                        become the envy of all players
                    </h3>
                    <a class="btn rounded" id="button-catalog" href="/catalog">See
                        Catalog</a>
                    <!-- <button class="btn success px-3" id="sign-in-button">Sign in</button> -->
                </div>
            </section>
        </div>
    </section>
</section>

@endsection
