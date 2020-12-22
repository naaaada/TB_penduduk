<?php
namespace Database\Factories;

use App\Models\Nagari;
use Illuminate\Database\Eloquent\Factories\factory;

class NagariFactory extends Factory
{
    protected $model = Nagari::class;
    public function definition()
        {
//$factory->define(Nagari::class, function (Faker $faker) {
    return [
        'nama' => $this->faker->city
    ];
}

}

