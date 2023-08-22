<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nama: <input type="text" name="nama"><br>
        Gaji Pokok: <input type="number" name="gaji"><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $gaji = $_POST['gaji'];

    $tunj = (20 * $gaji)/100;
    $pjk = (15*($gaji+$tunj))/100;
    $gajib = $gaji + $tunj - $pjk;
    $formatgajib = number_format($gajib, 2, ',', '.');
    $formatpjk = number_format($pjk, 2, ',', '.');
    $formattunj = number_format($tunj, 2, ',', '.');
    echo "<h3>Hasil Perhitungan Gaji</h3>";
    echo "Nama Karyawan: " . $nama . "<br>";
    echo "Besar Tunjangan: " . $formattunj . "<br>";
    echo "Besar Pajak: " . $formatpjk . "<br>";
    echo "Gaji Bersih: " . $formatgajib . "<br>";
}

    ?>
</body>
</html>