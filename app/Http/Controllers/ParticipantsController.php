<?php

namespace App\Http\Controllers;

use App\Models\ParticipantStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar = ParticipantStudent::get();
        return view('dashboard.admin.pendaftar.list', [
            'pendaftar' => $pendaftar,
        ]);
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
            'nilai_raport_s1' => 'required',
            'nilai_raport_s2' => 'required',
            'nilai_raport_s3' => 'required',
            'nilai_raport_s4' => 'required',
            'nilai_raport_s5' => 'required',
            'file_raport' => 'mimes:pdf|file',
        ]);
        $validatedData['user_id'] = Auth::id();
        $file = $request->nama . '-' . time() . '.' .$request->file_raport->extension();
        $validatedData['file_raport'] = Storage::putFileAs('public/file-raport', $request->file_raport, $file);

        $pendaftar = ParticipantStudent::create($validatedData);
        $user = $pendaftar->user;
        $user->update(['registered' => true]);
        return redirect()->back()->with('message', 'Sukses! Pendaftaran mu telah diterima oleh admin!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ParticipantStudent $pendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pendaftar = ParticipantStudent::findOrFail($id);
        return view('dashboard.admin.pendaftar.edit', [
            'pendaftar' => $pendaftar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_lengkap' => 'required',
            'nama_orangtua' => 'required',
            'asal_sekolah' => 'required',
            'nilai_raport_s1' => 'required',
            'nilai_raport_s2' => 'required',
            'nilai_raport_s3' => 'required',
            'nilai_raport_s4' => 'required',
            'nilai_raport_s5' => 'required',
            'file_raport' => 'mimes:pdf|file',
        ]);

        $pendaftar = ParticipantStudent::findOrFail($id);
        $pendaftar->update($validatedData);

        return redirect()
        ->route('pendaftar')
        ->with('message', 'Sukses! 1 Data Berhasil Diubah');
    }

    public function updateStatusDiterima(ParticipantStudent $id)
    {   
        // $pendaftar = Pendaftar::find($request->terima_id);
        $id->update(['status' => 'diterima']);
        return redirect()->back();
    }
    
    public function updateStatusDitolak(ParticipantStudent $id)
    {
        $id->update(['status' => 'ditolak']);
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy (Request $request, $id)
    {
        $item = ParticipantStudent::findOrFail($id);
        Storage::delete($item->file_raport);
        $item->delete();

        return redirect()
            ->route('pendaftar')
            ->with('message', 'Sukses! 1 Data Berhasil Dihapus');
    }
}
