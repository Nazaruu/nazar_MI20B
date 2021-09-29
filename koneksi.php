<?php
$username = "root";
$pasword = "";
$db = "persuratan_nazar";

$con=mysqli_connect('localhost',$username,$pasword,$db);
if($con->connect_error){
    echo "koneks anda gagal : ". mysqli_connect_error());
}
else{
    echo "Koneksi berhasil";

}
?>