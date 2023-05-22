@extends('template')

@section('title', 'Cart')

@section('content')
    <div class="container">
        @php
            $total = 0; // Initialize total outside the loop
            $quantity = 0;
        @endphp

        @foreach ($data as [$c, $b])
                @php
                    $total += $b->harga * $c->quantity;
                    $quantity += $c->quantity;
                @endphp

                <div class="card my-5" id="product">
                    <div class="card-body d-flex justify-content-between">
                        <div id="left" class="d-flex align-items-center">
                            <div id="left-img">
                                <img class="cart-image" src="{{Storage::url($b->foto)}}" alt="">
                            </div>
                            <div id="left-name" class="mx-3">
                                <h1 class="product-name">{{ $b->nama }}</h1>
                                <h1 class="text-big">
                                    <b>Game Type</b>
                                </h1>
                            </div>
                        </div>
                        <div id="right" class="d-flex">
                            <div id="right-price" class="d-flex flex-column justify-content-end align-items-center">
                                <h1 class="text-big">
                                    {{ $b->harga }}
                                </h1>
                                <h2 class="text-medium">Quantity : {{$c->quantity}}</h2>
                            </div>
                            <div id="right-close">
                                <a href="/del-cart/{{$b->id}}">
                                    <i id="close-btn" class="fa-regular fa-circle-xmark fa-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    <div id="total-bar" class="fixed-bottom d-flex align-items-center">
        <div class="d-flex justify-content-between w-100 px-5">
            <div id="total-bar-left">
                <h3 id="total-items">Total items: {{ $quantity }}</h3>
            </div>
            <div id="total-bar-right" class="d-flex justify-content-center align-items-center">
                <div id="total-bar-right-price" class="px-3">
                    <h3 id="total-price">Rp.{{ $total }}</h3>
                </div>
                <div id="total-bar-right-btn" >
                    <a href="" id="buy-btn">Buy</a>
                </div>
            </div>
        </div>
    </div>
@endsection
