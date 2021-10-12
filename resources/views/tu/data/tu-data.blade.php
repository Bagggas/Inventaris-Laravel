@extends('layouts.navbar-header')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-start">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-dark bg-white border-end" style="width: 250px;height: 100vh;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a class="unstyled" href="{{ route('tu.dashboard') }}">
                            <button class="btn btn-toggle align-items-center">Beranda</button>
                        </a>
                    </li>
                    <li>
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rli" aria-expanded="false">Data Inventaris
                        </button>
                        <div class="collapse show" id="rli">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('tu.data') }}" class="nav-link unstyled text-dark navbar-active" aria-current="page">Data</a></li>
                                <li><a href="{{ route('tu.tambahData') }}" class="nav-link unstyled" aria-current="page">Tambah Data</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rpi" aria-expanded="false">Rekap Pengajuan Inventaris
                        </button>
                        <div class="collapse" id="rpi">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('tu.dataPengajuan') }}" class="nav-link unstyled" aria-current="page">Data</a></li>
                                <li><a href="{{ route('tu.tambahDataPengajuan') }}" class="nav-link unstyled" aria-current="page">Tambah Data</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle rounded collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rphi" aria-expanded="false">Rekap Penghapusan Inventaris
                        </button>
                        <div class="collapse" id="rphi">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('tu.dataPenghapusan') }}" class="nav-link unstyled" aria-current="page">Data</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="container-fluid m-5">
                <div class="card">
                    <h3 class="text-center m-3">Data Inventaris {{ Auth::user()->unit_kerja }}</h3>
                    <hr>
                    <div class="card-body">
                        <table id="table1" class="table table-striped display " style="width:100%">
                            <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Inventaris</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Tahun Perolehan</th>
                                <th>Kondisi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $d )
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->nama_inventaris }}</td>
                                    <td>{{ $d->jumlah_inventaris }}</td>
                                    <td>{{ $d->satuan }}</td>
                                    <td>{{ $d->tahun }}</td>
                                    <td>{{ $d->keterangan_inventaris }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
