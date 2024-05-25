@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Biaya</li>
        <li class="breadcrumb-item"><a href="{{ route('Admin') }}"></a>Data biaya</li>
        <li class="breadcrumb-item active">Detail Data biaya</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertbiaya') }}" method="POST">
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

        </form>
      </div>
    </div>
@endsection