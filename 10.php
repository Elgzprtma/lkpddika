


<!DOCTYPE html>
<html>
<head>
    <title>Hitung Grade</title>
</head>
<body>
    <h2>Hitung Grade Berdasarkan Nilai</h2>
    <form method="post" action="">
        Nilai PABP: <input type="number" name="pabp"><br>
        Nilai Matematika: <input type="number" name="mtk"><br>
        Nilai DPK: <input type="number" name="dpk"><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $pabp = $_POST["pabp"];
    $mtk = $_POST["mtk"];
    $dpk = $_POST["dpk"];

  
    $rataRata = ($pabp + $mtk + $dpk) / 3;

    
    if ($rataRata >= 80 && $rataRata <= 100) {
        $grade = 'A';
    } elseif ($rataRata >= 75 && $rataRata < 80) {
        $grade = 'B';
    } elseif ($rataRata >= 65 && $rataRata < 75) {
        $grade = 'C';
    } elseif ($rataRata >= 45 && $rataRata < 65) {
        $grade = 'D';
    } elseif ($rataRata >= 0 && $rataRata < 45) {
        $grade = 'E';
    } else {
        $grade = 'Angka tidak memenuhi persyaratan';
    }

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Rata-rata nilai:" . round($rataRata) . "<br>";
        echo "Grade: $grade";
    }
    ?>
</body>
</html>
