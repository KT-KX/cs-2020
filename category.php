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
<h2> Jenis dan Harga</h2>
<table width="700" border="1" align="center">
    <tr>
        <td colspan="8" valign="middle" align="right"><b>
        <a href="catergory_add.php">[+] Tambah Jenis Bilik Baru</a></b><td>
    </tr>

    <tr>
        <td width="20"><b>NOMBOR</b></td>
        <td width="200"><b> Jenis</b></td>
        <td width="70>"><b>Harga</b></td>
        <td width="150"><b>Tindak</b></td>
    </tr>
<?php
$data1=mysqli_query($samb,"SELECT* FROM jenis ORDER By harga ASC");
$no=1;
    while($info1=mysqli_fetch_array($data1)){
?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $info1['jenis'];?></td>
        <td>RM<?php echo $info1['harga'];?></td>
        <td><a href="category_update.php?idcat=<?php echo $info1['idcat'];?>">HAPUS</a></td>
    </tr>
    <?php $no++;
    }
    ?>
</table><br/>
<a href="room.php">Jadual Bilik</a><br>
</center><br/><br/>
<?php require('footer.php');?>
</body>
</html>