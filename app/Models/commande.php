<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
}
$clients = commande::all();

foreach ($commandes as $commande) {
    echo $commande->datesecommande;
    echo $commande->MTT;
    
}
