<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
}
/*affichage de la liste*/
$clients = Client::all();

foreach ($clients as $client) {
    echo $client->nom;
    echo $client->prenom;
    echo $client->telephone;
    echo $client->adresse;
    echo $client->sexe;
}
