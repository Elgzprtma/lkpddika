

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


    <h1>Pemisahan Angka</h1>
    <form method="post">
        Masukkan bilangan: <input type="number" name="bilangan">
        <input type="submit" name="submit" value="Proses">
    </form>
    
    <?php

   
    if (isset($_POST['submit'])) {

        $input = $_POST['bilangan'];

        // Memisahkan angka-angka dalam bilangan
        $satuan = $input % 10;
        $puluhan = ($input %100) - $satuan;
        $ratusan = ($input % 1000) - $puluhan - $satuan;
        


        echo "<h2>Hasil Pemisahan Angka:</h2>";
        echo "Angka satuan: " . $satuan . "<br>";
        echo "Angka puluhan: " . $puluhan . "<br>";
        echo "Angka ratusan: " . $ratusan . "<br>";
    }
    ?>
</body>
</html>
