<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{


    public function index()
    {
        $peminjamans = Peminjaman::all();
        $anggotas = Anggota::all();
        $kategoris = Kategori::all();
        $active = 'peminjaman';
        $peminjamans = Peminjaman::join('kategori', 'peminjaman.kategori', '=', 'kategori.id')
            ->join('anggota', 'peminjaman.nama_peminjaman', '=', 'anggota.id')
            ->select('peminjaman.*', 'kategori.nama_kategori', 'anggota.nama_anggota')
            ->get();
        return view('peminjaman.show', compact('peminjamans','anggotas','kategoris', 'active'));

    }


    public function tambah()
    {
        $active = 'peminjaman';
        $peminjamans = Peminjaman::all(); // Ambil semua kategori
        $anggotas = Anggota::all();
        $kategoris = Kategori::all();
        $peminjamans = Peminjaman::join('kategori', 'peminjaman.kategori', '=', 'kategori.id')
            ->join('anggota', 'peminjaman.nama_peminjaman', '=', 'anggota.id')
            ->select('peminjaman.*', 'kategori.nama_kategori', 'anggota.nama_anggota')
            ->get();
        return view('peminjaman.tambah', compact('active', 'peminjamans', 'kategoris', 'anggotas')); // Sertakan variabel $kategoris
    }

    public function tambahAksi(Request $request)
    {
        $input = $request->all();

        $insert = Peminjaman::create($input);

        if ($insert) {
            return redirect('peminjaman');
        }
    }

    public function delete($id)
    {
        $peminjamans = Peminjaman::where('id', $id);
        $peminjamans->delete();

        return redirect('peminjaman');
    }
}
