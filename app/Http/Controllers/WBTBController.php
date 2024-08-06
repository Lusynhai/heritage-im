<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\KategoriWbtb;
use App\Models\PengajuanObjekBudaya;
use App\Models\Wbtb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WBTBController extends Controller
{
    public function index()
    {
        $wbtb = Wbtb::all();
        return view('admin.wbtb.index', compact('wbtb'));
    }

    public function create()
    {
        $kategori = KategoriWbtb::all();
        $data['kategori'] = $kategori;
        return view('admin.wbtb.create', $data);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'deskripsi' => 'required',
        //     'lokasi' => 'required',
        //     'galeri' => 'nullable|file',
        //     'kategori_id' => 'required|integer',
        // ]);
        // dd($request->all());
        $data = $request->all();
        $tambahdata = Wbtb::create($data);
        // $wbtbnas = new Wbtbnas();
        // $wbtbnas->nama = $request->nama;
        // $wbtbnas->deskripsi = $request->deskripsi;
        // $wbtbnas->lokasi = $request->lokasi;
        // $wbtbnas->kategori_id = $request->kategori_id;
        // $wbtbnas->save();

        // if ($request->hasFile('sk_gambar')) {
        //     foreach ($request->file('sk_gambar') as $image) {
        //         $imageName = time() . '_' . $image->getClientOriginalName();
        //         $image->storeAs('public/skgambar', $imageName);

        //         $wbtbnas->galleries()->create(['file_path' => $imageName]);
        //     }
        // }
        if ($data) {
            return redirect()->route('wbtb.index')->with('success', 'Data berhasil disimpan.');
        }else{
            return redirect()->route('wbtb.index')->with('Error', 'Data gagal disimpan.');
        }
    }

    public function show(Wbtb $wbtb)
    {
        return view('admin.wbtb.show', compact('wbtb'));
    }

    public function edit($id)
    {
        $wbtb = Wbtb::findOrFail($id);
        $kategori = KategoriWbtb::all();
        $data = [
            'kategori'=> $kategori,
            'wbtb' => $wbtb,
            ] ;
        return view('admin.wbtb.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'galeri.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $wbtb = Wbtb::findOrFail($id);
        $wbtb->nama = $request->nama;
        $wbtb->deskripsi = $request->deskripsi;
        $wbtb->lokasi = $request->lokasi;
        $wbtb->save();

        if ($request->hasFile('galeri')) {
            foreach ($request->file('galeri') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/galeri', $imageName);

                $wbtb->galleries()->create(['file_path' => $imageName]);
            }
        }

        return redirect()->route('wbtb.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Wbtb $wbtb)
    {
        foreach ($wbtb->galleries as $galeri) {
            Storage::delete('public/galeri/' . basename($galeri->file_path));
        }

        $wbtb->delete();

        return redirect()->route('wbtb.index')->with('success', 'Adat deleted successfully.');
    }

    public function showDetails($id)
    {
        $wbtb = Wbtb::findOrFail($id);
        return view('masyarakat.wbtb.detail', compact('wbtb'));
    }
}
