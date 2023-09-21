@extends('layout.master')

@section('halaman')
<h3 class="alert alert-warning">tambah category</h3>
<form action="{{route('category.store')}}" method="post">
@csrf
<div class="mb-3">
    <label>nama Kategori</label>
    <input type="text" name="name" class="form-control" required>
</div>
<input type="submit" value="Simpan" class="btn btn-primary">
<a href="{{route('category.index')}}" class="btn btn-warning">Kembali</a>
</form>
@endsection