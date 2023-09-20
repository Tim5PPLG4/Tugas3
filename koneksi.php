<?php 
$koneksi =
mysqli_connect("localhost","root","",
"db_website");
 
// check connection
if (mysqli_connect_errno()){
   echo "koneksi data base gagal : " . mysql_connect_error();
}
 ?>
