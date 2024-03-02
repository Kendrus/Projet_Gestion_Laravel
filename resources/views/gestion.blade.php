<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients, Produits et Catégories</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Clients</h1>
        <!-- Tableau pour afficher les clients -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Numéro de téléphone</th>
                    <th>Sexe</th>
                </tr>
            </thead>
            <?php if (empty($clients)): ?>
    <p>Aucun client trouvé.</p>
<?php else: ?>
    <!-- Afficher la liste des clients -->
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Numéro de téléphone</th>
                <th>Sexe</th>
            </tr>
        </thead>
        <tbody>
            <!-- Afficher chaque client dans une ligne du tableau -->
            <!-- Utilisez les données PHP pour remplir les valeurs -->
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $client->nom ?></td>
                <td><?= $client->prenom ?></td>
                <td><?= $client->adresse ?></td>
                <td><?= $client->numero_telephone ?></td>
                <td><?= $client->sexe ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>
        </table>

        <h1 class="mt-5 mb-4">Liste des Produits</h1>
        <?php if (empty($produits)): ?>
    <p>Aucun produit trouvé.</p>
<?php else: ?>
    <!-- Afficher la liste des produits -->
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité en stock</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <!-- Afficher chaque produit dans une ligne du tableau -->
            <!-- Utilisez les données PHP pour remplir les valeurs -->
            <?php foreach ($produits as $produit): ?>
            <tr>
                <td><?= $produit['nom'] ?></td>
                <td><?= $produit['description'] ?></td>
                <td><?= $produit['prix'] ?></td>
                <td><?= $produit['quantite_en_stock'] ?></td>
                <td><?= $produit['photo'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
   <?php endif ?>

        <h1 class="mt-5 mb-4">Liste des Catégories</h1>
        <?php if (empty($categories)): ?>
    <p>Aucune catégorie trouvée.</p>
<?php else: ?>
    <!-- Afficher la liste des catégories -->
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <!-- Afficher chaque catégorie dans une ligne du tableau -->
            <!-- Utilisez les données PHP pour remplir les valeurs -->
            <?php foreach ($categories as $categorie): ?>
            <tr>
                <td><?= $categorie['nom'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>

    </div>
</body>
</html>
