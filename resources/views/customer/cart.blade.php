@extends('layouts.app')

@section('navbar')
@php
    $page = "Carts";
@endphp
    @include('layouts.nav.customer')
@endsection

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-9 col-sm-12 mb-2">
        @foreach($carts as $cart)
        <div class="card" style="width: 12rem; margin: 1rem">
            <div class="card-body">
                <div class="card-header text-center">
                    <img src="{{ asset('/img/'. $cart->product->thumbnail) }}" alt="{{ $cart->thumbnail }}" width="100px;">
                </div>
            <div class="card-body">
                <div class="cart-title">
                    <strong>{{ $cart->product->name }}</strong>
                </div>
                <div>
                    <p style="color : grey">{{  $cart->product->price }}</p>
                    <p style="color: gray">Qty : {{ $cart->quantity }}</p>
                    </div>
                </div>
            </div>
          </div>
        @endforeach
    </div>  

    <div class="col-md-3 col-sm-12">
     <div class="card border-0" style="max-width: 18rem;">
            <div class="card-header">Transaksi</div>
            <div class="card-body">
                @foreach ($carts as $c)
                <div class="row ">
                    <div class="col-8">
                        <p class="card-text"> {{ $c->product->name }} x {{ $c->quantity }} </p>
                    </div>
                    <div class="col-4">
                        <p class="card-text">{{ $c->product->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-7">
                        Total Harga
                    </div>
                    <div class="col-5">
                        <p style="color: green">{{ $total_harga }}</p>
                    </div>
                    <Button class="btn btn-success mt-2">Bayar Sekarang</Button>
                </div>
            </div>
    </div>  

@endsection
