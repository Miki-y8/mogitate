@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form">
    <h2 class="register__heading register__heading">商品登録</h2>
    <div class="register-form__inner">
        <form action="/products" method="post">
        @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">
                商品名<span
                class="register-form__required">必須
                </span>
                </label>
        <div class="register-form__name-inputs">
          <input class="register-form__input register-form__name-input" type="text" name="products_name" id="products-name"
            value="{{ old('product_name') }}" placeholder="商品名を入力">
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="price">
                値段<span
                class="register-form__required">必須
                </span>
                </label>
          <input class="register-form__input" type="text" name="price" id="price"
            value="{{ old('price') }}" placeholder="値段を入力">
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="photo">
                商品画像<span
                class="register-form__required">必須
                </span>
                </label>
            <class="register-form__select-inner">
          <select class="register-form__select" name="category_id" id="">
            <option disabled selected>ファイルを選択</option>
            </select>
            </div>
        <div class="register-form__group">
        <label class="register-form__label">
          季節<span class="register-form__required">必須</span>
        </label>
        <div class="register-form__season-inputs">
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" name="season" type="radio" id="spring" value="1">
              <span class="register-form__season-text">春</span>
            </label>
          </div>
        <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="summer" value="2">
              <span class="contact-form__gender-text">夏</span>
            </label>
          </div>
            <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="fall" value="3">
              <span class="contact-form__gender-text">秋</span>
            </label>
          </div>
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="winter" value="4">
              <span class="contact-form__gender-text">冬</span>
            </label>
          </div>
          <div class="register-form__group">
        <label class="registert-form__label" for="explanation">
          商品説明<span class="contact-form__required">必須</span>
        </label>
        <textarea class="register-form__textarea" name="explanation" id="" cols="30" rows="10"
          placeholder="商品の説明を入力">{{ old('detail') }}</textarea>
    <div class="register-form__btn-inner">
        <input class="register-form__back-btn btn" type="submit" value="戻る" name="back">
        <input class="register-form__send-btn" type="submit" value="登録" name="send">
      </div>
        </form>
    </div>
</div>