<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h1>Konversi Detik ke Jam-Menit-Detik</h1>

  

    <form method="POST" action="">
        <label for="total_detik">Masukkan total detik:</label>
        <input type="number" name="total_detik">
        <button type="submit" name="submit" value="">Konversi</button>
    </form>

    <?php if (isset($_POST['submit'])){
    
    $totaldetik = $_POST['total_detik'];

    $jam = floor($totaldetik / 3600);
    $sisadetik = $totaldetik % 3600;
    $menit = floor($sisadetik / 60);
    $detik = $sisadetik % 60;

    $formatWaktu = "";
    if ($jam > 0) {
        $formatWaktu .= $jam . " jam ";
    }
    if ($menit > 0) {
        $formatWaktu .= $menit . " menit ";
    }
    $formatWaktu .= $detik . " detik";

   
 echo $formatWaktu;
}
?>
</body>
</html>
