@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Data Raport Siswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pendaftar') }}">Pendaftar</a></li>
                <li class="breadcrumb-item active">Data Raport</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Raport - {{ $pendaftar->nama }}</h5>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s1"
                                    value="{{ $pendaftar->nilai_raport_s1 }}" disabled required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s2"
                                    value="{{ $pendaftar->nilai_raport_s2 }}" disabled required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s3"
                                    value="{{ $pendaftar->nilai_raport_s3 }}" disabled required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 4</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s4"
                                    value="{{ $pendaftar->nilai_raport_s4 }}" disabled required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 5</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s5"
                                    value="{{ $pendaftar->nilai_raport_s5 }}" disabled required>
                            </div>
                        </div>
                        @php
                            $average = $pendaftar->nilai_raport_s1 + $pendaftar->nilai_raport_s2 + $pendaftar->nilai_raport_s3 + $pendaftar->nilai_raport_s4 + $pendaftar->nilai_raport_s5;
                        @endphp
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Rata-rata Nilai Raport</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s5"
                                    value="{{ $average / 5 }}" disabled required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <iframe src="{{ Storage::url($pendaftar->file_raport) }}" frameborder="0" height="550px" width="100%">
                </iframe>
            </div>
        </div>
    </section>
@endsection
