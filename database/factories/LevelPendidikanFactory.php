<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


/** @var \Illuminate\Database\Eloquent\Factory $factory */
class LevelPendidikanFactory extends Factory{
 
    protected $model =level_pendidikan::class;
public function definition()
{
//$factory->define(LevelPendidikan::class, function (Faker $faker) {
    return [
        'id'=>1,
        'nama' => $this->faker->firstName
    
    ];
}
}
