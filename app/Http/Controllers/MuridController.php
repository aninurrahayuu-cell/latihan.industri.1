<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datamurid = Murid::all();

        return view('murid.index', compact('datamurid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $datakelas = Kelas::all();

        return view('murid.create', compact('datakelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|max:255',
                'jenis_kelamin' => 'required|max:255',
                'tanggal_lahir' => 'required|max:255',
                'tempat_lahir' => 'required|max:255',
                'agama' => 'required|max:255',
                'alamat' => 'required|max:255',
                'email' => 'required|max:255',
                'id_kelas' => 'required|max:255',
            ],
            [
                'nama_lengkap.required' => 'nama lengkap tidak boleh kosong',
                'jenis_kelamin.required' => 'jenis kelamin tidak boleh kosong',
                'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
                'tempat_lahir.required' => 'tempat lahir tidak boleh kosong',
                'agama.required' => 'agama tidak boleh kosong',
                'alamat.required' => 'alamat tidak boleh kosong',
                'email.required' => 'email tidak boleh kosong',
                'id_kelas.required' => 'id kelas tidak boleh kosong',
            ]);

            $murid              = new Murid;
            $murid->nama_lengkap       = $request->nama_lengkap;
            $murid->jenis_kelamin = $request->jenis_kelamin;
            $murid->tanggal_lahir       = $request->tanggal_lahir;
            $murid->tempat_lahir = $request->tempat_lahir;
            $murid->agama       = $request->agama;
            $murid->alamat = $request->alamat;
            $murid->email       = $request->email;
            $murid->id_kelas = $request->id_kelas;

            $murid->save();

            session()->flash('succes', 'Data berhasil ditambahkan');

            return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datamurid = Murid::findOrFail($id);
        $datakelas = Kelas::all();
        return view('murid.edit', compact('datamurid', 'datakelas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
                'nama_lengkap' => 'required|max:255',
                'jenis_kelamin' => 'required|max:255',
                'tanggal_lahir' => 'required|max:255',
                'tempat_lahir' => 'required|max:255',
                'agama' => 'required|max:255',
                'alamat' => 'required|max:255',
                'email' => 'required|max:255',
                'id_kelas' => 'required|max:255',
        ],
[
                'nama_lengkap.required' => 'nama lengkap tidak boleh kosong',
                'jenis_kelamin.required' => 'jenis kelamin tidak boleh kosong',
                'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
                'tempat_lahir.required' => 'tempat lahir tidak boleh kosong',
                'agama.required' => 'agama tidak boleh kosong',
                'alamat.required' => 'alamat tidak boleh kosong',
                'email.required' => 'email tidak boleh kosong',
                'id_kelas.required' => 'id kelas tidak boleh kosong',
        ]);

            $datamurid = Murid::findOrFail($id);
            $datamurid->nama_lengkap       = $request->nama_lengkap;
            $datamurid->jenis_kelamin = $request->jenis_kelamin;
            $datamurid->tanggal_lahir       = $request->tanggal_lahir;
            $datamurid->tempat_lahir = $request->tempat_lahir;
            $datamurid->agama       = $request->agama;
            $datamurid->alamat = $request->alamat;
            $datamurid->email       = $request->email;
            $datamurid->id_kelas = $request->id_kelas;

            $datamurid->save();

            session()->flash('success', 'Data berhasil dirubah');

            return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
         return redirect()->route('murid.index')->with('success', 'Data berhasil dihapus');
 
    }
}
