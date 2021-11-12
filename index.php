<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<header class="header">
    <h1 class="header-title">Dices</h1>
</header>
<nav class="nav">
    <a href="./index.php" class="link">Dices</a>
    <a href="./form.php" class="link">Form</a>
</nav>
<section class="form-section">
    <form action="./index.php" class="dice-form" method= "POST" >
    <div class="cell">
        <input type="number" name="dice" class="dice"
        placeholder="Number of dice">
        </div>
        <div class="cell">
            <select name="face" class="face">
	        <option value="">--- Number of face ---</option>
	        <option value="6">6</option>
	        <option value="12">12</option>
	        <option value="20">20</option>
            </select>
        </div>
        <div class="button">
        <button type="submit">Roll</button>
        </div>
    </form>
<?php

    // déclaration des variables
    $number = $_POST["dice"];
    $faceNumber = $_POST["face"];

    // Boucle du lancé de dé 
    for ($dice = 1; $dice <= $number; $dice++) {
        // valeur random
        $diceValues = rand(1, $faceNumber);
        // Total cumulé
        $total +=$diceValues;
        // Print des valeurs de dés
        echo $diceValues;
        echo "<br>";
    }

    // Print des dés lancés
    echo "Dice(s) rolled: $number <br>";
    // Print du nombre de faces 
    echo "Number(s) of face(s): $faceNumber <br>";
    // Print du total de la valeur des dés
    echo "Total value: $total<br> <br> ";

?>
</section>
</body>
</html>
