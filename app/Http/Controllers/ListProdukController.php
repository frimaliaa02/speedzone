<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
{
    $produk = Produk::all();
    return view('list_produk', ['produk' => $produk]);
}
 public function simpan(Request $request)
    {
        $produk = new Produk();
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect('/listproduk')->with('success', 'Produk berhasil ditambahkan!');
    }
}
