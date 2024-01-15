<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar = Pendaftar::get();
        return view('dashboard.admin.pendaftar.list', ['pendaftar' => $pendaftar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_lengkap' => 'required',
            'nama_orangtua' => 'required',
            'asal_sekolah' => 'required',
            'nilai_raport' => 'required',
            'file_raport' => 'mimes:pdf|file',
        ]);
        $validatedData['user_id'] = Auth::id();
        $file = $request->nama . '-' . time() . '.' .$request->file_raport->extension();
        $validatedData['file_raport'] = Storage::putFileAs('public/file-raport', $request->file_raport, $file);

        Pendaftar::create( $validatedData
            // [
            //     'nama' => $request->nama,
            //     'nisn' => $request->nisn,
            //     'tanggal_lahir' => $request->tanggal_lahir,
            //     'alamat_lengkap' => $request->alamat_lengkap,
            //     'nama_orangtua' => $request->nama_orangtua,
            //     'asal_sekolah' => $request->asal_sekolah,
            //     'nilai_raport' => $request->nilai_raport,
            //     'file_raport' => $file,
            //     'user_id' => $userId,
            // ]
        );
        return redirect()->back()->with('message', 'Sukses! Pendaftaran mu telah diterima oleh admin!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftar $pendaftar)
    {
        //
    }

    public function updateStatusDiterima(Request $request, Pendaftar $pendaftar)
    {   
        // $pendaftar = Pendaftar::find($request->terima_id);
        $pendaftar->update(['status' => 'diterima']);
        return redirect()->back();
    }
    
    public function updateStatusDitolak(Request $request, Pendaftar $pendaftar)
    {
        $pendaftar->update(['status' => 'ditolak']);
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftar $pendaftar)
    {
        //
    }
}
