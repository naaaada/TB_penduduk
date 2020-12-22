<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class PekerjaanFactory extends Factory{
    //use App\KartuKeluarga;
    //use Faker\Generator as Faker;
    protected $model =pekerjaan::class;
public function definition()
{
//$factory->define(Pekerjaan::class, function (Faker $faker) {
    return [
        'id'=>1,
        'nama' => $this->faker->firstName
    
    ];
}
}
