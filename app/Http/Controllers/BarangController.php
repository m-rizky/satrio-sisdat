<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index' , ["barang" => Barang::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate( [
            "nama" => "string | max: 255",
            "jumlah" => "integer",
            "harga" => "integer",
        ]);
        Barang::create($validatedData);
        return redirect("/") ->with("success" , "data berhasil di buat");
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
     return view('edit-barang', ['barang' => $barang]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = [
            "nama" => " string | max: 255",
            "jumlah" => "integer",
            "harga" => "integer",
        ];
        $validatedData = $request->validate($rules);
        $barang->update($validatedData);
        return redirect("/") ->with("success" , "data berhasil di buat");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect('/' )-> with('success', 'data berhasil dihapus');
    }
}
