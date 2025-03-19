@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('contents')
<div class="products-header">
  <h2 class="product__heading content__heading">商品一覧</h2>
  <div class="addition-button">
  <input class="addition-button-submit" type="submit" value="➕商品を追加">
  </input>
  </div>
</div>


<div class="goods">
  <div class="card">
  <img src="{{ asset('img/fruits-img/banana.png') }}" alt="バナナ">
  <div class="card__content">
    <h2 class="card__content-ttl">
    バナナ
    </h2>
    </div>
  </div>
</div>


@endsection