<?php
require('config.php');
require('header.php');
if(isset($_POST['cat'])){
    mysqli_query($samb,"INSERT INTO jenis (id_jenis,jenis,harga) values(NULL,'$_POST[cat]','$_POST[rm]')");
    echo"<script>alert('Jenis Baru Ditambah!');
    window.location='category.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h2>PENAMBAHAN JENIS BARU DAN HARGA</h2>
<form method="post" enctype="multipart/form-data">
<table width="700" border="1" align="center">
    <tr> 
        <td width="200">Nama Jenis</td>
        <td width="400"><input type="text" name="cat" id="cat" placeholder="Dewasa" required AUTOFOCUS/></td>
    </tr>

    <tr>
        <td width="200">Harga</td>
        <td width="400"><input type="money" name="rm" id="rm" placeholder="188.00" size="5" required/></td>
    </tr>
<p>
</table>
    <br><br><input type="submit" name="Tambah" id="Tambah" value="Tambah Jenis" />
    </fieldset>
</form>
<a href="category.php">Jadual Harga</a><br>
</center>
</body>
</html>