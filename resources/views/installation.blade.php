@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Shop</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('cart.index')}}">Cart</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/checkout')}}">Checkout</a></li>
                <li class="breadcrumb-item"><a href="{{url('/about')}}">About</a></li>
                <li class="breadcrumb-item active" aria-current="page">Installation</li>
            </ol>

        </nav>

        <p>
            composer create-project --prefer-dist  laravel/laravel:^7.0 <b>project_name</b> <br>
            composer create-project --prefer-dist  laravel/laravel <b>project_name</b>
        </p><hr>
        <p>cd project_name<br>
            php artisan -V
        </p><hr>
        <p>edit  env. file</p><hr>
        <p>mysql -u root -p <br>
            create database <b>db_name</b>; <br>
            exit <br><hr>
            composer require laravel/ui
        </p><hr>

        <p>php artisan ui bootstrap <br>
            php artisan ui bootstrap –auth &nbsp; <b>or</b><br>
        </p><hr>
        <p>php artisan ui vue <br>
            php artisan ui vue --auth <br>
        </p><hr>
        <p>
            composer require "darryldecode/cart:~4.0" &nbsp; <b>or</b> <br>
            composer require "darryldecode/cart"
        </p><hr>
        <p>npm install  && npm run dev <br>
           php artisan migrate  <br>
           php artisan serve  <br>
        </p>
    </div>
@endsection