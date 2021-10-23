<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'id',
        'kelas'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }

    public function siakad()
    {
        return $this->hasMany(Siakad::class);
    }
}
