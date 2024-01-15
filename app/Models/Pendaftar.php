<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table = "pendaftars";
    protected $guarded = [];
    protected $fillable = [
        'nama',
        'nisn',
        'tanggal_lahir',
        'alamat_lengkap',
        'nama_orangtua',
        'asal_sekolah',
        'nilai_raport',
        'file_raport',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
