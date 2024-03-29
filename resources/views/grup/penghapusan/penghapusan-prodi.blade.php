@extends('layouts.navbar-header')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-start">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-dark bg-white border-end" style="width: 250px;height: 100vh;">
                <ul class="nav nav-pills flex-column mb-auto">
                    @if(Auth::user()->hasRole('pplp'))
                        <li class="nav-item">
                            <a class="unstyled" href="{{ route('pplp.dashboard') }}">
                                <button class="btn btn-toggle align-items-center">Beranda</button>
                            </a>
                        </li>
                        <li>
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#rli" aria-expanded="false">Laporan Inventaris
                            </button>
                            <div class="collapse " id="rli">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="{{ route('pplp.laporanProdi') }}" class="nav-link unstyled  " aria-current="page">Program Studi</a></li>
                                    <li><a href="{{ route('pplp.laporanFakultas') }}" class="nav-link unstyled" aria-current="page">Fakultas</a></li>
                                    <li><a href="{{ route('pplp.laporanBiro') }}" class="nav-link unstyled" aria-current="page">Biro & Unit</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#rpei" aria-expanded="false">Penghapusan Inventaris
                            </button>
                            <div class="collapse show" id="rpei">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="{{ route('pplp.penghapusanProdi') }}" class="nav-link unstyled  text-dark navbar-active " aria-current="page">Program Studi</a></li>
                                    <li><a href="{{ route('pplp.penghapusanFakultas') }}" class="nav-link unstyled " aria-current="page">Fakultas</a></li>
                                    <li><a href="{{ route('pplp.penghapusanBiro') }}" class="nav-link unstyled" aria-current="page">Biro & Unit</a></li>
                                </ul>
                            </div>
                        </li>
                    @elseif(Auth::user()->hasRole('inventaris'))
                        <li class="nav-item">
                            <a class="unstyled" href="{{ route('inventaris.dashboard') }}">
                                <button class="btn btn-toggle align-items-center">Beranda</button>
                            </a>
                        </li>
                        <li>
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#rli" aria-expanded="false">Laporan Inventaris
                            </button>
                            <div class="collapse " id="rli">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="{{ route('inventaris.laporanProdi') }}" class="nav-link unstyled  " aria-current="page">Program Studi</a></li>
                                    <li><a href="{{ route('inventaris.laporanFakultas') }}" class="nav-link unstyled" aria-current="page">Fakultas</a></li>
                                    <li><a href="{{ route('inventaris.laporanBiro') }}" class="nav-link unstyled" aria-current="page">Biro & Unit</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#rpei" aria-expanded="false">Penghapusan Inventaris
                            </button>
                            <div class="collapse show" id="rpei">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="{{ route('inventaris.penghapusanProdi') }}" class="nav-link unstyled text-dark navbar-active " aria-current="page">Program Studi</a></li>
                                    <li><a href="{{ route('inventaris.penghapusanFakultas') }}" class="nav-link unstyled " aria-current="page">Fakultas</a></li>
                                    <li><a href="{{ route('inventaris.penghapusanBiro') }}" class="nav-link unstyled" aria-current="page">Biro & Unit</a></li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="container-fluid m-5">
                <div class="card">
                    <h3 class="text-center m-3">Penghapusan Inventaris Program Studi</h3>
                    <hr>
                    <div class="card-body">
                        <table id="table1" class="table table-striped display" style="width:100%">
                            <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Unit Kerja</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $d )
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->unit_kerja }}</td>
                                    @if(Auth::user()->hasRole('pplp'))
                                        <td><a href="/pplp/penghapusan/prodi/{{ $d->unit_kerja }}/detail"><button class="btn btn-sm btn-success">Detail</button></a></td>
                                    @elseif(Auth::user()->hasRole('inventaris'))
                                        <td><a href="/inventaris/penghapusan/prodi/{{ $d->unit_kerja }}/detail"><button class="btn btn-sm btn-success">Detail</button></a></td>
                                    @endif
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
