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

// $factory->define(App\User::class, function ($faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//         'password' => str_random(10),
//         'remember_token' => str_random(10),
//     ];
// });

//Factory exemplo em pt-br
$factory->define(App\User::class, function ($faker) {
	// /$faker->addProvider( new Faker\Provider\pt_BR\Person($faker));
	$faker->addProvider( new \App\Faker\Pessoa($faker));
    return [
        'name' => trim($faker->name),
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});