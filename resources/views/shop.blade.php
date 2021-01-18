@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Shop</li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('cart.index')}}">Cart</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/checkout')}}">Checkout</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/about')}}">About</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/installation')}}">Installation</a></li>
            </ol>

        </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Products In Our Store</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="./img/{{ $pro->image}} "

                                     class="card-img-top mx-auto"
                                     style="display: block;"
                                     alt="{{ $pro->image }}">
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->name }}</h6></a>
                                    <p>${{ $pro->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">

                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image }}" id="img" name="img">

                                        <input type="hidden" value="1" id="quantity" name="quantity">

                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                                <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> add to cart
                                                </button>
                                            </div>
                                        </div> <!-- end ccard-footer -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection