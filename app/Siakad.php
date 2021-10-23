<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siakad extends Model
{
    protected $table = 'siakads';

    protected $fillable = [
        'id',
        'siswa_id',
        'mapel_id',
        'kelas_id',
        'nilai_keterampilan',
        'nilai_pengetahuan',
        'tahun_pelajaran',
        'jenjang'
    ];
    
    public function siswa()
    {
        return $this->belongsTo('App\Siswa','siswa_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
