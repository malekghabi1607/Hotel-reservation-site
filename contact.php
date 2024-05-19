<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" >
    <style>
    
    body, html {
        margin: 0;
        padding: 0;
    }
    
    /* Styles généraux pour le corps de la page */
    body {
        font-family: Arial, sans-serif; /* Police de caractères par défaut */
        margin: 0;
        padding: 0;
        background-color: #f9f9f9; /* Couleur de fond de la page */
        display: flex; /* Utilisation de Flexbox pour le positionnement vertical */
        justify-content: center; /* Centrer horizontalement */
        align-items: center; /* Centrer verticalement */
        height: 100vh; /* Hauteur de la page égale à la hauteur de la fenêtre */
    }

/* Conteneur principal pour le contenu */
.container {
    background-color: #fff; /* Couleur de fond du conteneur */
    border-radius: 10px; /* Bordure arrondie */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
    padding: 30px; /* Espacement intérieur */
    width: 400px; /* Largeur du conteneur */
}


/* Titre principal */
h2 {
    color: #333; /* Couleur du texte */
    text-align: center; /* Centré horizontalement */
}

/* Styles pour les formulaires */
form {
    display: flex; /* Utilisation de Flexbox pour aligner les éléments */
    flex-direction: column; /* Les éléments sont disposés en colonne */
}

/* Groupe de formulaire */
.form-group {
    margin-bottom: 20px; /* Espacement entre les groupes de formulaire */
}

/* Étiquette du formulaire */
label {
    font-weight: bold; /* Texte en gras */
}

/* Styles pour les champs de saisie */
input[type="text"],
input[type="email"],
select {
    width: 100%; /* Largeur pleine du conteneur */
    padding: 10px; /* Espacement intérieur */
    border: 1px solid #ccc; /* Bordure grise */
    border-radius: 5px; /* Bordure arrondie */
    margin-top: 5px; /* Espacement par rapport au haut */
}

/* Styles pour les cases à cocher */
input[type="checkbox"] {
    margin-right: 5px; /* Espacement entre les cases à cocher */
}

/* Styles pour les boutons */
button {
    background-color: #333; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    border: none; /* Pas de bordure */
    padding: 10px 20px; /* Espacement intérieur */
    border-radius: 5px; /* Bordure arrondie */
    cursor: pointer; /* Curseur de type main */
}

/* Au survol des boutons */
button:hover {
    background-color: #555; /* Changement de couleur de fond au survol */
}

/* Paragraphe générique */
p {
    font-size: 14px; /* Taille de la police */
    color: #666; /* Couleur du texte */
    margin-top: 10px; /* Espacement par rapport au haut */
}

/* Styles pour le pied de page */
footer {
    background-color: #333; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    text-align: center; /* Centré horizontalement */
    padding: 20px 0; /* Espacement intérieur */
    position: fixed; /* Position fixe en bas de la fenêtre */
    bottom: 0; /* Aligné en bas */
    width: 100%; /* Largeur de 100% */
}

    </style>

</head>
<body>
    <div class="container">
        <h2>Contactez-nous</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="Sexe">Sexe:</label>
                <select id="Sexe" name="Sexe">
                    <option value="Mr">M.</option>
                    <option value="Mrs">Mme</option>
                    <option value="Other">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="first-name">Prénom:</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Nom:</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="Commentaire">Commentaire:</label>
                <input type="text" id="Commentaire" name="Commentaire" required>
        
            </div>
            <div class="form-group">
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">Je consens à ce que ce site Web stocke mes informations soumises afin qu'ils puissent répondre à ma demande.</label>
            </div>
            <button type="submit">Envoyer</button>
            <p>*Champs obligatoires</p>
        </form>
    </div>

    <?php include 'footer_page.php'; ?>
</body>
</html>
