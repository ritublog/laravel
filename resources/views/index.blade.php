@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['price']}}</td>
        <td><img src="{{URL::to('/')/images/{{$post['image']}}"></td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @endsection