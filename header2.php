<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l'en-tête du site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styles pour le corps de la page */
body {
    font-family: Arial, sans-serif;
    background-color: #000000;
    padding: 100;
    margin: 0;
    padding: 0;
}



        /* Styles pour l'en-tête */
header {
    position: relative;
    background-color: #000000;
    width: 100%;
    z-index: 100;
    padding-top: 50px;
}


nav ul li {
    display: inline-block;
    margin left:10 px; /* Espacement entre les éléments du menu */
    padding: auto;
    margin-right: 10px;
    color: #000000;

}
.container_menu{
    display: block;
    font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères sans empattement pour un texte plus lisible */
    max-width: 80%;
    font-size: 50px;

    color: #000000;
    margin-left: 50px;



}


nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    
}
#menu {
    font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères sans empattement pour un texte plus lisible */
    display: none;
    
    }
    
#menu.show {
    font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères sans empattement pour un texte plus lisible */
    display: block;
        position: absolute;
        top: 10px; /* Adjust as needed */
        right: 10px; /* Adjust as needed */
        background-color: black;
        padding: 10px;
        border: 2px solid #ccc;
        z-index: 9999;

    }


    </style>
<header>
    <button id="menuButton"><i class=" container_menu" class="fas fa-bars"></i> Menu</button>
    <nav id="menu">
        <ul  >
            <?php
        
                $menu = array("Accueil" => "index.php", "Présentation" => "presentation.php", "Contact" => "contact.php", "Réservations" => "reservations.php", "Formulaire" => "formulaire_reservation.php");
                
                foreach ($menu as $label => $link) {
                    echo "<li><a href=\"$link\">$label</a></li>";
                }
            ?>
        </ul>
    </nav>
</header>

<script>
    document.getElementById("menuButton").addEventListener("click", function() {
        var menu = document.getElementById("menu");
        menu.classList.toggle("show");
    });
</script>





    
    