

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
    <form method="post" action="">
        <table>
            <tr>
        <td>Jam: <input type="number" name="jam" min="0"></td>
        </tr>
        <tr>
      <td>  Menit: <input type="number" name="menit" min="0" max="59"></td>
        </tr>
        <tr>
       <td> Detik: <input type="number" name="detik" min="0" max="59"></td>
        </tr>
       <td> <input type="submit" value="Submit" name="submit"></td>
        </table>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $jam = $_POST["jam"];
    $menit = $_POST["menit"];
    $detik = $_POST["detik"];

    $total_detik = ($jam * 3600) + ($menit * 60) + $detik;

    echo "Total detik:  $total_detik  detik";
}
?>