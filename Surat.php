<?php

$today = date("j-F-Y ");
$kota = "Tasikmalaya";
$instasi = array("LP3I,Tasikmalaya,08XXXXXXX");
$perihal = "perihal : Peminjaman barang";
$yth = "Yth. Bapak ML Bang-Bang";
$isi="Dalam rangka kegiatan ………………….………………………………………………….,<br> kami BEM / DPM / UKM / HIMA / Musholla  mengajukan permohonan peminjaman barang <br>di FISIP Unmul.";
$tgl= "<br><br>Hari / Tanggal 	:  Sabtu / 22 September 2021<br>
Pukul			:  07.30 s/d 18.00 WITA (Daftar Barang terlampir)<br>
";
$penutup="<br>Demikian permohonan ini disampaikan, atas perhatian dan bantuannya diucapkan terima<br>kasih.";
$nazar="<br><br><br><br>Nazar Ruhimat";
?>
<!DOCTYPE html>
<html>
<head>
    <title>WEEK 2 - Nazaru</title>
</head>
<body>
 <h2>SURAT PEMINJAMAN BARANG</h2>
    <?php
        echo $today. "<br><br>";
        echo $kota ."<br>";
        echo $instasi[0]. "<br>";
        echo $perihal. "<br><br><br>";
        echo $yth. "<br><br>";
        echo $isi. "<br>";
        echo $tgl. "<br>";
        echo $tgl. "<br>";
        echo $nazar. "<br>";


       
    ?>
</body>
</html>