<?php
require('config.php');
require('header.php');
if(isset($_POST['id_pekerja']))
{
    $idpekerja=$_POST['id_pekerja'];
    $nama_pekerja=$_POST['nama_pekerja'];
    $kata_laluan=$_POST['kata_laluan'];
    $result=mysqli_query($samb,"INSERT INTO pekerja(salesperson,nama_pekerja,kata_laluan,level)values('$id_pekerja','$nama_pekerja','kata_laluan','pekerja')");
    echo"<script>alert('PEKERJA BARU DITAMBAH BERJAYA!'); window.location='staff.php</script>";
}
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
<h2>REGISTER PEKERJA BARU</h2>
<form  name="form1" action="staff_add.php" method="POST">
<table width="700" border="1" align="center">
    <tr>
        <td width="200">NAMA PEKERJA:</td>
        <td width="300"><input type="text" name="nama_pekerja" size=60 id="nama_pekerja" placeholder="LEE AH PEK" required autofocus/></td>
    </tr>

    <tr>
        <td width="200">NAMA ACCOUNT:</td>
        <td width="300"><input type="text" name="id_pekerja" size=30 id="id_pekerja" placeholder="SUPAMAN4896" required /></td>
    </tr>

    <tr>
        <td width="200">KATA LALUAN:</td>
        <td width="300"><input type="text" name="kata_laluan" id="kata_laluan" placeholder="5201314" required /></td>
    </tr>
</table>
<input type="submit" name="update" id="submit" value="TAMBAH PEKERJA BARU"/>
</form>
<a href="staff.php">JADUAL PEKERJA</a><br>
</center>
</body>
<?php require('footer.php');?>
</html>