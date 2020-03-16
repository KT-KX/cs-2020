<?php
require('config.php');
require('header.php');
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
<h2>Tambah Pekerja<br>
---Penambahan Fail CSV---</h2>
<form action="import_process.php" method="post" name="upload_excel" enctype="multipart/form-data">
<table width="700" border="0" align="center">
    <tr>
        <td width="300">Pilih CSV/Fail Excel:</td>
        <td width="400"><input type="file" name="file" id="file" class="input-large"></td>
    </tr>

    <tr>
        <td></td>
        <td width="400"><button type="submit" id="submit" name="Import">Muat Naik</button></td>
    </tr>
</table>
</form>
<a href="index2.php">MAIN UTAMA</a>
</center>
    
</body>
</html>