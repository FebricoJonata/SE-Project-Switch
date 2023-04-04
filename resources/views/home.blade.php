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
                                        <img src="./Assets/images/dota-carousel-1.jpg" class="d-block w-100"
                                            id="carousel-gambar" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./Assets/Images/dota-carousel-2.jpg" class="d-block w-100"
                                            id="carousel-gambar" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./Assets/Images/dota-carousel-3.jpg" class="d-block w-100"
                                            id="carousel-gambar" alt="...">
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

            <!-- CATALOG ITEMS-->
            <section class="catalog">
                <div class="container d-flex flex-column align-items-center">
                    <h1 class="text-light text-center mt-5">DISCOVER MORE</h1>
                    <h3 class="text-light text-center mb-4" id="description-bawah">
                        become the envy of all players
                    </h3>
                    <a class="btn rounded" id="button-catalog" href="./catalog.html">See
                        Catalog</a>
                    <!-- <button class="btn success px-3" id="sign-in-button">Sign in</button> -->
                </div>
            </section>
        </div>
    </section>
</section>
@endsection
