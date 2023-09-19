<!DOCTYPE html>
<html>
<head>
    <title>Membuat Login Multi user Level Dengan PHP dan MySQLi - www.malangoding.com</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

<h1>Membuat Login Multi User Level Dengan PHP dan MySQL <br/> www.malangoding.com</h1>

<?php 
if(isset($_GET ['pesan'])){ 
    if($_GET['pesan'=="gagal"){
        echo "<div class-'alert' username dan Password tidak sesuai !</div>";
    }
}
?>
<div class="kotak_login">
      <p class="tulisan_login">Silahkan login</p>

      <form action="cek_login.php" method="post">
          <label>username</label>
          <input type="text" name="username" class="form_login" placeholder="Username .."required="required">

<label>Password</label>
<input type="password" name="password" class="form_login" placeholder="Password .." required="requir

<input type="submit" class="tombol_login" value="LOGIN">

<br/>
<br/>
<center> 
    <a class="link" href="https://www.malasngoding.com">kembali</a>
    </center>
</form>
 

</div>


</body>
</html>
