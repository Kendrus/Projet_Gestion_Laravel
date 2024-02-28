<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
}

$produits = produit::all();

foreach ($clients as $client) {
    echo $client->nom;
    echo $client->email;
}
