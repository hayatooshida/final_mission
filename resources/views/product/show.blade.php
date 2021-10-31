@extends('layouts.app')

@section('title')
{{ $product->name }}
@endsection

@section('content')
<div class="container">
    <div class="product">
        
        <div class="product__content-header text-center">
            <div class="product__name">
                {{ $product->name }}
            </div>
            <div class="product__price">
                ¥{{ number_format($product->price) }}
            </div>
        </div>
        {{ $product->description }}
    </div>
</div>
<img src="/upload/{{$product->image}}" width="400">
<form method="POST" action="{{ route('cart.create') }}">
             @csrf
             <input type="hidden" name="product_id" value="{{ $product->id }}"/>
             <div class="product__quantity">
                 <input type="number" name="quantity" min="1" value="1" require/>
             </div>
             <div class="product__btn-add-cart">
                 <button type="submit" class="btn btn-outline-secondary">カートに追加する</button>
             </div>
</form>
@endsection
