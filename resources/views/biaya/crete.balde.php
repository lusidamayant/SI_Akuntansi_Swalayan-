@extends('layout.app')
@section('content')

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('biaya.index') }}">Biaya</a></li>
      <li class="breadcrumb-item active">Tambah Data Biaya</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <form action="{{ route('biaya.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="kode_biaya" class="form-label">Kode Biaya</label>
        <input type="text" class="form-control" id="kode_biaya" name="kode_biaya">
      </div>
      <div class="mb-3">
        <label for="Keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan">
      </div>
    
      <div class="mb-3">
        <label for="total_biaya" class="form-label">total biaya</label>
        <input type="harga_beli" class="form-control" id="total_biaya" name="total_biaya">
      </div>
      <div class="mb-3 text-right">
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection