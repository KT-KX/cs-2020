<?php
require('config.php');
require('header.php');
$idcat=$_GET['idcat'];
$result=mysqli_query($samb,"SELECT *FROM jenis WHERE idcat='$idcat'");
while($res=mysqli_fetch_array($result)){
    $cat=$res['jenis'];
    $rm=$res['harga'];
}
if(isset($_POST['update'])){
    $cat=$_POST['cat'];
    $rm=$_POST['rm'];
    $result=mysqli_query($samb,"UPDATE jenis SET jenis='$cat',harga='$rm' WHERE idcat='$idcat'");
    echo "<script>alert('Rekod dikemaskini!');
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
<h2>Kemas Kini Jenis dan Harga</h2>
<form method='post' enctype="multipart/form-data">
<table width="700" border="0" align="center">
    <tr>
        <td width="200">Jenis</td>
        <td width="400"><input type="text" name="jenis" id="jenis" value="<?php echo $cat;?>" AUTOFOCUS/></td>
    </tr>

    <tr>
        <td width="200">Harga</td>
        <td width="400"><input type="money" name="rm" id="rm" value="<?php echo $rm;?>"/></td>
    </tr>
</table>
<p>
<input type="submit" name="update" id="submit" value="Kemas Kini"/>
</form>
<a href="category.php">Jadual Jenis</a><br>
</center>
<?php require('footer.php');?>    
</body>
</html>