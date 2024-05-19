<header>

<?php include 'header_page.php';
$titre = "Premium Room"; ?>
<title>Deluxe Room</title>
</header>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        body {
            font-family: 'Playfair Display', serif; /* Utilisation d'une police de caractères avec des empattements pour une touche de sophistication */
            font-size: 18px; /* Taille du texte */
            line-height: 1.6; /* Espacement des lignes */
            color:#333; /* Couleur du texte */
            text-align: justify; /* Justifier le texte */
            text-align: center; /* Centrer le texte */
        }


        .main{
            display: flex;
            margin-bottom: 100px;



        }
        .room-info {
            margin-bottom: 1em;
        }
        .room-info h2 {
            color: #4a4a4a;
        }
        .room-feature {
            margin-bottom: 0.3em;
        }
        .icon-container {
            display: inline-block;
            margin-right: 0.5em;
            position: relative;
            cursor: pointer;
            transition: color 0.2s;
        }
        .icon-container:hover {
            color: #4a4a4a;
        }
        .icon-container i {
            font-size: 1.2em;
            color: #ae7e0f;
            transition: color 0.2s;
            margin-bottom: 30px;
            padding-bottom: 20px;

        }
        .icon-label {
            position: absolute;
            bottom: 110%;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 0.8em;
            opacity: 0;
            transition: opacity 0.2s;
        }
        .icon-container:hover .icon-label {
            opacity: 1;
        }


        .h3{
            margin-bottom: 70px; /* Marge en bas du titre */
            font-size: 100px; /* Taille du texte */


        }

        .p{
            margin-bottom: 90px; /* Marge en bas du titre */
        }

    

         /* CSS pour le bouton "reserver" */
        .reserved-button {

            width: 40%;
            float: center;
            background-color: #ae7e0f;; /* Couleur de fond */
            color: #fff; /* Couleur du texte */
            border: none; /* Suppression de la bordure */
            padding: 10px 20px; /* Ajout de rembourrage */
            margin-top: 10px; /* Marge en haut */
            cursor: pointer; /* Curseur pointer */
            margin-bottom: 50px; /* Marge en bas du titre */
        }


        @media (max-width: 768px) {
            body {
                font-size: 16px;

            }
        }

        
        /* Styles pour le bouton "Réserver" */
        .reserved-button {
            width: 40%;
            margin: 20px auto; /* Centrer le bouton */
            background-color: #ae7e0f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            display: block;
        }


        #slideshow-container {
            position: relative;
            max-width: 900px; /* Taille maximale du diaporama */
            margin: auto;
            margin-bottom: 20px;
        }
        
        
        .slide {
            display: none;
        }
        
        
        .slide img {
            max-width: 100%; /* Pour afficher l'image dans sa totalité */
            height: auto;
        }
        
        
        
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            padding: 16px;
            background-color: black;
            color: white;
            font-weight: bold;
            font-size: 20px;
            z-index: 1;
        }
        
        
        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }
   
    </style>
</head>
<body>
    <section>
    <div class="room-info">
        <h3>✦ Chambre de luxe ✦</h3>
        
        <div id="slideshow-container">
            <div class="slide">
                <img src="imagee111.jpg" alt="Imagee 112">
            </div>
            
            <div class="slide">
                <img src="imagee122.jpg" alt="Imagee 122">
            </div>
            
            
            <div class="slide">
                <img src="imagee133.jpg" alt="Imagee 133">
            </div>
            
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>


        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var slides = document.getElementsByClassName("slide");
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;

            }
            slides[slideIndex - 1].style.display = "block";
        }

        function changeSlide(n) {
            slideIndex += n;
            showSlides();
        }
        </script>

        <p1>Situées dans le bâtiment principal de l'hôtel, les chambres de luxe du Maleke Palace peuvent accueillir jusqu'à trois adultes et mesurent 61 mètres carrés. Ils disposent d'un balcon avec vue sur le terrain, la piscine ou la mer et d'un grand lit, ainsi que d'un coin salon. Les salles de bains comprennent une douche de style baignoire turque et un jacuzzi, comme produits de bain haut de gamme. Les équipements supplémentaires de la chambre comprennent un bureau, une télévision à écran LED, un minibar et un coffre-fort.</p1>
        <p class="room-feature"> </p>
        <ul>
            <li class="icon-container">
                <i class="fas fa-snowflake"></i>
                <span class="icon-label">Climatisation</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-window-maximize"></i>
                <span class="icon-label">Balcon</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-bath"></i>
                <span class="icon-label">Baignoire</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-hair-dryer"></i>
                <span class="icon-label">Sèche-cheveux</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-coffee"></i>
                <span class="icon-label">Ensemble de thé et de café</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-satellite-dish"></i>
                <span class="icon-label">Télévision par satellite</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-phone"></i>
                <span class="icon-label">Téléphone</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-wifi"></i>
                <span class="icon-label">Wifi gratuit</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-robot"></i>
                <span class="icon-label">Peignoir et chaussons</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-star"></i>
                <span class="icon-label">Commodités de luxe</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-lock"></i>
                <span class="icon-label">Sûr</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-tint"></i>
                <span class="icon-label">Douche de pluie</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-glass-martini"></i>
                <span class="icon-label">Minibar</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-mug-hot"></i>
                <span class="icon-label">Machine à café</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-pills"></i>
                <span class="icon-label">Menu d'oreiller</span>
            </li>
            <li class="icon-container">
                <i class="fas fa-ladder"></i>
                <span class="icon-label">Échelle</span>
            </li>
        </ul>
            <p class="room-feature"><strong>Taille: </strong> 61 m²</p>
            <p class="room-feature"><strong>Max: </strong> 4 personne </p>
            <p class="room-feature"><strong>Prix: à partir de </strong> 453,60 € | Nuit</p>

            <a href="formulaire_reservation.php">
                <button class="reserved-button">Réserver</button>
            </a>

    </div>
    </section>


</body>
<?php include 'footer_page.php'; ?>
</html>
