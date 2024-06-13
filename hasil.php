<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Perhitungan Matimatika for <?php echo $name; ?></h2>

         $Name = htmlspecialchars($_POST['Name']);
        $number1 = intval($_POST['number1']);
        $number2 = intval($_POST['number2']);
        
        if ($Name && $number1 && $number2) {
            $penjumlahan = $number1 + $number2;
            $pengurangan = $number1 - $number2;
            $perkalian = $number1 * $number2;
            $pembagian = $number1 / $number2;
            $modulus = $number1 % $number2;
            
            echo "<h2>Perhitungan Aritmatika</h2>";
            echo "Nama: $Name<br>";
            echo "$number1 + $number2 = $penjumlahan<br>";
            echo "$number1 - $number2 = $pengurangan<br>";
            echo "$number1 * $number2 = $perkalian<br>";
            echo "$number1 / $number2 = $pembagian<br>";
            echo "$number1 % $number2 = $modulus<br>";
        } else {
            echo "<p>Silakan isi semua field dengan benar.</p>";
        }
    <?php endif; ?>
