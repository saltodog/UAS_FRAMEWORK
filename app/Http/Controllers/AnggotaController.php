<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::all();
        $active = 'anggota';
        return view('anggota.show', compact('anggotas', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        $active = 'buku';
        $anggotas = Anggota::all(); // Ambil semua kategori
        return view('anggota.tambah', compact('active', 'anggotas')); // Sertakan variabel $kategoris
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tambahAksi(Request $request)
    {
        $input = $request->all();

        $insert = Anggota::create($input);

        if ($insert) {
            return redirect('anggota');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $anggota = Anggota::where('id', $id);
        $anggota->delete();

        return redirect('anggota');
    }
}
