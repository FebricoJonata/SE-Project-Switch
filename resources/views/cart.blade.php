@extends('template')

@section('title', 'Cart')

@section('content')
    <div class="container">
        {{-- @for ($i=0; $i<3; $i++) --}}
        @if (session('cart'))
        @foreach(session('cart') as $id => $details)
        @php $total += $details['harga'] * $details['quantity'] @endphp
        <div class="card my-5" id="product">
            <div class="card-body d-flex justify-content-between">
                <div id="left" class="d-flex align-items-center">
                    <div id="left-img">
                        <img class="cart-image" src="https://images.unsplash.com/photo-1680762424301-604a1697f698?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                    <div id="left-name" class="mx-3">
                        <h1 class="product-name">{{$details['nama']}}</h1>
                        <h1 class="text-big">
                            <b>Arcana</b>
                        </h1>
                    </div>
                </div>


                <div id="right" class="d-flex">
                    <div id="right-price" class="d-flex justify-content-center align-items-center">
                        <h1 class="text-big">
                            {{$total}}
                        </h1>
                    </div>
                    <div id="right-close" >
                        <a href="">
                            <i id="close-btn" class="fa-regular fa-circle-xmark fa-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        
        {{-- @endfor --}}
    </div>

    <div id="total-bar" class="fixed-bottom d-flex align-items-center">
        <div class="d-flex justify-content-between w-100 px-5">
            <div id="total-bar-left">
                <h3 id="total-items">Total items: 3</h3>
            </div>
            <div id="total-bar-right" class="d-flex justify-content-center align-items-center">
                <div id="total-bar-right-price" class="px-3">
                    <h3 id="total-price">Rp.900.000</h3>
                </div>
                <div id="total-bar-right-btn" >
                    <a href="" id="buy-btn">Buy</a>
                </div>
            </div>

        </div>
    </div>
@endsection