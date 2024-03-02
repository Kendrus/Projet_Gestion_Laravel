<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'adresse' => $faker->address,
        'numero_telephone' => $faker->phoneNumber,
        'sexe' => $faker->randomElement(['M', 'F']),
    ];


// Créer une instance unique
$client = factory(Client::class)->create();

// Créer plusieurs instances
$clients = factory(Client::class, 10)->create();

});