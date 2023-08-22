
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <h1>Jeruk</h1>
    <form method="post" action="">
        Masukkan berat buah jeruk (gram): <input type="text" name="berat">
        <input type="submit" name="submit" value="Hitung">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {


        $harga100gram = 500;


    $beratgram = $_POST['berat'];

    $hargablmdiskon = ($beratgram / 100) * $harga100gram;

    $diskon = 5/100 * $hargablmdiskon;

    $hargaudhdiskon = $hargablmdiskon - $diskon;


        echo "Berat Buah Jeruk: " . $beratgram . " gram<br>";
        echo "Harga Sebelum Diskon: " . $hargablmdiskon . " Rp<br>";
        echo "Diskon: " . $diskon . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . $hargaudhdiskon . " Rp";
    }
    ?>
</body>
</html>


