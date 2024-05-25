@extends('layout.app')
@section('content')

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Barang</a></li>
      <li class="breadcrumb-item active">Tambah Data barang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <form action="{{ route('barang.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="kode_barang" class="form-label">Kode Barang</label>
        <input type="text" class="form-control" id="kode_barang" name="kode_barang">
      </div>
      <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
      </div>
      <div class="mb-3">
        <label for="harga_jual" class="form-label">Harga Jual</label>
        <input type="harga_jual" class="form-control" id="harga_jual" name="harga_jual">
      </div>
      <div class="mb-3">
        <label for="harga_beli" class="form-label">Harga Beli</label>
        <input type="harga_beli" class="form-control" id="harga_beli" name="harga_beli">
      </div>
      <div class="mb-3">
        <label for="id_kategori" class="form-label">Kategori</label>
        <select name="id_kategori" id="id_kategori" class="form-control">
          <option value="" selected disabled hidden>Pilih Kategori</option>
          @foreach($kategori as $item)
          <option value="{{ $item->id_kategori }}">{{ $item->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3 text-right">
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection