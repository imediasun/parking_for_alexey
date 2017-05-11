@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('cart')&& $totalPrice>0 )
    <div class="row">
<div class="col-sm-12 col-md-12 col-md-ofset-6 col-sm-ofset-6">
        <ul class="list-group">
            @foreach($products as $product)
            <li class="list-group-item">

                <span class="badge">{{$product['summ_quantaty'] }}</span>
                <strong>{{$product['item']['name']}}</strong>
            <span class="label label-success">{{$product['price']}}</span>
            <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('delete_product_by_one',['product'=>$product['item']['id']]) }}">Видалити по 1</a></li>
                    <li><a href="{{ route('delete_products',['product'=>$product['item']['id']]) }}">Видалити всі</a></li>
                </ul>
            </div>
            </li>
            @endforeach
        </ul>
</div>
    </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-md-ofset-6 col-sm-ofset-6">
                <strong>Всего: {{$totalPrice}}</strong>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-md-ofset-6 col-sm-ofset-6">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Оформити заказ</a>

            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-12 col-md-12 col-md-ofset-6 col-sm-ofset-6">
            <h2>В корзине нет товаров!</h2>
            </div>
        </div>
    @endif
</div>
@endsection
