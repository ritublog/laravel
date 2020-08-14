@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('CRUDController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
       <div class="form-group">
         Name:-<input type="text" name="name" class="form-control" value="{{$curd->name}}">
       </div>
       <div class="form-group">
         Price:-<input type="text" name="price" class="form-control" value="{{$curd->price}}">
       </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
