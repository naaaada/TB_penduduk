<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


/** @var \Illuminate\Database\Eloquent\Factory $factory */
class PendudukFactory extends Factory{
    //use App\KartuKeluarga;
    //use Faker\Generator as Faker;
    protected $model =penduduk::class;
public function definition()
{
//$factory->define(Penduduk::class, function (Faker $faker) {
    return [
        'id'=>1,
        'nama' => $this->faker->firstName

    
    ];
}
}
