<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';

    protected $fillable = [
        'id',
        'user_id',
        'nip',
        'nama_guru',
        'no_telp',
        'email'
    ];
    
    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
