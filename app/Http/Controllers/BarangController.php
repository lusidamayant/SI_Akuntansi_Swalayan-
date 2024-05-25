<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use PDF;//import dom pdf

class BarangController extends Controller
{

     // fungsi untuk menampilkan data 
    public function index()
    {
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }

    //fungsi untuk meambahkan barang
    public function create()
    {
        $kategori = Kategori::all();

        return view('barang.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'id_kategori' => $request->id_kategori,
        ]);

        return redirect('/barang')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        $kategori = Kategori::all();
        return view('barang.edit', compact('barang', 'kategori'));
    }

    //fungsi untuk hapus data
    public function update(Request $request, Barang $barang)
    {
        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'id_kategori' => $request->id_kategori,
        ]);

        return redirect('/barang')->with('success', 'Data berhasil diupdate');
    }

    //fungsi mnehapus data 
    public function destroy(Barang $barang)
    {
        $barang->delete();
        
        return redirect('/barang')->with('success', 'Data berhasil hapus ');
    }

    public function export_pdf(Request $request){
        // $data = ['title' => 'Welcome to Laravel PDF generation using DOMPDF'];
        $data = Barang::all();

        $pdf = PDF::loadView('barang.report', [ 'data' => $data]);
      
        return $pdf->download('document.pdf');
    }
}
