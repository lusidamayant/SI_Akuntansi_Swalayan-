@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Kategori</li>
        <li class="breadcrumb-item"><a href="{{ route('Admin') }}"></a>Data Kategori</li>
        <li class="breadcrumb-item active">Detail Data Kategori</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertKategori') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="id_kategori" class="form-label">id kategori</label>
        <input type="text" class="form-control" id="id_kategori" name="id_kategori">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama </label>
        <input type="text" class="form-control" id="nama " name="nama ">
      </div>

        </form>
      </div>
    </div>
@endsection