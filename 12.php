<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <table>
            <tr>
        <td>hh: <input type="number" name="hh" min="0"></td>
        </tr>
        <tr>
      <td>  mm: <input type="number" name="mm" min="0" max="59"></td>
        </tr>
        <tr>
       <td> ss: <input type="number" name="ss" min="0" max="59"></td>
        </tr>
       <td> <input type="submit" value="Submit" name="submit"></td>
        </table>
    </form>

<?php
if (isset($_POST['submit'])){

    $mm = $_POST['mm'];
    $hh = $_POST['hh'];
    $ss = $_POST['ss'];

    $ss = $ss+1;

    if ($ss>=60) {
        $mm=$mm+1;
        $ss=00;
    } elseif ($mm>=60) {
        $hh=$hh+1;
        $mm=00;
        $ss=00;
    } elseif ($hh>=24) {
        $hh=00;
        $mm=00;
        $ss=00;
    }
    else {
        $ss=00;
    }

    echo "$hh-$mm-$ss";

   
}
?>

</body>
</html>