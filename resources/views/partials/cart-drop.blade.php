@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">

                    <img src="./img/{{ $item->attributes->image}}"
                         style="width: 75px; height: 75px;"
                    >
                </div>
                <div class="col-lg-6">
                    {{$item->name}}
                </div>
                <div class="col-lg-3">
                    <br><b>Qty:</b> {{$item->quantity}}
                    <p><b>$</b>{{ \Cart::get($item->id)->getPriceSum() }}</p>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Total: </b>${{ \Cart::getTotal() }}
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-primary btn-sm btn-block" href="{{route('cart.index')}}">
            CART <i class="fa fa-arrow-right"></i>
        </a>
        <a class="btn btn-success btn-sm btn-block" href="{{url('/checkout')}}">
            CHECKOUT <i class="fa fa-arrow-right"></i>
        </a>

    </div>
@else
    <li class="list-group-item">Your Cart is Empty</li>
@endif