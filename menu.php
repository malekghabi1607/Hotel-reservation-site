<header>
    <nav>
        <ul>
            <?php
                $menu = array("Accueil" => "index.php", "Présentation" => "presentation.php", "Contact" => "contact.php", "Réservations" => "reservations.php", "Formulaire" => "formulaire_reservation.php");
                
                foreach ($menu as $label => $link) {
                    echo "<li><a href=\"$link\">$label</a></li>";
                }
            ?>
        </ul>
    </nav>
</header>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left " style="display:none" id="mySidebar">
  
    <button class="w3-bar-item w3-button w3-large w3-center" onclick="w3_close()">&times;</button>

    <?php foreach($menu as $nom => $lien): ?>

    <a href="<?php echo $lien ?>" title="<?php echo $nom ?>" style="text-decoration: none; width:100%" class="w3-button w3-theme"><?php echo $nom ?></a>
    <?php endforeach; ?>

</div>

<button id="openNav" class="w3-button w3-xxlarge w3-text-white" style="position: absolute;" onclick="w3_open()">&#9776;</button>

<script>
    function w3_open() 
    {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() 
    {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
    }
</script>