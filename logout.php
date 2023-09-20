<?php 
 // mengaktifkan session php
session_start();

// menghapus semua session
session_destory();

// memgalihkan halaman ke halaman login
header("location:index.php");
?>
