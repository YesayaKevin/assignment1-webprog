<?php

include('../connect.php');

$kode_matkul = $_REQUEST['kode_matkul'];
$nama_matkul = $_REQUEST['nama_matkul'];
$jam_matkul = $_REQUEST['jam_matkul'];
$ruang_kelas = $_REQUEST['ruang_kelas'];

$query = "INSERT INTO mata_kuliah VALUES ('$kode_matkul', '$nama_matkul', '$jam_matkul', '$ruang_kelas')";

if (mysqli_query($conf, $query)){
    echo "<h3>The data is successfully inserted</h3>";
    echo nl2br("$kode_matkul <br>$nama_matkul <br>$jam_matkul <br>$ruang_kelas"); // nlbr = new line 2 break lines.
    header('Location: ../index.php');
} else {
    mysqli_error($conf);
}

mysqli_close($conf);
?>