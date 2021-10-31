@extends('layouts.app')

@section('content')

<form enctype="multipart/form-data" action="{{ url('books') }}" method="POST">
    @csrf
<div class="form-row">
   <div class="form-group col-md-6">
    <label for="name" class="col-sm-3 control-label">name</label>
    <input type="text" name="name" class="form-control">
   </div>
   <div class="form-group col-md-6">
       <label for="description" class="col-sm-3 control-label">description</label>
       <input type="text" name="description" class="form-control">
   </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="price" class="col-sm-3 control-label">price</label>
        <input type="text" name="price" class="form-control">
    </div>
    <div class="col-sm-6">
        <label>image</label>
        <input type="file" name="image">
    </div>
</div>
<div class="form-row">
    <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</div>
  
</form>
@endsection