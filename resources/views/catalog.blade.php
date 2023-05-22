@extends('template')

@section('title', 'Catalog')

@section('content')
<section class="bg-dark" id="main-body">

    <div id="background-gambar">
        @include('truenavbar')

        <!-- CATALOG GAME -->
        <section id="catalog-game1">
            <div class="container d-flex flex-column" id="catalog-main">


                <!-- DOTA 2 -->
                <h1 class="text-light mt-5 ms-4 mb-4" id="judul-item">DOTA 2</h1>


                <div class="container d-flex flex-row" id="product-list">
                    <!-- ISI ITEM-->
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
                                                <a href="/detail/{{$barangs->id}}" class="btn btn-outline-secondary text-align-center"
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
        </section>
    </div>
</section>

{{-- <div class="d-flex justify-content-center bg-dark">
    {{$barang->links()}}
</div> --}}


@endsection
