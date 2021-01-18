@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Shop</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('cart.index')}}">Cart</a></li>
                <li class="breadcrumb-item" aria-current="page">Checkout</li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/about')}}">About</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/installation')}}">Installation</a></li>
            </ol>

        </nav>
        <h1>Checkout Page</h1>
        <h2>under construction</h2>
        <br>
        <a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a><br><br>
    </div>


@endsection