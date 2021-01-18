@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Shop</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('cart.index')}}">Cart</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/checkout')}}">Checkout</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/installation')}}">Installation</a></li>
            </ol>
            </ol>

        </nav>
        <h1>Laravel 5 & 6 & 7 Shopping Cart</h1>
        <p>
            A Shopping Cart Implementation for Laravel Framework
        </p><hr>
        <p>
            Languages<br>
            PHP &nbsp;100.0%
        </p><hr>

    </div>
@endsection