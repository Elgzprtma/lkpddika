
<?php

$a;
$b;
$c;

?>




<!DOCTYPE html>
<html>
<head>
    <title>Form Input Angka dengan Tabel</title>
</head>
<body>

<h2>Form Input Angka dengan Tabel</h2>

<form method="post" action="">
    <table>
        <tr>
            <td>Masukkan angka 1:</td>
            <td><input type="number" name="a" required></td>
        </tr>
        <tr>
            <td>Masukkan angka 2:</td>
            <td><input type="number" name="b" required></td>
        </tr>
        <tr>
            <td>Masukkan angka 3:</td>
            <td><input type="number" name="c" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a > $b && $a > $c) {
        echo $a;
    }
    elseif ($b > $c && $b > $a) {
        echo $b;
    }
    elseif ($c > $a && $c > $b) {
        echo $c;
    }
    elseif ($a == $b && $a > $c) {
        echo "a dan b sama besar";
    }
    elseif ($a == $c && $a > $b) {
        echo " a dan c sama besar";
    }
    elseif ($b == $c && $b > $a) {
        echo " b dan c sama besar ";
    }
    else{
        echo "sama besar";
    }
}

?>

</body>
</html>
