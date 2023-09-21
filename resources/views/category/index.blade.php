@extends('layout.master')

@section('halaman')

<h1 class="alert alert-warning">Data Category</h1>
<a href="{{route('category.create')}}" class="btn btn-primary">+ Tambah Data</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Tanggal</th>
      <th>Update</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $row)
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->created_at}}</td> 
      <td>{{$row->updated_at}}</td> 
      <td><button type="button" class="btn btn-primary">Update</button> | <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection