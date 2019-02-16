<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'middle_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'position' => $faker->jobTitle,
        'hire_date' => $faker->dateTime,
        'salary' => $faker->numberBetween($min = 3000, $max = 15000),
        'manager_id' => $faker->numberBetween($min = 1, $max = 5)

    ];
});
