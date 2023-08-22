
<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>
</head>
<body>
    <h1>Cek Cuaca</h1>
    <form method="post">
        Masukkan temperatur dalam Fahrenheit: <input type="text" name="temperature">
        <input type="submit" name="submit" value="Cek">
    </form>
    
    <?php

if (isset($_POST['submit'])) {

$fahrenheit = $_POST['temperature'];


$celsius = ($fahrenheit - 32) * 5/9;


if ($celsius > 30) {
    $cuaca = "panas";
} elseif ($celsius < 10) {
    $cuaca = "dingin";
} else {
    $cuaca = "normal";
}
        echo "<h2>Hasil Cek Cuaca:</h2>";
        echo "Temperatur dalam Fahrenheit: " . $fahrenheit . " &#8457;<br>";
        echo "Temperatur dalam Celsius: " . round($celsius) . " &#8451;<br>";
        echo "Cuaca: " . $cuaca . "<br>";
    }
    ?>
</body>
</html>
