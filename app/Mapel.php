<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapels';

    protected $fillable = [
        'id',
        'nama_mapel',
        'semester',
        'guru_id',
        'kelas_id',
        'kkm',
        'deskripsi'
    ];

    protected $primaryKey = 'id';

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function siakad()
    {
        return $this->hasMany(Siakad::class);
    }
}