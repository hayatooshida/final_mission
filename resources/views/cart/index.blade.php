@extends('layouts.app')

@section('content')


@foreach($cart as $carts)
{{ $carts->name }}
{{ $carts->price }}
{{ $carts->quantity }}

<div><img src="/upload/{{$carts->image}}" width="300"></div>
<form method="POST" action="/cart/{{ $carts->id }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger ml-1">カートから削除</button>
</form>
@endforeach

<button onClick="location.href='{{ route('cart.checkout') }}'" class="cart__purchase btn btn-success">
    購入する
</button>
@endsection