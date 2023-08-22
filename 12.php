<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="#">
    <table>
      <tr>
        <td>hh</td>
        <td><input type="number" name="hh" min="0" max="23"></td>
      </tr>
      <tr>
        <td>mm</td>
        <td><input type="number" name="mm" min="0" max="59"></td>
      </tr>
      <tr>
        <td>ss</td>
        <td><input type="number" name="ss" min="0" max="59"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
      </tr>
    </table>
  </form>


    <?php
  if (isset($_POST['submit'])) {
    $hh = intval($_POST['hh']);
    $mm = intval($_POST['mm']);
    $ss = intval($_POST['ss']);

    $ss += 1;
    if ($ss >= 60) {
      $ss = 0;
      $mm += 1;
      if ($mm >= 60) {
        $mm = 0;
        $hh += 1;
        if ($hh >= 24) {
          $hh = 0;
        }
      }
    }

    echo "<div class='result'>Waktu setelah ditambah 1 detik: " . sprintf("%02d:%02d:%02d", $hh, $mm, $ss . "</div>");
  }
  ?>
 <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      border: 0;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    input[type="number"] {
      width: 60px;
      padding: 5px;
      border: 1px solid #ddd;
      border-radius: 3px;
    }

    input[type="submit"] {
      background-color:#2ecc71;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #2CC06B;
    }

    .result {
      margin-top: 10px;
    }

    </style>

</body>
</html>