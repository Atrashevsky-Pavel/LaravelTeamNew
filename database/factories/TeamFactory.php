<?php

use Faker\Generator as Faker;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' => $this->faker->firstName(),
        'surname' => $this->faker->lastName(),
        'age' => rand(12, 74),
        'profession' => $this->faker->jobTitle(),
        'created_at' => $this->faker->dateTime(),
        'updated_at' => $this->faker->dateTime()
    ];
});
