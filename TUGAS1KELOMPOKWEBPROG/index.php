<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    <!-- Insert Section -->
    <center id="insert_section" style="display: block">
    <h1>Mata Kuliah [INSERT]</h1>
    <form action="./controller/insert.php" method="post">
        Kode Matkul: <input required type="text" name="kode_matkul"><br>
        Nama Matkul: <input required type="text" name="nama_matkul"><br>
        Jam Matkul: <input required type="text" name="jam_matkul"><br>
        Ruang Kelas: <input required type="text" name="ruang_kelas"><br>
        <input type="submit">
    </form>
    <!-- DISINI -->
    <br><br>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Kode Matkul </th>
        <th>Nama Matkul </th>
        <th>Jam Matkul</th>
        <th>Ruang Kelas</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "./connect.php";

    $no=1;
    $getData = mysqli_query($conf,"SELECT * from mata_kuliah");
    while($tampil = mysqli_fetch_array($getData)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[kode_matkul]</td>
            <td>$tampil[nama_matkul]</td>
            <td>$tampil[jam_matkul]</td>
            <td>$tampil[ruang_kelas]</td>
            <td><a href='./controller/update.php?kode=$tampil[kode_matkul]'> Update </a></td>
            <td><a href='./controller/delete.php?kode=$tampil[kode_matkul]'> Delete </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>
    </center>
</body>
</html>

