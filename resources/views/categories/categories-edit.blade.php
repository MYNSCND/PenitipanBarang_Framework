@extends('layouts.app')

@section('title')
Edit Category | Admin Penitipan
@endsection

@section('content')
<h3>Edit Categories</h3>
<div class="form-login">
  <form action="{{ url('/category/update/' . $category->id_categories) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="categories">Categories</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Categories"
      value="{{ old('nama', $category->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="date">Tanggal</label>
    <input class="input" type="text" name="tanggal" id="date" placeholder="date"
      value="{{ old('tanggal', $category->tanggal) }}" />
    @error('tanggal')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description"
      placeholder="Description">{{ old('deskripsi', $category->deskripsi) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="photo">Photo</label>
    <img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
