<div class="w3-row">
    
    <div class="w3-center">
        <button onclick="document.getElementById('<?php echo $num_form; ?>').style.display='block'" class="w3-button w3-theme" style="margin-left: 1%; margin-top: 1%; margin-bottom: 1%">Modifier</button>
    </div>

    <div id="<?php echo $num_form; ?>" class="w3-col w3-modal" style="padding: 3%">
        <div class="w3-modal-content">
            <span onclick="document.getElementById('<?php echo $num_form; ?>').style.display='none'" class="w3-button w3-display-topright w3-theme">&times;</span>
            <form action="modifier_res.php" method="get" class="w3-card-2"> 

                <h2 class="w3-container w3-theme w3-center">Modification de la réservation</h2>

                <div class="w3-container">

                <div class="w3-text-theme w3-row">
                    <label for="id">Numéro de réservation :</label>
                    <input class="w3-input" type="text" id="id" name="id" onfocus="placeholder=''" onkeypress="validEntree()" <?php  echo "value='$info_resa[0]'"; ?> readonly>
                </div><br>

                <div class="w3-text-theme w3-row">
                    <label for="nom">Nom :</label>
                    <input class="w3-input" type="text" id="nom" name="nom" placeholder="Votre Nom" onfocus="placeholder=''" onkeypress="validEntree()" <?php  echo "value='$info_resa[2]'"; ?>>
                </div><br>

                <div class="w3-text-theme">
                    <label for="prenom">Prenom :</label>
                    <input class="w3-input" type="text" id="prenom" name="prenom" placeholder="Votre Prénom" onfocus="placeholder=''" onkeypress="validEntree()" <?php echo "value='$info_resa[1]'"; ?>>
                </div><br>

                <div class="w3-text-theme">
                    <label for="nb_pers">Nombre de personnes :</label>
                    <input class="w3-input" type="number" id="nb_pers" name="nb_pers" min="1"  onkeypress="validEntree()" <?php if ($info_resa[3] > 0 && $info_resa[3] < 5) {echo "value='$info_resa[3]'";} ?>> <?php if ($info_resa[3] < 0 || $info_resa[3] > 4) {echo "<p class='w3-container w3-red'> Veuillez rentrer un nombre de personnes compris entre 1 et 4</p>";} ?>
                </div><br>

                <div class="w3-text-theme">
                    <label for="duree_sej">Durée de séjour :</label>
                    <input class="w3-input" type="number" id="duree_sej" name="duree_sej" min="1" onkeypress="validEntree()" <?php echo "value='$info_resa[4]'"; ?>> <?php if ($info_resa[4] < 1 || $info_resa[4] > 15) {echo "<p class='w3-container w3-red'> Veuillez rentrer une durée de séjour compris entre 1 et 15 jours</p>";} ?>
                </div><br>
                
                <div class="w3-center">
                    <input class="w3-theme w3-button w3-round-xlarge w3-hover-white" type="submit" value="Soumettre" >
                    <input class="w3-theme w3-button w3-round-xlarge w3-hover-white" type="reset" value="Recommencer">
                </div>

                <br><br>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function verif_nb_pers()
    {
        var saisie = document.getElementById("nb_pers").value;

        if (saisie < 1 || saisie > 4) {alert("Veuillez saisir un nombre de personnes entre 0 et 4 !")};
    }

    function verif_duree_sej()
    {
        var saisie = document.getElementById("duree_sej").value;

        if (saisie < 1 || saisie > 4) {alert("Veuillez saisir une durée de séjour entre 1 et 15 jours !")};
    }
</script>