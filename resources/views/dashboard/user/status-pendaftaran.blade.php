@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item active">Status</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        @foreach ($userRelatedData as $user)
                            @if ($user->status == 'diterima')
                            <img src="{{ asset('NiceAdmin') }}/assets/img/lolos.jpg" alt="Profile" class="rounded-circle" width="200px" height="150px">
                            @endif
                            <h2>Status Pendaftaran</h2>
                            @if ($user->status == 'diproses')
                                <td><span class="badge bg-warning">Diproses</span></td>
                            @elseif ($user->status == 'ditolak')
                                <td><span class="badge bg-danger">Ditolak</span></td>
                            @else
                                <td><span class="badge bg-success">Diterima</span></td>
                            @endif
                        @endforeach
                    </div>
                </div>
                @foreach ($userRelatedData as $user)
                    @if ($user->status == 'diterima' )
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('NiceAdmin') }}/assets/img/daftar-ulang.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Jadwal Pendaftaran  Ulang</h5>
                                    <p class="card-text">Pendaftaran ulang <b>OFFLINE</b> pada tanggal: <br> 20 Januari 2024 - 1 Februari2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                {{-- <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Jadwal Daftar Ulang</div>
                            <div class="col-lg-9 col-md-8">19 Januari 2024</div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Data Pendaftaran</h5>
                                @foreach ($userRelatedData as $data)
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->nama }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No NISN</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->nisn }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->tanggal_lahir }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat Lengkap</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->alamat_lengkap }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nama Orang Tua</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->nama_orangtua }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Asal Sekolah</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->asal_sekolah }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nilai Raport</div>
                                        <div class="col-lg-9 col-md-8">{{ $data->nilai_raport }}</div>
                                    </div>
                                @endforeach
                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
