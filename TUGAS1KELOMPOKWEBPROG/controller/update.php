<?php

include '../connect.php';

if(isset($_GET['kode'])){
    $sql = "UPDATE mata_kuliah SET jam_matkul = '23:59'";
    mysqli_query($conf, $sql);
    echo "Records were updated successfully! ";
    header('Location: ../index.php');
}else{
    echo "Error : Could not able to execute $query.".mysqli_error($conf);
}

mysqli_close($conf);
?>