
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<style>
       body{
  font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

.box1{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 50px auto 0 auto;
  padding:35px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

.kode{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.btn{
  background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}
    </style>
<center>


<form method="post" action="">
<div class="box">
<h1>Pegawai</h1>

<label for="kodepegawai">Nomor Pegawai:</label>

<input type="number" name="kode" placeholder="gddmmyyyynn"  class="kode" />
  
<input type="submit" name="submit" value="Submit" class="btn">
  

  
</div> <!-- End Box -->
  
</form>




</center>
<?php

if (isset($_POST['submit'])) {

  

    $employeeCode = $_POST['kode'];
        $golongan = substr($employeeCode, 0, 1);
        $tanggal = substr($employeeCode, 1, 2);
        $month = substr($employeeCode, 3, 2);
        $bulan = substr($employeeCode, 3, 2);
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

        echo "<div class='box1'>";
        echo "<h1>Data Pegawai</h1>";
        echo "$golongan$tanggal$bulan$tahun$nomorUrut <br> <br>";
        echo "Nomor Golongan: " . $golongan . "<br>";
        echo "Tanggal Lahir: " . $tanggal . "-" . $month . "-" . $tahun . "<br>";
        echo "Nomor Urut: " . $nomorUrut;
        echo "</div>";



    }
?>


</body>
</html>