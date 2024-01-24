<?php
include 'config.php';

// PROSES TAMBAH/EDIT/HAPUS PEMASUKAN
if (isset($_POST['pemasukan_add'])) {
    $id_pemasukan = $_POST['id_pemasukan'];
    $tanggal      = $_POST['tgl_pemasukan'];
    $produk = $_POST['produk'];
    $harga    = $_POST['harga'];
    $stok       = $_POST['stok'];

    $query = "INSERT INTO tbl_pemasukan (id_pemasukan, tgl_pemasukan, produk, harga, stok) 
    VALUES ('$id_pemasukan','$tanggal','$produk','$harga','$stok')";

    if (mysqli_query($con, $query)) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Berhasil Ditambahkan'); 
    window.location.href='pemasukan.php'</script>";
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Gagal Ditambahkan');
    window.location.href='pemasukan.php'</script>";
    }
}

if (isset($_POST['pemasukan_update'])) {
    $id_pemasukan = $_POST['id_pemasukan'];
    $tanggal      = $_POST['tgl_transaksi'];
    $produk = $_POST['produk'];
    $harga    = $_POST['harga'];
    $stok       = $_POST['stok'];

    $update = "UPDATE tbl_pemasukan SET tgl_pemasukan='$tanggal', produk='$produk', 
    harga='$harga', stok='$stok' WHERE id_pemasukan=$id_pemasukan";

    if (mysqli_query($con, $update)) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Berhasil Di Update'); 
    window.location.href='pemasukan.php'</script>";
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Gagal Di Update');
    window.location.href='pemasukan.php'</script>";
    }
}

if (isset($_GET['pemasukan_del'])) {
    $idp = $_GET['pemasukan_del'];

    $hapus = "DELETE FROM tbl_pemasukan WHERE id_pemasukan='$idp'";

    if (mysqli_query($con, $hapus)) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Berhasil Di Hapus'); 
    window.location.href='pemasukan.php'</script>";
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Gagal Di Hapus');
    window.location.href='pemasukan.php'</script>";
    }
}
// ========================================================================================================
