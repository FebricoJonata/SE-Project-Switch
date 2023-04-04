@extends('template')

@section('title', 'DetailPage')

@section('content')
<div id="main-body">

</div>
<section id="main-content"  class=" bg-dark">
    <div id="background-gambar">
        @include('truenavbar')


        <div class="container overflow-hidden">
            <div class="row py-6">


                <!-- SISI KIRI -->
                <div class="col-8 py-3" id="col-kiri">
                    <div class="container-fluid justify-content-center ">
                        <img src="./Assets/Images/zeus.png" alt="" class="d-block rounded mx-auto" id="itemPic">
                    </div>
                </div>

                <!-- SISI KANAN -->
                <div class="col-4 py-5" id="col-kanan">
                    <div class="container-fluid">
                        <p id="itemName">Zeus</p>
                        <h3 id="itemSkinName">Arcana</h3>
                        <h1 id="itemPrice">Rp459.000</h1>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="container d-flex flex-between justify-content-center"><input
                            class="btn btn-outline rounded px-3" type="submit" value="Add to cart"
                            id="sign-up-button">
                    </div>
                    <div class="container d-flex flex-between justify-content-center">
                        <button class="btn success justify-content-center" id="buy-now-btn">Buy now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- UNTUK CAROUSEL CARD -->
        <div class="container py-2" id="text-frame">
            <h3 style="color:white">DOTA 2 SKINS</h3>
        </div>
        <div class="d-flex flex-between" id="card-carousel-frame">
            <div class="container d-flex flex-row overflow-hidden px-3">

                <div class="card border-dark mx-3" style="width: 18rem;">
                    <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                    <div class="card-body bg-dark ">
                        <div class="container align-items-center">
                            <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                            <p class="card-text" id="itemPrice">Rp.
                                <span>459.000</span>
                            </p>
                            <a href="./detailPage.html" class="btn btn-outline-secondary text-align-center"
                                id="link-card">Get
                                Skin</a>
                        </div>
                    </div>
                </div>


                <div class="card border-dark mx-3" style="width: 18rem;">
                    <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                    <div class="card-body bg-dark ">
                        <div class="container align-items-center">
                            <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                            <p class="card-text" id="itemPrice">Rp.
                                <span>459.000</span>
                            </p>
                            <a href="./detailPage.html" class="btn btn-outline-secondary text-align-center"
                                id="link-card">Get
                                Skin</a>
                        </div>
                    </div>
                </div>

                <div class="card border-dark mx-3" style="width: 18rem;">
                    <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                    <div class="card-body bg-dark ">
                        <div class="container align-items-center">
                            <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                            <p class="card-text" id="itemPrice">Rp.
                                <span>459.000</span>
                            </p>
                            <a href="./detailPage.html" class="btn btn-outline-secondary text-align-center"
                                id="link-card">Get
                                Skin</a>
                        </div>
                    </div>
                </div>

                <div class="card border-dark mx-3" style="width: 18rem;">
                    <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                    <div class="card-body bg-dark ">
                        <div class="container align-items-center">
                            <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                            <p class="card-text" id="itemPrice">Rp.
                                <span>459.000</span>
                            </p>
                            <a href="./detailPage.html" class="btn btn-outline-secondary text-align-center"
                                id="link-card">Get
                                Skin</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>


@endsection
