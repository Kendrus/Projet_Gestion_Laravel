<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 0;
        }
        .btn-primary, .btn-secondary, .btn-danger {
            border-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="clients-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="clients" aria-selected="true">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="produits-tab" data-toggle="tab" href="#produits" role="tab" aria-controls="produits" aria-selected="false">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="false">Catégories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="#utilisateurs" role="tab" aria-controls="utilisateurs" aria-selected="false">Utilisateurs</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="clients" role="tabpanel" aria-labelledby="clients-tab">
                <!-- Formulaire pour les clients -->
                <form>
                    <div class="form-group">
                        <label for="client-nom">Nom</label>
                        <input type="text" class="form-control" id="client-nom" placeholder="Nom du client">
                    </div>
                    <div class="form-group">
                        <label for="client-prenom">Prénom</label>
                        <input type="text" class="form-control" id="client-prenom" placeholder="Prénom du client">
                    </div>
                    <!-- Ajoutez d'autres champs pour les clients ici -->
                    <button type="submit" class="btn btn-primary">Ajouter un client</button>
                </form>
            </div>
            <div class="tab-pane fade" id="produits" role="tabpanel" aria-labelledby="produits-tab">
                <!-- Formulaire pour les produits -->
                <form>
                    <div class="form-group">
                        <label for="produit-nom">Nom</label>
                        <input type="text" class="form-control" id="produit-nom" placeholder="Nom du produit">
                    </div>
                    <div class="form-group">
                        <label for="produit-description">Description</label>
                        <textarea class="form-control" id="produit-description" placeholder="Description du produit"></textarea>
                    </div>
                    <!-- Ajoutez d'autres champs pour les produits ici -->
                    <button type="submit" class="btn btn-primary">Ajouter un produit</button>
                </form>
            </div>
            <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                <!-- Formulaire pour les catégories -->
                <form>
                    <div class="form-group">
                        <label for="categorie-nom">Nom</label>
                        <input type="text" class="form-control" id="categorie-nom" placeholder="Nom de la catégorie">
                    </div>
                    <div class="form-group">
                        <label for="categorie-description">Description</label>
                        <textarea class="form-control" id="categorie-description" placeholder="Description de la catégorie"></textarea>
                    </div>
                    <!-- Ajoutez d'autres champs pour les catégories ici -->
                    <button type="submit" class="btn btn-primary">Ajouter une catégorie</button>
                </form>
            </div>
            <div class="tab-pane fade" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">
                <!-- Formulaire pour les utilisateurs -->
                <form>
                    <div class="form-group">
                        <label for="utilisateur-nom">Nom</label>
                        <input type="text" class="form-control" id="utilisateur-nom" placeholder="Nom de l'utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="utilisateur-email">Email</label>
                        <input type="email" class="form-control" id="utilisateur-email" placeholder="Email de l'utilisateur">
                    </div>
                    <!-- Ajoutez d'autres champs pour les utilisateurs ici -->
                    <button type="submit" class="btn btn-primary">Ajouter un utilisateur</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
