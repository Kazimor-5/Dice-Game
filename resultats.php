<?php
    $name = $_POST["name"];
    $firstName = $_POST["firstName"];
    $mail = $_POST["mail"];
    $motif = $_POST["motif"];
    $commentaire = $_POST["message"];
    
    if (isset($_POST[("submit")])) {
        echo "Nom: $name <br>";
        echo "Prénom: $firstName <br>";
        echo "E-mail: $mail <br>";
        echo "Motif: $motif <br>";
        echo "Commentaire: $commentaire <br>";
    } else {
        echo "Veuillez remplir le formulaire";
    }