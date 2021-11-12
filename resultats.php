<?php
    $name = $_POST[("name")];
    $firstName = $_POST[("firstName")];
    $mail = $_POST[("mail")];
    $motif = $_POST[("motif")];
    $commentaire = $_POST[("commentaire")];

    if ($name = true) {
        echo "$name <br>";
    } else {
        echo "Veuillez remplir le formulaire";
    }

    if ($firstName = true) {
        echo "$firstName <br>";
    } else {
        echo "Veuillez remplir le formulaire";
    }
    
    if ($mail = true) {
        echo "$mail <br>";
    } else {
        echo "Veuillez remplir le formulaire";
    }

    if ($motif = true) {
        echo "$motif <br>";
    } else {
        echo "Veuillez remplir le formulaire";
    }

    if ($commentaire = true) {
        echo "$commentaire <br>";
    } else {
        echo "Veuillez remplir le formulaire";
    }