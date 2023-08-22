<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $students = [];
  for ($i = 1; $i <= 3; $i++) {
    $name = $_POST["name$i"];
    $math = floatval($_POST["math$i"]);
    $indonesian = floatval($_POST["indonesian$i"]);
    $english = floatval($_POST["english$i"]);
    $science = floatval($_POST["science$i"]);
    $religion = floatval($_POST["religion$i"]);
    $attendance = floatval($_POST["attendance$i"]);

    $totalScore = $math + $indonesian + $english + $science + $religion;


    if ($totalScore >= 475 && $attendance == 100) {
      $students[] = [
        'name' => $name,
        'totalScore' => $totalScore
      ];
    }
  }

  if (!empty($students)) {
    usort($students, function ($a, $b) {
      return $b['totalScore'] - $a['totalScore'];
    });

    echo "Juara Kelas: " . $students[0]['name'] . "<br>";
    echo "Total Nilai: " . $students[0]['totalScore'];
  } else {
    echo "Tidak ada siswa yang memenuhi syarat.";
  }
}
?>

<form method="post" action="">
  <?php for ($i = 1; $i <= 3; $i++) : ?>
    <h3>Siswa <?= $i ?></h3>
    <table>
      <tr>
        <td>Nama: <input type="text" name="name<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Nilai MTK: <input type="number" name="math<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Nilai Bahasa Indonesia: <input type="number" name="indonesian<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Nilai Bahasa Inggris: <input type="number" name="english<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Nilai IPA: <input type="number" name="science<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Nilai Agama: <input type="number" name="religion<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Kehadiran (%): <input type="number" name="attendance<?= $i ?>"><br></td>
      </tr>

    </table>
    <hr>
  <?php endfor; ?>
  <input type="submit" value="Cari Juara Kelas">
</form>

<style>
  input[type=text], input[type=number],
  select {
    width: 100%;
    padding: 5px 15px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
</style>