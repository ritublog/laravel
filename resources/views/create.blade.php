@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('product')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <div class="form-group">
        Name:-<input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        Price:-<input type="text" name="price" class="form-group">
      </div>
      <div class="form-group">
        Image:-<input type="file" name="Image">
      </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection