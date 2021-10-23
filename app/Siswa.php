<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [ 
        'nis',
        'user_id',
        'nama_siswa',
        'kelas_id',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'email',
        'no_telp',
        'tahunawal_sekolah'
    ];

    protected $primaryKey = 'nis';

    public function siakad()
    {
        return $this->hasMany('App\Siakad','siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
