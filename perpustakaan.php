<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>
    <form action="perpustakaan.php" method="GET">
        <h2>Data Anggota</h2>
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="inputId"></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="inputNama"></td>
            </tr>
        </table>
        <h2>Data Peminjaman</h2>
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="inputId1"></td>
            </tr>
            <tr>
                <td>Tanggal Pinjam:</td>
                <td><input type="date" name="tglPinjam"></td>
            </tr>
            <tr>
                <td>ID Buku:</td>
                <td><input type="text" name="idBuku"></td>
            </tr>
            <tr>
                <td>Tanggal Pengembalian:</td>
                <td><input type="date" name="tglPengembalian"></td>
            </tr>
            <tr>
                <td>ID Petugas:</td>
                <td><input type="text" name="idPetugas"></td>
            </tr>
        </table>
        <input type="submit" name="btnSubmit">
    </form>
    <br>
</body>
</html>

<?php 

include "ClassPerpustakaan.php";

if($_GET){
    $id = $_GET['inputId'];
    $id1 = $_GET['inputId1'];
    $nama = $_GET['inputNama'];
    $tglPinjam = $_GET['tglPinjam'];
    $idBuku = $_GET['idBuku'];
    $tglPengembalian = $_GET['tglPengembalian'];
    $idPetugas = $_GET['idPetugas'];


    $obj_anggota->insertData($id, $nama);
    echo $obj_anggota->readData();
    echo "<br>";

    $obj_PinjamBuku->insertData($id1, $tglPinjam,$idBuku, $tglPengembalian, $idPetugas );
    echo $obj_PinjamBuku->readData();
    echo "<br>";

}

?>