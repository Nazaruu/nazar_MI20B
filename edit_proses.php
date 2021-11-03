
<?php
require_once('connection.php');

if (isset($_POST['submit'])) {
    $no = $_GET['no_billing'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $lama_peminjaman = $_POST['lama_peminjaman'];
    $jaminan = $_POST['jaminan'];
    $harga = $_POST['lama_peminjaman']*50000;


    $update_sql = "UPDATE tbl_rentalps SET 
    nama_penyewa='$nama_penyewa', alamat='$alamat', tanggal='$tanggal', lama_peminjaman='$lama_peminjaman', jaminan='$jaminan',harga='$harga' 
    WHERE no_billing='$no'";
    $update = $con->query($update_sql);

    if ($update) {
        header('location:view.php?pesan=update');
    } else {
        header('location:view.php?pesan=update');
    }
}

?>