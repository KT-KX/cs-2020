<?php
require('config.php');
$Nreceipt=$_GET('id');
$tempahan=mysqli_query($samb,"SELECT *FROM tempahan WHERE id_tempahan='$Nreceipt'");
$getTempahan=mysqli_fetch_array($tempahan);
$Bilik=mysqli_query($samb,"SELECT *FROM bilik WHERE id_bilik='$getTempahan[id_bilik]'");
$getBilik=mysqli_fetch_array($Bilik);
$Cat=mysqli_query($samb,"SELECT*FROM jenis WHERE idcat='$getBilik[idcat]'");
$getCat=mysqli_fetch_array($Cat);
$Pelanggan=mysqli_query($samb,"SELECT*FROM pelanggan WHERE ic_pelanggan='$getTempahan[ic_pelanggan]'");
$getPelanggan=mysqli_fetch_array($Pelanggan);
$Alamat=mysqli_query($samb,"SELECT* FROM alamat WHERE ic_pelanggan='$getPelanggan[ic_pelanggan]'");
$getAlamat=mysqli_fetch_array($Alamat);

$Masuk=date("d-m-Y",strtotime($getTempahan['tarikh_masuk']));
$Keluar=date("d-m-Y",strtotime($getTempahan['tarikh_keluar'])):
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESIT</title>
</head>
<body>
<table width="800" border="0">
    <tr>
        <td width="700"><table width="700" border="0">
            <tr>
                <td width="360" valign="top">
                    <span class="style1">
                        <center>
                        <u><h2>RESIT</h2></u>
                        </center><br/>
                        <?php echo $nama_hotel;?><br/>
                        <?php echo $Alamat;?><br/>
                    </span><br/>
                </td>
                <td width="23">&nbsp;</td>
                <td width ="308" valign="top"><div align="right">
                <br/>
                    Tarikh Resit: <?php echo date("d/m/Y");?><br>
                    NO. Resit: <?php echo $getTempahan['id_tempahan'];?>
                    </span></div>
                </td>
            </tr>
            <tr>
                <td colpsan="3" valign="top"><hr/></td>
            </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td><p><strong>Maklumat Pelanggan dan NO. Tempahan Bilik</strong></p>
            <table width="700" border="1" align="center">
        </td>
    </tr>

    <tr>
        <td width="300">Bilik Tempahan<br>
        NO.Bilik :<br>Jenis:</td>
        <td width="400"><?php echo $getBilik['no_bilik'];?><br>
                        <?php echo $getCat['jenis'];?><br>
                        (RM <?php echo $getCat['harga'];?>)</td>
    </tr>

    <tr>
        <td width="300">Tarikh Masuk/Keluar <br>
        Tarikh Masuk:<br>Tarikh Keluar:</td>
        <td width="400"><?php echo $Masuk;?><br>
                        <?php echo $Keluar;?></td>
    </tr>

    <tr>
        <td width="300">Nama Pelanggan</td>
        <td width="400"><?php echo $getPelanggan['nama_pelanggan'];?></td>
    </tr>

    <tr>
        <td width="300">IC pelanggan</td>
        <td width="400"><?php echo $getPelanggan['ic_pelanggan'];?></td>
    </tr>

    <tr>
        <td width="300">Alamat</td>
        <td width="400"><?php echo $getAlamat['Alamat1'];?>
                        <?php echo $getAlamat['Alamat2'];?>
                        <?php echo $getAlamat['poskod'];?>
                        <?php echo $getAlamat['bandar'];?>
                        <?php echo $getAlamat['status'];?></td>
    </tr>

    <tr>
        <td width="300">Jumlah Harga:</td>
        <td width="400">RM<?php echo $getTempahan['bayaran']?><br></td>
    </td>
    <p>
</table>
<hr /><div align="center" class="style15"></div>
<center><br>
<small>Ini merupakan buatan computer,tandatangan tidak diperlukan</small><br><br>
<a href="javascript:window.print()">Laporan</a>
<a href="index.2.php">MAIN UTAMA</a>
</center>
</body>
</html>