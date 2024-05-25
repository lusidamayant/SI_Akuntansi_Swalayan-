@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Barang</li>
        <li class="breadcrumb-item"><a href="{{ route('Admin') }}"></a>Data barang</li>
        <li class="breadcrumb-item active">Detail Data barang</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertbarang') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="kode_barang" class="form-label">kode_barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang">
          </div>
          <div class="col-12">
            <label for="nama_barang" class="form-label">nama_barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
          </div>
          <div class="col-12">
            <label for="harga_jual" class="form-label">harga jual</label>
            <input type="harga_jual" class="form-control" id="harga_jual" name="harga_jual">
          </div>
          <div class="col-12">
            <label for="harga_beli" class="form-label">harga_beli</label>
            <input type="harga_beli" class="form-control" id="harga_beli" name="harga_beli">
          </div>
          <div class="mb-3">
        <label for="id_kategori" class="form-label">Kategori</label>
        <select name="id_kategori" id="id_kategori" class="form-select">
          <option value="" selected disabled hidden>Pilih Kategori</option>
          @foreach($kategori as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
      </div>

        </form>
      </div>
    </div>
@endsection