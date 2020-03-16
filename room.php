<?php
require('config.php');
require('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<h2>Senarai Bilik</h2>
<table width="811" border="1" align="center">
    <tr>
        <td colspan="5" valign="middle" align="right"><b>
        <a href="room_add.php">[+] Tambah Bilik</a></b></td>
</tr>
<tr>
    <td width="40"><b>NO.</b></td>
    <td width="150"><b>NO.BIlIK</b></td>
    <td width="200"><b>Jenis Bilik</b></td>
    <td width="150"><b>Harga BILIK</b></td>
    <td width="150"><b>Tindakan</b></td>
</tr>
<?php
$data1=mysqli_query($samb,"SELECT * FROM bilik ORDER BY no_bilik ASC");
$no=1;
while ($info1=mysqli_fetch_array($data1))
{
$dataCat=mysqli_query($samb,"SELECT * FROM jenis_bilik WHERE idcat='$info1[idcat]'");
$infoCat=mysqli_fetch_array($dataCat);
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $info1['nama_bilik']; ?></td>
        <td><?php echo $info1['jenis_bilik']; ?></td>
        <td>RM <?php echo $infoCat['harga_bilik']; ?></td>
        <td><a href="room update.php?id_bilik=
        <?php echo $info1['id_bilik'];?>">Kemaskini</a> |
        <a href="room_delete.php?id_bilik=
        <?php echo $info1['id_bilik'];?>">Hapus</a>
</td>
</tr>
<?php $no++; } ?>
</table>
</fieldset>
<a href="index2.php">Ke Menu Utama</a><br>
</center>
</body>
</html>