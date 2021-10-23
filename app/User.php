<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role','name', 'email', 'password','nis','nip',
    ];

    // public function siswa($id)
    // {
    //     $siswa = Siswa::where('nis', $id)->first();
    //     return $siswa;
    // }
    
    public function siswa()
    {
        return $this->hasMany('App\Siswa','user_id');
    }

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
