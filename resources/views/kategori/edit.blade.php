@extends('layout.app')
@section('content')

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
      <li class="breadcrumb-item active">Edit Data Kategori</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nama" class="form-label">Nama </label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategori->nama }}">
      </div>
      <div class="mb-3 text-right">
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection