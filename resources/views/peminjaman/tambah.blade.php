@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Tambah peminjaman</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <form action={{ url('peminjaman/tambah') }} method="post" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-outline my-3">
                                <select name="anggota" id="anggota" class="form-control">
                                    <option value="">Pilih anggota</option>
                                    @foreach ($anggotas as $anggota)
                                        <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group input-group-outline">
                                {{-- <label class="form-label">tanggal peminjaman</label> --}}
                                <input type="date" class="form-control" name="tanggal_peminjaman">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                {{-- <label class="form-label">tanggal_kembali</label> --}}
                                <input type="date" class="form-control" name="tanggal_kembali">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih kategori</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success">Simpan</button>
                            <a href={{ url('peminjaman') }} class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
