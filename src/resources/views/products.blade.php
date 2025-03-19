@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('products')
<div class="products">
  <h2 class="product__heading products__heading">商品一覧</h2>
  <div class="products-form__inner">
    <input class="products-form__btn btn" type="submit" value="商品を追加">
    <form action="entry" method="post">
</div>
    </div>
    

    <div class="card">
  <div class="fruits__img">
    <img src="resources/views/img/fruits-img/banana.png" alt="バナナ">
  </div>
  <div class="card__content">
    <h2 class="card__content-ttl">
      今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。
    </h2>
</div>

<img src="/fruits-img/grapes.png" alt="ブドウ">