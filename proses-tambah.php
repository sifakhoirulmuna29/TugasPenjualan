<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];

    $sql = "INSERT INTO barang(nama, stok, harga) VALUES N('$nama', '$stok', $harga')";
    $query = mysqli_query($sd, $sql);

    if($squery){
       header('Location:barang.php?status=sukses');
    }else{
        header('Location:barang.php?status=gagal'); 
    }}
    ?>