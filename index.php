
    <form action="index.php" method= "POST">
        <div>
            <input type="number" name="dice" id="dice"
            placeholder="Number of dice">
        </div>
        <div>
            <select name="face" id="face">
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
    $number = $_POST["dice"];
    $faceNumber = $_POST["face"];
    // $diceValue = rand(1, $faceNumber);

    echo "Dice rolled: $number <br>";
    echo "Number of faces: $faceNumber <br>";
    echo "Total: <br> <br>";

    for ($dice = 1; $dice <= $number; $dice++) {
        echo rand(1, $faceNumber);
        echo "<br>";
    }

?>