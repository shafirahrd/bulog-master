<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Galeri;
use DB;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();

        return view('admin.galeri-index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri-create');
    }

    public function store(Request $request)
    {
        $galeri = new Galeri();
        $galeri->nama = $request->get('nama');
        if ($request->hasFile('gambar')) {
            $galeri->gambar = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/images1', $galeri->gambar);
        } else {
            $galeri->gambar = 'Gambar tidak ditemukan';
        }
        $galeri->save();

        return redirect('admin-galeri')->with('success', 'Galeri Foto RPK berhasil ditambahkan');
    }

    public function edit($id)
    {
        $galeri = DB::table('galeri')->where('id_galeri', $id)->first();

        return view('admin.galeri-update', compact('galeri', 'id'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        Storage::delete('public/images1/'.$galeri->gambar);
        $galeri->nama = $request->get('nama');
        if ($request->hasFile('gambar')) {
            $galeri->gambar = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/images1', $galeri->gambar);
        } else {
            $galeri->gambar = 'Gambar tidak ditemukan';
        }
        $galeri->save();

        return redirect('admin-galeri')->with('success', 'Galeri Foto RPK berhasil diperbarui');
    }

    public function delete(Request $request, $id)
    {
        $galeri = DB::table('galeri')->where('id_galeri', $id)->first();
        Storage::delete('public/images1/'.$galeri->gambar);
        DB::table('galeri')->where('id_galeri', $id)->delete();

        return redirect('admin-galeri')->with('success', 'Galeri Foto RPK telah dihapus');
    }
}
