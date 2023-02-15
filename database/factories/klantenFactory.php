<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\klanten;
use Faker\Generator as Faker;

$factory->define(klanten::class, function (Faker $faker) {

    return [
        'voornaam' => $faker->word,
        'achternaam' => $faker->word,
        'geslacht' => $faker->word,
        'adres' => $faker->word,
        'district' => $faker->word,
        'telefoonnummer' => $faker->word,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
