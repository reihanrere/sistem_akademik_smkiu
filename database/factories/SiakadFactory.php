<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Siakad::class, function (Faker $faker) {
    $user = \App\User::pluck('id')->toArray();
    $siswa = \App\Siswa::pluck('id')->toArray();
    $mapel = \App\Mapel::pluck('id')->toArray();
    $kelas = \App\Kelas::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user),
        'siswa_id' => $faker->randomElement($siswa),
        'mapel_id' => $faker->randomElement($mapel),
        'kelas_id' => $faker->randomElement($kelas),
        'nilai_keterampilan' => $faker->numberBetween($min = 0, $max = 100),
        'nilai_pengetahuan' =>  $faker->numberBetween($min = 0, $max = 100),
        'tahun_pelajaran' => $faker->year($max = 'now'),
        'jenjang' => $faker->randomElement(['PAS Ganjil','PTS Ganjil','PTS Genap','UKK']),
    ];
});
