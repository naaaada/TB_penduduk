<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class KartuKeluargaFactory extends Factory{
//use App\KartuKeluarga;
//use Faker\Generator as Faker;
protected $model =kartu_keluarga::class;

public function definition()
{
//$factory->define(KartuKeluarga::class, function (Faker $faker) {
    return [
        'no'=>1,
        'tanggal_pencatatan' => date
    
    ];
}
}
