
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="post" action="#">
    <label for="kodepegawai"> Nomor Pegawai (11 digit):</label>
    <input type="number" name="kode" placeholder="gddmmyyyynn">
    <input type="submit" name="submit" value="Submit">
</form>



<?php

if (isset($_POST['submit'])) {

  

    $employeeCode = $_POST['kode'];
        $golongan = substr($employeeCode, 0, 1);
        $tanggal = substr($employeeCode, 1, 2);
        $month = substr($employeeCode, 3, 2);
        $tahun = substr($employeeCode, 5, 4);
        $nomorUrut = substr($employeeCode, 9, 2);

       


        if ($month == 1) {
            $month = "JAN";
        } elseif ($month == 2) {
            $month = "FEB";
        } elseif ($month == 3) {
            $month = "MAR";
        } elseif ($month == 4) {
            $month = "APR";
        } elseif ($month == 5) {
            $month = "MEI";
        } elseif ($month == 6) {
            $month = "JUN";
        } elseif ($month == 7) {
            $month = "JUL";
        } elseif ($month == 8) {
            $month = "AGU";
        } elseif ($month == 9) {
            $month = "SEP";
        } elseif ($month == 10) {
            $month = "OKT";
        } elseif ($month == 11) {
            $month = "NOV";
        } else {
            $month = "DES";
        }
        echo "Nomor Golongan: " . $golongan . "<br>";
        echo "Tanggal Lahir: " . $tanggal . "-" . $month . "-" . $tahun . "<br>";
        echo "Nomor Urut: " . $nomorUrut;




    }
?>
</body>
</html>