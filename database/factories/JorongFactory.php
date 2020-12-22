<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

//use App\Jorong;
//use Faker\Generator as Faker;
class JorongFactory extends Factory{

protected $model =jorong::class;

public function definition()
{
    $jorong= \App\Jorong::factory()->create();
//$factory->define(Jorong::class, function (Faker $faker) {
    return [
        'nagari_id'=>1,
        'nama' => $this->faker->firstName
        
    ];
}
}
