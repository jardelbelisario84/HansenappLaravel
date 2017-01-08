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
        'password' => bcrypt('jhsb84'),
        'telefone' => '(55) 55555-5555',
        'permissao' => 3,
        'remember_token' => str_random(10),
        'id_ubs'    => null
        
    ];
});

$factory->define(App\Models\Painel\Paciente::class, function ($faker) {
    $faker->addProvider( new \App\Faker\Pessoa($faker));
    return [
        'nome' => trim($faker->name),
        'numero_sinan' => $faker->boolean(8),
        'telefone' => $faker->boolean(15),
        'tipo' => 'Paucibacilar',
        'id_ubs' => 1
    ];
});

$factory->define(App\Models\Painel\Contato::class, function ($faker) {
    $faker->addProvider( new \App\Faker\Pessoa($faker));
    return [
        'nome' => trim($faker->name),
        'parentesco' => 'Filho(a)',
        'status' => 'true',
        'telefone' => 'Paucibacilar',
        'id_paciente' => 1
    ];
});


$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->sentence,
        'conteudo' => $faker->paragraph,
    ];
});