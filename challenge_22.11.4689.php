<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $product = $number1 * $number2;
    $quotient = $number1 / $number2;
    $remainder = $number1 % $number2;
} else {
    $name = "";
    $number1 = "";
    $number2 = "";
    $sum = "";
    $difference = "";
    $product = "";
    $quotient = "";
    $remainder = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge_22.11.4689</title>
</head>
<body>
    <h1>Test/h1>
    <h1>Masukkan nama anda</h1>

    <form method="post" action="hasil.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">

        <br>

        <label for="number1">Masukkan angka pertama 1 (1-10):</label>
        <input type="number" id="number1" name="number1" min="1" max="10" value="<?php echo $number1; ?>">

        <br>

        <label for="number2">Masukkan angka pertama 2 (1-10):</label>
        <input type="number" id="number2" name="number2" min="1" max="10" value="<?php echo $number2; ?>">

        <br>

        <br>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    
</body>
</html>
