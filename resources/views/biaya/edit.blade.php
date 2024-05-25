@extends('layout.app')
@section('content')

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('biaya.index') }}">Biaya</a></li>
      <li class="breadcrumb-item active">Edit Data biaya</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <form action="{{ route('biaya.update', $biaya->kode_biaya) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="kode_biaya" class="form-label">Kode Biaya</label>
        <input type="text" class="form-control" id="kode_biaya" name="kode_biaya" value="{{ $biaya->kode_biaya }}">
      </div>
      <div class="mb-3">
        <label for="keterangan	" class="form-label">Keterangan	</label>
        <input type="text" class="form-control" id="keterangan	" name="keterangan	" value="{{ $biaya->keterangan	 }}">
      </div>
      <div class="mb-3">
        <label for="total_biaya" class="form-label">Total Biaya</label>
        <input type="text" class="form-control" id="total_biaya" name="total_biaya" value="{{ $biaya->text }}">
      </div>
      <div class="mb-3 text-right">
        <a href="{{ route('biaya.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection