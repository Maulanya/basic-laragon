@extends('layout.master')

@section('halaman')

<h1 class="alert alert-warning">Product</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Category Id</th>
      <th>Created</th>
      <th>Update</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $row)
    <tr>
     <td>{{$row->id}}</td>
     <td>{{$row->name}}</td>
     <td>{{$row->description}}</td>
     <td>{{$row->price}}</td>
     <td>{{$row->category_id}}</td>
     <td>{{$row->created_at}}</td>
     <td>{{$row->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection