@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    {{-- <!-- Modal Diterima-->
    <div class="modal fade" id="terimaModal" tabindex="-1" aria-labelledby="terimaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/pendaftar/update-status/{id}') }}" method="POST" class="d-inline">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Terima Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="terima_id" id="id">
                        <p>Apakah anda yakin ingin menerima siswa Ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak, Batalkan</button>
                        <button class="btn btn-danger" type="submit">
                            <i class="far fa-trash-alt"></i> &nbsp; Ya, Lanjut
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Ditolak-->
    <div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="tolakModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/pendaftar/update-status/{id}') }}" method="POST" class="d-inline">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tolak Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="tolak_id" id="id">
                        <p>Apakah anda yakin ingin menolak siswa Ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak, Batalkan</button>
                        <button class="btn btn-danger" type="submit">
                            <i class="far fa-trash-alt"></i> &nbsp; Ya, Lanjut
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pendaftar SMAN XYZ</h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>
                                        <b>Nama</b>
                                    </th>
                                    <th>Asal Sekolah</th>
                                    <th>Alamat</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Lahir</th>
                                    <th>Nilai Raport</th>
                                    <th>Status</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->asal_sekolah }}</td>
                                        <td>{{ $item->alamat_lengkap }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->nilai_raport }}</td>
                                        @if ($item->status == 'diproses')
                                            <td><span class="badge bg-warning">Diproses</span></td>
                                        @elseif ($item->status == 'ditolak')
                                            <td><span class="badge bg-danger">Ditolak</span></td>
                                        @else
                                            <td><span class="badge bg-success">Diterima</span></td>
                                        @endif
                                        <td>
                                            <div class="container row">
                                                <div class="col-5">
                                                    <form method="POST"
                                                    action="{{ url('/dashboard/admin/pendaftar/' . $item->id . '/update-status-diterima') }}">
                                                    @csrf
                                                    <button class="btn btn-primary btn-sm" type="submit">Terima</button>
                                                    </form>
                                                </div>
                                                <div class="col-5">
                                                    <form method="POST"
                                                    action="{{ url('/dashboard/admin/pendaftar/' . $item->id . '/update-status-ditolak') }}">
                                                    @csrf
                                                    <button class="btn btn-secondary btn-sm" type="submit">Tolak</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- @push('modal-script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.terima', function(e) {
                e.preventDefault();

                var id = $(this).val();
                $('#id').val(id);
                $('#terimaModal').modal('show');
            });
        });

        $(document).ready(function() {
            $(document).on('click', '.tolak', function(e) {
                e.preventDefault();

                var id = $(this).val();
                $('#id').val(id);
                $('#tolakModal').modal('show');
            });
        });
    </script>
@endpush --}}
