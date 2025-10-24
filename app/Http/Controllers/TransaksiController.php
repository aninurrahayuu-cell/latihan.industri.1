<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatransaksi = Transaksi::all();
        return view('transaksi.index', compact('datatransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $databarang = Barang::all();
        $datapembeli = Pembeli::all();

        return view('transaksi.create', compact('databarang', 'datapembeli'));
        // return view('transaksi.create', compact('datapembeli'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
            [
                'tanggal_transaksi' => 'required|string|max:255',
                'jumlah' => 'required|string|max:255',
                'total_harga' => 'required|string|max:255',
                'id_barang' => 'required|string|max:255',
                'id_pembeli' => 'required|string|max:255',
            ],
            [
                'tanggal_transaksi.required' => 'required|string|max:255',
                'jumlah.required' => 'required|string|max:255',
                'total_harga.required' => 'required|string|max:255',
                'id_barang.required' => 'required|string|max:255',
                'id_pembeli.required' => 'required|string|max:255',
            ]);

            $transaksi              = new Transaksi;
            $transaksi->tanggal_transaksi       = $request->tanggal_transaksi;
            $transaksi->jumlah = $request->jumlah;
            $transaksi->total_harga       = $request->total_harga;
            $transaksi->id_barang = $request->id_barang;
            $transaksi->id_pembeli = $request->id_pembeli;
            
           $transaksi->save();

            session()->flash('succes', 'Data berhasil ditambahkan');

            return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatransaksi = Transaksi::findOrFail($id);
        $databarang = Barang::all();
        $datapembeli = Pembeli::all();
        return view('transaksi.edit', compact('datatransaksi', 'databarang', 'datapembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
                'tanggal_transaksi' => 'required|max:255',
                'jumlah' => 'required|max:255',
                'total_harga' => 'required|max:255',
                'id_barang' => 'required|max:255',
                'id_pembeli' => 'required|max:255',
        ],
[
               'tanggal_transaksi' => 'required|max:255',
                'jumlah' => 'required|max:255',
                'total_harga' => 'required|max:255',
                'id_barang' => 'required|max:255',
                'id_pembeli' => 'required|max:255',
        ]);
            $datatransaksi = Transaksi::findOrFail($id);
            $datatransaksi->tanggal_transaksi       = $request->tanggal_transaksi;
            $datatransaksi->jumlah = $request->jumlah;
            $datatransaksi->total_harga       = $request->total_harga;
            $datatransaksi->id_barang = $request->id_barang;
            $datatransaksi->id_pembeli       = $request->id_pembeli;

            $datatransaksi->save();

            session()->flash('success', 'Data berhasil dirubah');

            return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
         return redirect()->route('transaksi.index')->with('success', 'Data berhasil dihapus');
    }
}
