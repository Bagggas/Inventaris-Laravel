@extends('layouts.navbar-header')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-start">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-dark bg-white border-end" style="width: 250px;height: 100vh;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a class="unstyled" href="{{ route('admin.dashboard') }}">
                            <button class="btn btn-toggle align-items-center ">Beranda</button>
                        </a>
                    </li>
                    <li>
                        <a class="unstyled" href="{{ route('admin.dataUser') }}">
                            <button class="btn btn-toggle align-items-center text-dark navbar-active">Data User</button>
                        </a>
                    </li>
                    <li>
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rli" aria-expanded="false">Rekap Laporan Inventaris
                        </button>
                        <div class="collapse" id="rli">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('admin.rekapLaporanProdi') }}" class="nav-link unstyled" aria-current="page">Program Studi</a></li>
                                <li><a href="{{ route('admin.rekapLaporanFakultas') }}" class="nav-link unstyled" aria-current="page">Fakultas</a></li>
                                <li><a href="{{ route('admin.rekapLaporanBiro') }}" class="nav-link unstyled" aria-current="page">Biro</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rpi" aria-expanded="false">Rekap Pengajuan Inventaris
                        </button>
                        <div class="collapse" id="rpi">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('admin.rekapPengajuanProdi') }}" class="nav-link unstyled" aria-current="page">Program Studi</a></li>
                                <li><a href="{{ route('admin.rekapPengajuanFakultas') }}" class="nav-link unstyled" aria-current="page">Fakultas</a></li>
                                <li><a href="{{ route('admin.rekapPengajuanBiro') }}" class="nav-link unstyled" aria-current="page">Biro</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rpei" aria-expanded="false">Rekap Penghapusan Inventaris
                        </button>
                        <div class="collapse" id="rpei">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('admin.rekapPenghapusanProdi') }}" class="nav-link unstyled" aria-current="page">Program Studi</a></li>
                                <li><a href="{{ route('admin.rekapPenghapusanFakultas') }}" class="nav-link unstyled" aria-current="page">Fakultas</a></li>
                                <li><a href="{{ route('admin.rekapPenghapusanBiro') }}" class="nav-link unstyled" aria-current="page">Biro</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="container-fluid m-5">
                <h4>Tambah Akun User</h4>
                <hr>
                <form action="">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">User ID</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Unit Kerja</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input class="form-control" type="password" aria-label="default input example">
                    </div>

                    <div class="d-flex">
                        <button class="btn btn-success me-2">Simpan</button>
                        <a href="{{ route('admin.dataUser') }}"><button class="btn btn-secondary">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection