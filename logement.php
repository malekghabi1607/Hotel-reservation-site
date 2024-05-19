
<header>
<title>Logement </title>
    <?php include 'header_page.php'; ?>
    <style>
        header {
        position:relative;
        background-color: #333; /* Couleur de fond */
        color: #fff; /* Couleur du texte */
        width: 100%;
        height: 60%;
        z-index: 100%;
        padding-top: 40px;

        }
        body {
            font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères avec des empattements pour une touche de sophistication */
            font-size: 18px; /* Taille du texte */
            line-height: 1.6; /* Espacement des lignes */
            color:#333; /* Couleur du texte */
            text-align: justify; /* Justifier le texte */
            text-align: center; /* Centrer le texte */
        }
        section h2 {
            font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères avec des empattements pour une touche de sophistication */
            font-size: 28px; /* Taille du texte */
            color:#010184; /* Couleur du texte */
            text-align: center; /* Centrer le texte */
            margin-bottom: 20px; /* Marge en bas du titre */
        }
        .logement {
            max-width: 1200px; /* Définir la largeur maximale de l'image */
            height: auto; /* Permettre à la hauteur de s'ajuster automatiquement en fonction de la largeur */
            padding: 50px;
        }

        .hidden {

            display: none;

        }


        .h4{
            font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères avec des empattements pour une touche de sophistication */
            font-size: 28px; /* Taille du texte */
            color:#010184; /* Couleur du texte */
            text-align: center; /* Centrer le texte */
            margin-bottom: 40px; /* Marge en bas du titre */
            margin-top: 10px;
            padding-top: 20px;
            
        }

        legend {
            background-color: #000;
            color: #fff;
            padding: 7px 82px;
            border-radius: 4px;

        }
        
        input {
            margin: 0.4rem;
        }
        
        .p{
            margin-bottom: 70px; /* Marge en bas du titre */


        }
        .room-content-hidden {
            display: inline-block;
            width: 45%; /* Ajustez la largeur selon vos besoins */
            margin: 10px; /* Espace entre les blocs */
            vertical-align: top; /* Alignement vertical au-dessus */
            border: 1px solid #ccc; /* Ajout d'un bord */
            padding: 20px; /* Ajout de rembourrage */
            background-color: #f9f9f9; /* Couleur de fond */
        }
        
        .suite-content-hidden {
            display: inline-block;
            width: 45%; /* Ajustez la largeur selon vos besoins */
            margin: 10px; /* Espace entre les blocs */
            vertical-align: top; /* Alignement vertical au-dessus */
            border: 1px solid #ccc; /* Ajout d'un bord */
            padding: 20px; /* Ajout de rembourrage */
            background-color: #f9f9f9; /* Couleur de fond */

        }


    /* CSS pour le paragraphe */
    .room-content-hidden p {
        font-size: 14px; /* Taille du texte réduite */
        margin-top: 10px; /* Espace en haut du paragraphe */
        text-align: justify; /* Justification du texte */
    }

    /* CSS pour l'image */
    .room-content-hidden img {
        max-width: 100%; /* Image ajustée à la largeur de son conteneur */
        height: auto; /* Hauteur automatique pour maintenir les proportions */
        display: block; /* Affichage en bloc pour faciliter le positionnement */
        margin-left: 20px;
        margin-bottom: 20px; /* Espace en bas de l'image */
    }


    /* CSS pour le paragraphe */
    .suite-content-hidden p {
        font-size: 14px; /* Taille du texte réduite */
        margin-top: 10px; /* Espace en haut du paragraphe */
        text-align: justify; /* Justification du texte */
    }

    /* CSS pour l'image */
    .suite-content-hidden img {
        max-width: 100%; /* Image ajustée à la largeur de son conteneur */
        height: auto; /* Hauteur automatique pour maintenir les proportions */
        display: block; /* Affichage en bloc pour faciliter le positionnement */
        margin-left: 20px;
        margin-bottom: 20px; /* Espace en bas de l'image */

    }

    /* CSS pour le bouton "Découvrir" */
    .discover-button {
        display: block;
        width: 100%;
        background-color: #333; /* Couleur de fond */
        color: #fff; /* Couleur du texte */
        border: none; /* Suppression de la bordure */
        padding: 10px 20px; /* Ajout de rembourrage */
        margin-top: 10px; /* Marge en haut */
        cursor: pointer; /* Curseur pointer */
    }
   
        </style>
</header>
<body>
<main>
    <section>
        <div>
            <h2>Hébergement familial de luxe en bord de mer </h2>
            <img src="logement.png" alt="votre logement " class="logement">
            <p>Tous nos hébergements disposent d'un accès Wi-Fi gratuit et de téléviseurs intelligents à écran LCD, ainsi que de produits de luxe haut de gamme et de peignoirs moelleux et de chaussons dans la salle de bain.</p>
            <p>Beaucoup offrent une vue panoramique sur la piscine de l'hôtel ou sur la mer chatoyante, et tous comprennent un balcon privé.</p>
        </div>
    </section>



<section>
        <div>
            
        </div>
</sction>

<section>
    <img src="logo2.png" >






    <h4>꧁  All Rooms  ꧂</h4>
    <div class="checkbox-containers" id="Chambres">
    <fieldset>
        <legend>Chambres</legend>
        <input type="checkbox" id="classic" name="room" value="classic">
        <label for="classic">Chambre Classique</label><br>
        <input type="checkbox" id="premium" name="room" value="premium">
        <label for="premium">Chambre Premium</label><br>
        <input type="checkbox" id="premiumSeaPool" name="room" value="premiumSeaPool">
        <label for="premiumSeaPool">Chambre Vue sur Mer/Piscine Premium</label><br>
        <input type="checkbox" id="deluxe" name="room" value="deluxe">
        <label for="deluxe">Chambre de Luxe</label><br>
    </fieldset>
    
</div>

    
    
    <div id="roomList"></div>

    <section class="room-grid">
    <div id="classic-room-content" class="room-content-hidden">
        <h2>Chambre Classique</h2>
        <img src="classic_room.png" alt="Chambre Classique">
        <div class="room-description">
            <p>Nos Chambres Classiques ont une superficie de 28 mètres carrés et sont situées dans le bâtiment principal de l'hôtel ; elles peuvent accueillir jusqu'à deux adultes.</p>
            <p><strong>À partir de :</strong> 264,60 € | Nuit</p>
            <a href="page_chambre_classique.php">
                <button class="discover-button" onclick="decouvrirRoom('classic')">Découvrir</button>
            </a>
        </div>
    </div>

    <div id="premium-room-content" class="room-content-hidden">
        <h2>Chambre Premium</h2>
        <img src="premium_room.png" alt="Chambre Premium">
        <div class="room-description">
            <p>Les Chambres Premium du Maleke Palace varient en taille de 42 à 48 mètres carrés et sont situées dans le bâtiment principal de l'hôtel.</p>
            <p><strong>À partir de :</strong> 294,00 € | Nuit</p>
            <a href="page_chambre_premium.php">
                <button class="discover-button" onclick="decouvrirRoom('premium')">Découvrir</button>
            </a>
        </div>
    </div>

    <div id="premium-sea-pool-view-room-content" class="room-content-hidden">
        <h2>Chambre Vue sur Mer/Piscine Premium</h2>
        <img src="premium_sea_pool_view_room.png" alt="Chambre Vue sur Mer/Piscine Premium">
        <div class="room-description">
            <p>Les Chambres Vue sur Mer/Piscine Premium du Maleke Palace varient en taille de 42 à 48 mètres carrés et sont situées dans le bâtiment principal de l'hôtel. Elles peuvent accueillir jusqu'à trois adultes et disposent d'un canapé et d'un balcon avec vue sur la piscine principale.</p>
            <p><strong>À partir de :</strong> 310,80 € | Nuit</p>
            <a href="page_chambre_vue_sur_mer.php">
                <button class="discover-button" onclick="decouvrirRoom('premiumSeaPool')">Découvrir</button>
            </a>
        </div>
    </div>

    <div id="deluxe-room-content" class="room-content-hidden">
        <h2>Chambre de Luxe</h2>
        <img src="deluxe_room.png" alt="Chambre de Luxe">
        <div class="room-description">
            <p>Situées dans le bâtiment principal de l'hôtel, les Chambres de Luxe du Maleke Palace peuvent accueillir jusqu'à trois adultes et ont une superficie de 61 mètres carrés. Elles disposent d'un balcon avec vue sur les jardins, la piscine ou la mer, ainsi que d'un grand lit.</p>
            <p><strong>À partir de :</strong> 352,80 € | Nuit</p>
            <a href="page_chambre_deluxe.php">
                <button class="discover-button" onclick="decouvrirRoom('deluxe')">Découvrir</button>
            </a>
        </div>
    </div>
</section>




<script>
    function decouvrirRoom(roomType) {
        // Masquer toutes les chambres et suites
        document.querySelectorAll('.room-content-hidden, .suite-content-hidden').forEach(function(element) {
            element.classList.add('hidden');
        });

        // Afficher la chambre ou la suite correspondante
        document.getElementById(roomType + '-room-content').classList.remove('hidden');
        document.getElementById(roomType + '-suite-content').classList.remove('hidden');
    }
</script>




</main>
   
    </body>
    <?php include 'footer_page.php'; ?>
