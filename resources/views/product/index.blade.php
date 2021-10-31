@extends('layouts.app')

@section('content')

@foreach($product as $products)
<a href="{{ route('product.show', $products->id) }}" class="col-lg-4 col-md-6">
{{ $products->name }}
{{ $products->price }}
<div><img src="upload/{{$products->image}}"></div>
</a>
@endforeach

@endsection