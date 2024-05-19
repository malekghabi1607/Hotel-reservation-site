
    <style>
        footer {
            background-color: #ffffff; /* Couleur de fond du pied de page */
            color: #0d0574; /* Couleur du texte */
            padding: 20px 0; /* Espacement intérieur du pied de page */
            text-align: center; /* Centrer le contenu du pied de page */
            position:relative;
            left: 0;
            bottom: 0;
            width: 100%;

        }
        .container {
            display: flex; /* Utilisation de Flexbox pour aligner les éléments */
            flex-wrap: wrap; /* Permet aux éléments de passer à la ligne si nécessaire */
            justify-content: space-between; /* Répartit les éléments également horizontalement */
            max-width: 15000px; /* Largeur maximale du pied de page */
            margin: auto; /* Centre le pied de page horizontalement */
            padding: 10px; /* Ajoute un peu de marge intérieure aux côtés */
            align-items: center; /* Centrer verticalement les éléments */
        }

        /* Styles pour le logo */
        .logo1 {
            flex-basis: 100%; /* Largeur du logo (100% de la largeur totale) */
            margin-bottom: 20px; /* Ajoute un peu d'espace en bas du logo */
            background-color: #070707; /* Couleur de fond du logo */
            padding: 20px; /* Ajoute de l'espace autour du logo */
            width: 70%; /* Largeur du logo par rapport à son conteneur */
            text-align: center; /* Centrer le contenu du logo */
        }
        
        .logo1 img {
            display: block; /* Permet de centrer le logo */
            margin: auto; /* Centre le logo horizontalement */
            max-width: 100px; /* Taille maximale du logo */
            height: auto; /* Garantit que le rapport hauteur/largeur est conservé */
        }


        /* Styles pour l'adresse */
        .address {
            flex-basis: 100%; /* Largeur de l'adresse (100% de la largeur totale) */
            margin-bottom: 20px; /* Ajoute un peu d'espace en bas de l'adresse */
            background-color: #f2f2f2; /* Couleur de fond de l'adresse */
            padding: 30px; /* Ajoute un peu de rembourrage à l'adresse */
            border-radius: 5px; /* Ajoute un peu de bordure arrondie à l'adresse */
        }

        /* Styles pour les icônes de médias sociaux */
        .social-media {
            flex-basis: 100%; /* Largeur des icônes de médias sociaux (100% de la largeur totale) */
            margin-bottom: 20px; /* Ajoute un peu d'espace en bas des icônes de médias sociaux */
        }

        .social-media img {
            max-width: 30px; /* Taille maximale des icônes de médias sociaux */
            height: auto; /* Garantit que le rapport hauteur/largeur est conservé */
            margin-right: 10px; /* Ajoute un peu d'espace entre chaque icône de médias sociaux */
        }

        /* Styles pour le formulaire d'inscription à la newsletter */
        .newsletter {
            flex-basis: 120%; /* Largeur du formulaire (100% de la largeur totale) */
            margin-bottom: 50px; /* Ajoute un peu d'espace en bas du formulaire */
        }

        .newsletter form {
            display: flex; /* Utilisation de Flexbox pour aligner les éléments du formulaire */
            flex-direction: column; /* Place les éléments les uns au-dessus des autres */
        }

        .newsletter input[type="email"] {
            padding: 10px; /* Ajoute un peu de rembourrage aux champs de saisie */
            border: none; /* Supprime la bordure du champ de saisie */
            border-radius: 5px; /* Ajoute un peu de bordure arrondie au champ de saisie */
            background-color: #d8d1d1; /* Couleur de fond du champ de saisie */
            color: #003366; /* Couleur du texte dans le champ de saisie */
            margin-bottom: 10px; /* Ajoute un peu d'espace en bas du champ de saisie */
        }

        .newsletter button[type="submit"] {
            padding: 20px; /* Ajoute un peu de rembourrage au bouton */
            border: none; /* Supprime la bordure du bouton */
            border-radius: 5px; /* Ajoute un peu de bordure arrondie au bouton */
            background-color: #110f1a; /* Couleur de fond du bouton */
            width: 100%;
            color: #fff; /* Couleur du texte du bouton */
            cursor: pointer; /* Change le curseur en main lorsque survolé */
        }
    </style>


    <footer>
        <div class="container">
            <div class="logo1">
                <img src="maleke palace-logo.png" alt="Maleke Palace Logo">
            </div>
            <div class="address">
                <h2> MALEKE PALACE </h2>
                <p>30 Rue du Maréchal- Plage de Trestraou - 22700 Perros Guirec</p>
                <p>Tel: +33 2 96 23 14 19</p>
				<p>E-mail: <a href="mailto:mardan.palace@titanic.com.tr">maleke.palace@info.com</a></p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/MalekePalace" target="_blank"><img src="facebook-icon.png" alt="Facebook Icon"></a>
                <a href="https://twitter.com/MalekePalace" target="_blank"><img src="twitter-icon.png" alt="Twitter Icon"></a>
                <a href="https://www.instagram.com/MalekePalace/" target="_blank"><img src="instagram-icon.png" alt="Instagram Icon"></a>
            </div>
            <div class="newsletter">
                <form action="/subscribe" method="post">
                    <input type="email" name="email" placeholder="Enter your email address...">
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>
