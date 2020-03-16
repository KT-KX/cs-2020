  
<?php
require('config.php');
require('header.php');
if(isset($_POST['update'])){
    $id_bilik = $_POST['id_bilik'];
    $id_type = $_POST['id_type'];
    $nama_bilik = $_POST['nama_bilik'];
    //kemaskini dengan  rekod baru
    $result = mysqli_query($samb,
    "UPDATE bilik SET no_bilik='$no_bilik',idcat='$id_type' WHERE id_bilik=$id_bilik");
    echo"<script>alert('Kemaskini rekod telah berjaya');
    window.location='room.php'</script>";
}
?>
<?php
//get id from URL
$id_bilik =$_GET['id_bilik'];
//show result
$result = mysqli_query($samb, "SELECT * FROM bilik WHERE id_bilik=$id_bilik");
while($res = mysqli_fetch_array($result)){
    $bilik = $res['no_bilik'];
    $cat = $res['idcat'];
}
$dataCat=mysqli_query($samb,"SELECT *FROM jenis WHERE idcat= '$cat'");
$infoCat=mysqli_fetch_array($dataCat);

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
<h2>KEMAS KINI BILIK DAN JENIS</h2>
    <form name="form1" action="room_delete.php" methos="POST">
    <table width="600" border="0" align="center">\
        <tr> 
            <td width="200"><b>Nombor Bilik</b></td>
            <td ><b>
            <input size= "15" type="text" name="nama_bilik" id="nama_bilik" value="<?php echo $room ;?>" /></td>
        <tr>

        <tr>
            <td width="200"><b>Jenis Bilik</b></td>
            <td><b><select name="id_jenis">
            <option selected  value="<?php echo $res['idcat'];?>">
            <?php echo $infoCat['jenis'];?> </option>
            <?php $data2=mysqli_query($samb,"SELECT *FROM jenis WHERE idcat<> '$res[idcat]'");
            while($info2=mysqli_fetch_array($data2))
            {
            echo"<option value='$info2[idcat]'> $info2[jenis]</option>";
            }
            ?>
            </td>

            <td><font size="2" color="#ff0000"><a href="category.php">
            *Kemas Kini Jenis Bilik</a></font></td>
        </tr>
    </table>
    <input type="hidden" name= "id_bilik" value= <?php echo $_GET['id_bilik'];?>>
    <input type="submit" name="kemas_kini" id="submit" value="Kemas Kini"/>
    </form>
    <a href="room.php">Jadual Bilik </a><br>
</center>            
</body>
</html>