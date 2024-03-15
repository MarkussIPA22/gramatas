<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gramatas rezervesana </title>
</head>
<body>
    <h1>Gramatas</h1>
    <form method="post">
        <label for="gramatas_nosaukums">Ievadi gramatas nosaukumu</label>
        <input type="text" id="gramatas_nosaukums" name="gramatas_nosaukums">
        <button type="submit" name="meklet">Meklet</button>
    </form>
    <?php
   
    $gramatas = array(
        "The Catcher in the Rye" => "J.D. Salinger",
        "To Kill a Mockingbird" => "Harper Lee",
        "1984" => "George Orwell",
        "Pride and Prejudice" => "Jane Austen",
        "The Great Gatsby" => "F. Scott Fitzgerald"
     
    );

    if(isset($_POST['meklet'])) {
        $gramatas_nosaukums = $_POST['gramatas_nosaukums']; // Corrected variable name
        if(array_key_exists($gramatas_nosaukums, $gramatas)) {
            $autors = $gramatas[$gramatas_nosaukums];
            echo "<p>Author of '$gramatas_nosaukums' is: $autors</p>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='gramatas_nosaukums' value='$gramatas_nosaukums'>";
            echo "<button type='submit' name='reservet'>Reservet</button>";
            echo "</form>";
        } else {
            echo "<p>Gramata nepastav.</p>";
        }
    }

    if(isset($_POST['reservet'])) {
        $gramatas_nosaukums = $_POST['gramatas_nosaukums'];
        echo "<p>Rezerveta '$gramatas_nosaukums' veiksmigi!</p>";
        // Add reservation logic here
    }
    ?>
</body>
</html>
