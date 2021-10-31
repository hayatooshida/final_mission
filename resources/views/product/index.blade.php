@extends('layouts.app')

@section('content')

@foreach($product as $products)

{{ $products->name }}
{{ $products->price }}
<div><img src="upload/{{$products->image}}"></div>
@endforeach

@endsection