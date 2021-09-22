<?php

$Mybiodata = array(
    "Nama = Nazar ruhimat",
    "Kelas = MI20B",
    "No = 08579XXXXXXX",
);

$Matkul = array(
    "Sumberdaya alam",
    "English",
    "Web Programing",
    "ERP",
    "NOS",
    "Java",
    "DCS",
    "Mob Programing"
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>WEEK 2 - Nazaru</title>
</head>
<body>
 <h2>BIODATA</h2>
    <?php
        echo $Mybiodata[0]; echo "<br>";
        echo $Mybiodata[1]; echo "<br>";
        echo $Mybiodata[2]; echo "<br><br>";

        echo "Matakuliah yg Saya ambil : <br>";
        echo $Matkul[0]; echo "<br>";
        echo $Matkul[1]; echo "<br>";
        echo $Matkul[2]; echo "<br>";
        echo $Matkul[3]; echo "<br>";
        echo $Matkul[4]; echo "<br>";
        echo $Matkul[5]; echo "<br>";
        echo $Matkul[6]; echo "<br>";
        echo $Matkul[7]; echo "<br>";
       
    ?>
</body>
</html>