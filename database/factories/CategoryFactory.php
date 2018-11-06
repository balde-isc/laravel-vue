<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP','JAVA','JS','NodeJS','MYSQL','Redis','IOT','MongoDB']),
        'description' => $faker->sentence
    ];
});
