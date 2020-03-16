<?php
require('config.php');
require('header.php');
$id_pekerja=$_GET['id_pekerja'];
$result=mysqli_query($samb,"SELECT* FROM pekerja WHERE id_pekerja='$id_pekerja'");
while($res=mysqli_fetch_array($result))
{
    $nama_pekerja=$_res['nama_pekerja'];
    $kata_laluan=$_res['kata_laluan'];
}
if(isset($_POST['update']))
{
    $nama_pekerja=$_POST['nama_pekerja'];
    $kata_laluan=$_POST['kata_laluan'];
    $result=mysqli_query($samb,"UPDATE pekerja SET nama_pekerja=$'nama_pekerja',kata_laluan='$kata_laluan',tahap=tahap WHERE id_pekerja='$id_pekerja'");
    echo"<script>alert('RECORD DIKEMAS KINI!'); 
    window.location='staff.php'</script>";

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
<h2>KEMAS KINI RECORD</h2>
<form method="post" enctype="multipart/form-data">
<table width ="700" border="1" align="center">
   <tr>
     <td width="200">NAMA PEKERJA:</td>
     <td width="400"><input type="text" name="nama_pekerja" id="id_pekerja" size="50"; 
     value="<?php echo $nama_pekerja;?> "AUTOFOCOUS/></td>
   </tr>

   <tr>
     <td width="200">KATA LALUAN:</td>
     <td width="400"><input type="text" name="kata_laluan" id="kata_laluan" value="<?php echo $kata_laluan;?> "/></td>
   </tr>
</table>
<p>
<input type="submit" name="update" id="submit" valu="KEMAS KINI SEKARANG"/>
</form>
<a href="staff.php">JADUAL PEKERJA</a><br>
</center>
</body><br>
<?php require('footer.php');?>
</html>
