<?php

include('../connect.php');

// $kode_matkul = $_REQUEST['kode_matkul'];
// $nama_matkul = $_REQUEST['nama_matkul'];
// $jam_matkul = $_REQUEST['jam_matkul'];
// $ruang_kelas = $_REQUEST['ruang_kelas'];

if(isset($_GET['kode'])){
    $query = "DELETE FROM mata_kuliah WHERE kode_matkul LIKE '$_GET[kode]'";
    mysqli_query($conf, $query);
    echo "Records were deleted successfully! ";
    header('Location: ../index.php');
}else{
    echo "Error : Could not able to execute $query.".mysqli_error($conf);
}

mysqli_close($conf);
?>