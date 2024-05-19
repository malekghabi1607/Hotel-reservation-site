<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l'en-tête du site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styles pour le corps de la page */
body {
    font-family: Arial, sans-serif;
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


nav {
    display: flex;
    justify-content: space-between; /* Pour espacer les éléments du menu à gauche et à droite */
    align-items: center; /* Pour aligner verticalement les éléments du menu */
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    
}

nav ul li {
    display: inline;
    margin left:0 px; /* Espacement entre les éléments du menu */
    padding: auto;
    margin-right: 0px;

}

nav ul li.contact,
nav ul li.presentation,
nav ul li.reservation {
    float: right; /* Alignement à droite */
    margin-left: 100;
    margin-right: 0;
    padding: auto;


}




/* Styles pour les liens dans le menu de navigation */
nav ul li a {
    color: #fff;
    text-decoration:none;
    font-size: 1.25em;
    font-weight: 400;
    padding: 0.5rem 1rem;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    background-color: rgb(29, 8, 153);
}

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.3);
    min-width: 10rem;
    box-shadow: 0 2px 4px rgba(255, 255, 255, 0.3);
    z-index: 0;
}

.dropdown-content a {
    padding: 0.5rem 1rem;
    display: block;
    color: #ffffff;
    transition: background-color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #010202;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Styles responsifs */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
    }

    nav ul {
        flex-direction: column;
        align-items: center;
    }

    nav ul li {
        margin: 0.5rem 0;
    }
}

    </style>
</head>
<body>
    <header>
        
        <nav>

            <ul><li class="dropdown reservation">
                <a href="#" class="dropbtn"><i class="fas fa-bars"></i> Menu</a>
                <div class="dropdown-content">
                    <a href="logement.php">Logement</a>
                    <a href="experiences.php">Experiences</a>
                    <a href="restaurants.php">Restaurants</a>
                    <a href="amon-spa.php">Amon Spa</a>
                    <a href="meetings-events.php">Événements</a>
                    <a href="gallery.php">Gallerie</a>
                </div>
            </li>
            
            <ul>

                <li class="contact"><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                <li class="reservation"><a href="reservations.php"><i class="fas fa-calendar"></i> Réservation</a></li>
                <li class="reservation"><a href="formulaire_reservation.php"><i class="fas fa-calendar-check"></i> Formulaire</a></li>
                
                  

                <li class="dropdown reservation" class="langue">
                    <a href="#" class="dropbtn"><i class="fas fa-globe"></i>  Langue </a>
                    <div class="dropdown-content">
                        <a href="#" onclick="changeLanguage('fr')">Français</a>
                        <a href="#" onclick="changeLanguage('en')">English</a>
                        <a href="#" onclick="changeLanguage('fr')">Italien</a>

                    </div>
                </li>


            </ul>

           

        </nav>
    </header>

   
    <script>

    // Fonction pour changer la langue
    function changeLanguage(lang) {
        alert("Langue sélectionnée : " + lang);
    }
    </script>


    

    
    <script>
         // Définir une fonction pour changer l'image d'arrière-plan
        function changeBackgroundImage() {
            const images = ['image1.jpg', 'image2.jpg', 'image3.jpg']; // Liste des chemins des images d'arrière-plan
            const randomIndex = Math.floor(Math.random() * images.length); // Sélectionner un index aléatoire
            const newBackgroundImage = 'url(' + images[randomIndex] + ')'; // Créer le nouveau chemin d'image
            document.getElementById('hero').style.backgroundImage = newBackgroundImage; // Appliquer le nouvel arrière-plan
        }
        // Appeler la fonction pour changer l'image d'arrière-plan toutes les 3 secondes
        setInterval(changeBackgroundImage, 3000);
    </script>