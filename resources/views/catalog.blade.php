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
                    <!-- ISI ITEM DOTA 2 -->


                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center" id="bg-cons">
                                <p class="card-text" id="itemName">GEMING</p>
                                <div id="tes-pos">
                                    <p class="card-text" id="itemPrice">Rp.
                                        <span>340.000</span>
                                    </p>
                                    <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                        Skin</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 4.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">Bladeform Legacy</p>
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>429.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>

                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 6.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">Sample 3</p>
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>459.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>


                    <!-- TEST ITEM -->
                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/test-gambar.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">Ascendant_Lone_d</p>
                                <div class="container mb-1" id="spasi-kartu">
                                    a<br>
                                </div>
                                <p class=" card-text" id="itemPrice">Rp.
                                    <span>340.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>

                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/test-gambar.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">Ascendant Lone Druid</p>
                                <!-- <br id="spasi-kartu"> -->
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>340.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>

                            <div class=""></div>
                        </div>
                    </div>






                </div>



                <!-- GAME 2 -->
                <h1 class="text-light mt-5 ms-4 mb-4" id="judul-item">DOTA 2</h1>
                <div class="container d-flex flex-row " id="product-list">
                    <!-- ISI ITEM DOTA 2 -->
                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>459.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>

                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 4.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>459.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-light mt-5 ms-4 mb-4" id="judul-item">DOTA 2</h1>
                <div class="container d-flex flex-row " id="product-list">
                    <!-- ISI ITEM DOTA 2 -->
                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 1.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>459.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>

                    <div class="card border-dark mx-3" style="width: 14rem;" id="product-item">
                        <img src="./Assets/Images/image 4.png" class="card-img-top" alt="..." id="card-image">
                        <div class="card-body bg-dark">
                            <div class="container d-flex flex-column align-items-center">
                                <p class="card-text" id="itemName">ZEUS - ARCANA</p>
                                <p class="card-text" id="itemPrice">Rp.
                                    <span>459.000</span>
                                </p>
                                <a href="./detailPage.html" class="btn btn-outline-secondary" id="link-card">Get
                                    Skin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
