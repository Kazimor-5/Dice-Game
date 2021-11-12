<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="./styles.css">
    
</head>
<body>
   <header class="header">
    <h1 class="header-title">Formulaire</h1>
</header>
<nav class="nav">
    <a href="./index.php" class="link">Dices</a>
    <a href="./form.php" class="link">Form</a>
</nav>
<section class="form-section">
    <form action="form.php" class="form" method="POST">
        <div class="cell">
                <label for="name" >
                Nom
                </label>
                <input type="text"  name="name" id="name">
            </div>
        <div class="cell">
                <label for="first-name" >
                Prénom
                </label>
                <input type="text"  name="firstName" id="first-name">
            </div>
        <div class="cell">
                <label for="mail" >
                E-mail
                </label>
                <input type="email"  name="mail" id="mail">
            </div>
        <div class="cell">
            <select  name="motif" class="motif">
	        <option value="">--- Catégorie ---</option>
	        <option value="plainte">Plainte</option>
	        <option value="request">Requête</option>
	        <option value="commentaire">Commentaire</option>
            </select>
        </div>
        <div class="cell">
            <textarea  name="message" id="message" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
        </div>
        <div class="button">
            <input type="submit" name="submit" formaction="resultats.php" value="Envoyer">
        </div>
    </form>
<?php
include 'resultats.php';
?>
</section>
</body>
</html>