@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('products')
<div class="product">
  <h2 class="product__heading product__heading">商品一覧</h2>
  <div class="product-form__inner">
    <input class="product-form__btn btn" type="submit" value="商品を追加">
    <form action="entry" method="post">
</div>
    </div>