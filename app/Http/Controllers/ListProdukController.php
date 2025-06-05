<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;


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

public function delete($id)
{
    $produk = Produk::find($id);

    if ($produk) {
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    } else {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }
}

public function edit($id)
{
    $produk = Produk::findOrFail($id);
    return view('edit_produk', compact('produk'));
}


public function update(Request $request, $id) {
    $produk = Produk::findOrFail($id);
    $produk->update($request->only('nama', 'deskripsi', 'harga'));
    return redirect()->route('listproduk')->with('success', 'Produk berhasil diupdate.');


}


}
