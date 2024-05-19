<?php include 'headerpage.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des réservations</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">

    <style>
       /* Styles pour la liste de réservation */
#reservations {
    display: flex; /* Utilisation de Flexbox pour disposer les éléments en ligne */
    flex-wrap: wrap; /* Permettre le retour à la ligne automatique */
}

/* Styles pour chaque élément de réservation */
.w3-card {
    background-color: #fff; /* Couleur de fond */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
    margin: 10px; /* Marge autour de chaque élément */
    padding: 10px; /* Espacement intérieur */
    border-radius: 5px; /* Bordure arrondie */
    width:100%; /* Largeur égale à la moitié de la largeur parente moins les marges */
    box-sizing: border-box; /* Inclure les bordures et les marges dans la largeur */
}

/* Styles pour les boutons de suppression */
.w3-button.w3-theme {

    display: block;
    width: 100%;
    background-color: #333; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    border: none; /* Pas de bordure */
    padding: 10px 20px; /* Espacement intérieur */
    border-radius: 5px; /* Bordure arrondie */
    cursor: pointer; /* Curseur de type main */
    margin-left: 10px; /* Espacement à gauche */
    margin-top: 10px; /* Espacement en haut */
}


/* Au survol des boutons de suppression */
.w3-button.w3-theme:hover {
    background-color: #555; /* Changement de couleur de fond au survol */

}

.p{
    font-weight: bold; /* Texte en gras */
 }

 .body{
    
    align-items: center;
    height: auto;
    margin-bottom: 100px;
}

    </style>
</head>

<body>
    <section>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; width: 200px;" id="mySidebar"></div>

<div id="main">
    <div class="w3-container">
        <h2>꧁ Liste des réservations ꧂</h2>

        <div class="w3-row-padding" id="reservations">
        <?php

            $reservations = file("reservations.txt", FILE_IGNORE_NEW_LINES);
            sort($reservations);

            $resaFile = fopen("reservations.txt", "w");

            foreach ($reservations as $reservation) {fwrite($resaFile, $reservation . PHP_EOL);}

            fclose($resaFile);

            $resa = fopen("reservations.txt", "r");

            $ligne = '';
            $ligne2 = fgets($resa);
            $num_form = 0;

            while (!feof($resa)) 
            {
                $ligne = $ligne2;
                $ligne2 = fgets($resa);
                $info_resa = explode("|", $ligne);
        ?>
                <div class="w3-col s12 m6 l6 w3-margin-bottom taille_<?php echo $info_resa[3]; ?>">
                    <div class="w3-card">
                        <div class="w3-container w3-center">
                            <p>Numéro de réservation : <?php echo $info_resa[0] ?></p>
                            <p>Prénom : <?php echo $info_resa[1] ?></p>
                            <p>Nom : <?php echo $info_resa[2] ?></p>
                            <p>Nombre de personne(s) : <?php echo $info_resa[3] ?></p>
                            <p>Durée du séjour : <?php echo $info_resa[4] ?></p>
                        </div>
                        <div>

                        <div> <!-- Boutton supprimer -->
                                <button onclick="document.getElementById('supp_<?php echo $num_form; ?>').style.display='block'" class="w3-button w3-theme" style="margin-left: 1%; margin-top: 1%; margin-bottom: 1%">Supprimer</button>
                        </div>

                        <!-- Bloc confirmation de supression -->
                        <div id="supp_<?php echo $num_form; ?>" class="w3-col w3-modal w3-card" style="padding: 3%;">
                            <div class="w3-modal-content">
                                <div class="w3-container">
                                    <p>Voulez vous vraiment supprimer la réservation n°<?php echo $info_resa[0] ?> ?</p>
                                    <form action="supprimer_res.php" method="get">
                                        <input type="hidden" name="id" value="<?php echo $info_resa[0]; ?>">
                                        <button type="submit" class="w3-button w3-red" style="margin-bottom : 2%;">Supprimer</button>
                                        <button type="button" onclick="document.getElementById('supp_<?php echo $num_form; ?>').style.display='none'" class="w3-button w3-theme" style="margin-bottom : 2%;">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php include 'form_modif.php'; ?>

                        </div>
                        <br> 
                    </div>
                </div>
        <?php
                $pos++;
                if ($pos % 2 == 0) 
                {
                    echo '<div class="w3-clear"></div>';
                }
                $num_form ++;
            }
            fclose($resa);
        ?>
    </div>


        </section>
</body>
<?php include 'footer_page.php'; ?>
