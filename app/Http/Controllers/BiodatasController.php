<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodatas = Biodata::all();

        return view('biodatas.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodatas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    //      $request->validate([
    //     'nama_lengkap' => 'required|string|max:255',
    //     'jenis_kelmain' => 'required|string|max:255',
    //     'tempat_lahir' => 'required|string|max:255',
    //     'tanggal_lahir' => 'required|string|max:255',
    //     'agama' => 'required|string|max:255',
    //     'alamat' => 'required|string|max:255',
    //     'telepon' => 'required|string|max:255',
    //     'email' => 'required|email|max:255',
    //     ]);

    // //Kalau lolos validasi, data lanjut disimpan
    //      $user = auth()->user();
    //     ([
    //     'nama_lengkap' => $request->nama_lengkap,
    //     'jenis_kelamin' => $request->jenis_kelamin,
    //     'tempat_lahir' => $request->tempat_lahir,
    //     'tanggal_lahir' => $request->tanggal_lahir,
    //     'agama' => $request->agama,
    //     'alamat' => $request->alamat,
    //     'telepon' => $request->telepon,
    //     'email' => $request->email,
    //     ]);

        $biodatas = new Biodata;
        $biodatas->nama_lengkap = $request->nama_lengkap;
        $biodatas->jenis_kelamin = $request->jenis_kelamin;
        $biodatas->tanggal_lahir = $request->tanggal_lahir;
        $biodatas->tempat_lahir = $request->tempat_lahir;
        $biodatas->agama = $request->agama;
        $biodatas->alamat = $request->alamat;
        $biodatas->telepon = $request->telepon;
        $biodatas->email = $request->email;

         if ($request->hasFile('cover')) {
        $img = $request->file('cover');
        $name = rand(1000, 9999) . $img->getClientOriginalName();
        $img->move('images/biodata', $name);
        $biodatas->cover = $name;
        }
    
        $biodatas->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodatas.show', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodatas.edit', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        $biodatas->nama_lengkap = $request->nama_lengkap;
        $biodatas->jenis_kelamin = $request->jenis_kelamin;
        $biodatas->tanggal_lahir = $request->tanggal_lahir;
        $biodatas->tempat_lahir = $request->tempat_lahir;
        $biodatas->agama = $request->agama;
        $biodatas->alamat = $request->alamat;
        $biodatas->telepon = $request->telepon;
        $biodatas->email = $request->email;

        if ($request->hasFile('cover')) {
        $img = $request->file('cover');
        $name = rand(1000, 9999) . $img->getClientOriginalName();
        $img->move('images/biodata', $name);
        $biodatas->cover = $name;
        }


        $biodatas->save();

        session()->flash('success', 'Data berhasil dirubah');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        if ($biodatas->cover) {
            $filePath = public_path('images/biodata/' .$biodatas->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }
        $biodatas->delete();
         return redirect()->route('biodata.index')->with('success', 'Data berhasil dihapus');
    }
}
