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
                                <h6 class="text-white text-capitalize ps-3">Tambah Anggota</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <form action={{ url('anggota/tambah') }} method="post" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama anggota</label>
                                <input type="text" class="form-control" name="nama_anggota">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">id anggota</label>
                                <input type="text" class="form-control" name="id_anggota">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">prodi</label>
                                <input type="text" class="form-control" name="prodi">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <select type="text" class="form-control" name="kategori">
                                    <option value="">Pilih kategori</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Alumni">Alumni</option>
                                    <option value="Dosen">Dosen</option>
                                </select>
                            </div>
                            <button class="btn btn-success">Simpan</button>
                            <a href={{ url('anggota') }} class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
