@extends('layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Edit Data Pendaftaran</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Pendaftar</li>
            <li class="breadcrumb-item active">Edit Siswa</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Pendaftaran Kamu</h5>
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Nama
                                Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nisn" value="{{ $siswa->nisn }}"  required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}"
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_lengkap" class="col-sm-4 col-form-label">Alamat
                                Lengkap</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" style="height: 100px" name="alamat_lengkap" required>{{ $siswa->alamat_lengkap }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_orangtua" class="col-sm-4 col-form-label">Nama
                                Orangtua</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_orangtua" value="{{ $siswa->nama_orangtua }}"
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal
                                Sekolah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" 
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s1" value="{{ $siswa->nilai_raport_s1 }}"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s2" value="{{ $siswa->nilai_raport_s2 }}"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s3" value="{{ $siswa->nilai_raport_s3 }}"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 4</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s4" value="{{ $siswa->nilai_raport_s4 }}"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport Semester 5</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nilai_raport_s5" value="{{ $siswa->nilai_raport_s5 }}"
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="file_raport" class="col-sm-4 col-form-label">File
                                Raport</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" id="formFile" value="{{ $siswa->file_raport }}"
                                    name="file_raport" required>
                                <div class="form-text">Upload PDF / Lampiran Raport Kamu</div>
                            </div>
                        </div>
                        
                        <div class="row mb-3 p-2">
                            <button class="btn btn-primary" type="submit">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection