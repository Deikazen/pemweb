<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::paginate(10);
        return view('beritas.index', [
            'beritas' => $beritas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beritas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'isi_berita' => 'required|string|max:255',
            'foto' => 'nullable|string|max:255',
        ]);

        Berita::create([
            'judul_berita' =>  $request->judul_berita,
            'deskripsi_singkat' =>  $request->deskripsi_singkat,
            'isi_berita' =>  $request->isi_berita,
            'foto' =>  $request->foto
        ]);

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('beritas.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('beritas.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul_berita' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'isi_berita' => 'required|string|max:255',
            'foto' => 'nullable|string|max:255',
        ]);

        $berita->update([
            'judul_berita' =>  $request->judul_berita,
            'deskripsi_singkat' =>  $request->deskripsi_singkat,
            'isi_berita' =>  $request->isi_berita,
            'foto' =>  $request->foto
        ]);

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('beritas.index')->with('success', 'Berita berhasil dihapus');
    }
}
