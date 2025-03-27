@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('contents')
<div class="products-header">
  <h2 class="product__heading content__heading">商品一覧</h2>
  <form class="form" action="/register" method="post">
    @csrf
  <div class="addition-button">
  <input class="addition-button-submit" type="submit" value="➕商品を追加">
  </div>
  </form>
</div>


<div class="contents">
  <div class="search-contents">
    <input class="search-window__input" type="text" name="search" placeholder="商品名で検索">


    <div class="search-button">
    <input class="search-button-submit" type="submit" value="検索">
    </div>

    <h3>価格順で表示</h3>

    <input class="soet-window__input" type="text" name="sort" placeholder="価格で並べ替え">
  </div>



  <div class="goods">
   <div class="fruits"> 

    <div class="card">
      <div class="card__img">
      <img src="{{ asset('storage/banana.png')}}"alt="バナナ">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>バナナ</p>
        <p>¥600</p>
        </div>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/grapes.png') }}" alt="ブドウ">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>ブドウ</p>
        <p>¥1100</p>
        </div>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/kiwi.png') }}" alt="キウイ">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>キウイ</p>
        <p>¥800</p>
        </div>
      </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/melon.png') }}" alt="メロン">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>メロン</p>
        <p>¥900</p>
        </div>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/muscat.png') }}" alt="シャインマスカット">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>シャインマスカット</p>
        <p>¥1400</p>
        </div>
      </div>
      </div>
    </div>
  
    <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/orange.png') }}" alt="オレンジ">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>オレンジ</p>
        <p>¥850</p>
        </div>
      </div>
      </div>
    </div>

     <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/peach.png') }}" alt="ピーチ">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>ピーチ</p>
        <p>¥1000</p>
        </div>
      </div>
      </div>
    </div>

  <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/pineapple.png') }}" alt="パイナップル">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>パイナップル</p>
        <p>¥800</p>
        </div>
      </div>
      </div>
    </div>
  
  <div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/strawberry.png') }}" alt="ストロベリー">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>ストロベリー</p>
        <p>¥1200</p>
        </div>
      </div>
      </div>
    </div>

<div class="card">
      <div class="card__img">
      <img src="{{ asset('img/fruits-img/watermelon.png') }}" alt="スイカ">
      <div class="card__content">
        <div class="card__content-ttl">  
        <p>スイカ</p>
        <p>¥700</p>
        </div>
      </div>
      </div>
    </div>




  
    </div>
  </div>
</div>
@endsection