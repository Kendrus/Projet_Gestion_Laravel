<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //table pivot categorie et produit
    public function up()
{
    Schema::create('categorie_produit', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('categorie_id');
        $table->unsignedBigInteger('produit_id');
        $table->timestamps();

        $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorie_produit');
    }
};
