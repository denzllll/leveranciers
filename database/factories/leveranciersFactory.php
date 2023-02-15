<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\leveranciers;
use Faker\Generator as Faker;

$factory->define(leveranciers::class, function (Faker $faker) {

    return [
        'bedrijfsnaam' => $faker->word,
        'adres' => $faker->word,
        'district' => $faker->word,
        'directeur' => $faker->word,
        'telefoonnummer' => $faker->word,
        'website' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_by' => $faker->word
    ];
});
