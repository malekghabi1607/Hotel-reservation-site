<style>
    .w3-center{

    width: 90%; /* Largeur pleine du conteneur */
    margin-left: 50px;
    margin-right:510px;

    padding: 50px; /* Espacement intérieur */
    border: 1px solid #ccc; /* Bordure grise */
    border-radius: 5px; /* Bordure arrondie */
    margin-top: 50px; /* Espacement par rapport au haut */

}

.w-button{
    background-color: #333; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    border: none; /* Pas de bordure */
    padding: 10px 20px; /* Espacement intérieur */
    border-radius: 5px; /* Bordure arrondie */
    cursor: pointer; /* Curseur de type main */
}
    </style>
<?php
         $prenom = $_GET['prenom'];
         $nom_form = $_GET['nom'];
         $taille_chambre = $_GET['taille_chambre'];
         $duree_sej = $_GET['duree_sejour'];
     
         $resa = fopen("reservations.txt", "a");
         
         $id = substr(uniqid(), -5);
     
         if ($taille_chambre > 0 && $taille_chambre < 5 && $duree_sej > 0 && $duree_sej <= 15) 
         { ?>
            
            <div class="w3-center">
                 <p>Vous avez réservé une chambre pour <?php echo $taille_chambre ?> personne(s) avec succès !</p>
             </div><br>
     
             <?php
             $save_client = "$id|$prenom|$nom_form|$taille_chambre|$duree_sej|\n";
             fwrite($resa, $save_client);
             fclose($resa);
         }
?>    