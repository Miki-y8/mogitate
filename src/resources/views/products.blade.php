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
    