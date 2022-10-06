<?php
include("koneksi.php");
if(isset($_GET['id'])){
    header("Location:barang.php?");
}
    $kode=$_GET['id'];
    $sql="SELECT * FROM barang where id=$kode";
    $query = mysqli_query($db,$sql);
    $barang = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die ("Data tidak ditemukan");
    }

?>
<html>
<head>
</head>
<body>
    <h1> From Edit Barang </h1>
    <from action="proses-edit-barang.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $barang['id']?>" />
            <p>
                <label name="nama">nama barang : </label>
                <input type="text" value="<?php echo $barang['nama']?>" />
            </p>
            <p>
                <label name="stok">Stok Barang : </label>
                <input type="number" value="<?php echo $barang['stok']?>" />
            </p>
            <p>
                <label name="harga">Harga Barang : </label>
                <input type="number" value="<?php echo $barang['harga']?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
            </fieldset>
</from>
</body>
</html>
            