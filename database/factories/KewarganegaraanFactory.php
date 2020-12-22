<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


/** @var \Illuminate\Database\Eloquent\Factory $factory */
class KewarganegaraanFactory extends Factory{
    //use App\KartuKeluarga;
    //use Faker\Generator as Faker;
    protected $model =kewarganegaraan::class;
public function definition()
{
//$factory->define(KartuKeluarga::class, function (Faker $faker) {
    return [
        'id'=>1,
        'nama' => $this->faker->firstName
    
    ];
}
}
