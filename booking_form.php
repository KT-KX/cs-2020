<?php
require('config.php');
require('header.php');
session_start();
$penjual=$_SESSION['id_pekerja'];
$pelanngan=$_GET['id_pelanggan'];
$result=mysqli_query($samb,"SELECT*FROM pelanggan WHERE ic_pelanggan='$pelanggan'")
while($res=mysqli_fetch_array($result)){
    $nama=$res['nama_pelanggan'];
    $ic=$res['ic_pelanggan'];
    $hp=$res['no_telefon'];
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
<form method="POST" action="booking_enter.php">
<table width="800" border="1" align="center">
    <tr>
        <td colspan="2" align="center">Maklumat Pelanggan</td>
    </tr>
    
    <tr>
        <td width="200" > IC Pelanggan:</td>
        <td width="400"><input readonly type="text" name="ic_num" value="<?php echo $ic;?>"></td>
    </tr>

    <tr>
        <td >Nama Pelanggan:</td>
        <td><input size="60" readonly type="text" nama="nama" value="<?php echo $nama;?>"></td>
    </tr>

    <tr>
        <td>NO. Telefon Pelanggan:</td>
        <td><input readonly type="text" name="no_telefon" value="<?php echo $hp;?>"></td>
    </tr>

    <tr>
        <td colspan="2" align="center">TEMPAH SEKSYEN</td>
    </tr>

    </tr> 
        <td> Bilik:</td>
        <td><select name="id_bilik">
        <?php
        $databilik=mysqli_query($samb,"SELECT* FROM bilik");
        while($infobilik=mysqli_fetch_array($databilik)){
            echo "<option hidden selected>--Pilih Bilik--</option>";
            echo "<option value='$infobilik[id_bilik]'> $infobilik[no_bilik]</option>"
        }    
        ?>
        </select></td>

    <tr>
        <td>Tarikh Masuk:</td>
        <td><input type="date" name="tarikh_masuk"></td>
    </tr>

    <tr>
        <td>Tarikh Keluar:</td>
        <td><input type="date" name="tarikh_keluar"></td>
        <input hidden type="text" name="pekerja" value="<?php echo $penjual;?>">
    </tr>

    <tr>
        <td colspan="2" align="center">
        <button type="submit">TEMPAH</button>
        <butoon type="reset">RESET</button></td>
    </tr>

    <tr>
        <td colspan="2" align="center">
        <a href="index2.php">MAIN UTAMA</a></td>
    </tr>
</table>
</form>

</body>
</html>