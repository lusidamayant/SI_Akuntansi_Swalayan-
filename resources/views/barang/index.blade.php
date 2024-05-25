@extends('layout.app')
@section('content')

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Barang</a></li>
            <li class="breadcrumb-item active"> List</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
{{-- Alert Success Add --}}
@if (session()->has('primary'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    {{ session('primary') }}
</div>
@endif
{{-- Alert Success Update --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif
{{-- Alert Success Delete --}}
@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('danger') }}
</div>
@endif
<div class="card">
    <div class="card-header">
        <div class="buttons">
            <a href="{{ route('barang.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
            <a href="{{ route('barang.export-pdf') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-body table-responsive">
                <table class='table datatable table-striped table-bordered' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $x => $item)
                        <tr>
                            <td>{{ $x+1 }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->kategori->nama }}</td>
                            <td>{{ $item->harga_jual }}</td>
                            <td>{{ $item->harga_beli }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('barang.edit', $item->kode_barang) }}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('barang.destroy', $item->kode_barang) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" onclick="if(!confirm('Anda yakin menghapus data ini?')) return false;" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection