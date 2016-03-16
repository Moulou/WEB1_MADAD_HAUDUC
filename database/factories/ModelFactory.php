<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'fonction' => $faker->text(10),
        'adresse' => $faker->text(10),
        'tel' => $faker->phoneNumber,
        'email' => $faker->email,
        'admin' => mt_rand(0, 1),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 10),
        'titre' => $faker->text(10),
        'contenu' => $faker->text,
    ];
});
