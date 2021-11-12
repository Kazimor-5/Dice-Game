<?php
    $name = $_POST[("name")];
    $firstName = $_POST[("firstName")];
    $mail = $_POST[("mail")];
    $motif = $_POST[("motif")];
    $commentaire = $_POST[("commentaire")];

    if ($name = true) {
        return  $name;
        print_r($name);
        echo "br";
    } else {
        echo "Veuillez remplir le formulaire";
    }

    if ($firstName = true) {
        return  $firstName;
        print_r($firstName);
        echo "br";
    } else {
        echo "Veuillez remplir le formulaire";
    }
    
    if ($mail = true) {
        return  $mail;
        print_r($mail);
        echo "br";
    } else {
        echo "Veuillez remplir le formulaire";
    }

    if ($motif = true) {
        return  $motif;
        print_r($motif);
        echo "br";
    } else {
        echo "Veuillez remplir le formulaire";
    }

    if ($commentaire = true) {
        return  $commentaire;
        print_r($commentaire);
        echo "br";
    } else {
        echo "Veuillez remplir le formulaire";
    }