<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Resources\BarangResource;

class ApiBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::latest()->paginate(5);
        return new BarangResource(true, 'List Data Barang', $barangs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barangs = Barang::create([
            'namaBarang' => $request->namaBarang,
            'deskripsiBarang' => $request->deskripsiBarang,
            'harga' => $request->harga,
        ]);

        return new BarangResource(true, 'Data Barang Berhasil Ditambahkan!', $barangs);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return new BarangResource(true, 'Data Barang Berhasil Ditemukan', $barang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $barang->update([
            'namaBarang' => $request->namaBarang,
            'deskripsiBarang' => $request->deskripsiBarang,
            'harga' => $request->harga,
        ]);

        return new BarangResource(true, 'Data Barang Berhasil Diupdate!', $barang);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return new BarangResource(true, 'Data Barang Berhasil Dihapus!', $barang);
    }
}
