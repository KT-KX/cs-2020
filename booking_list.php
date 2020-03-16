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
<table width="800" border="0">
    <td><p><h2>Jadual Tempahan</h2></p></td>

<table width="1000" border="1" align="center">
    <tr>
        <td width="30"><b>NO.</b></td>
        <td width="100"><b>Pekerja</b></td>
        <td width="100"><b>No.Bilik</b></td>
        <td width="120"><b>Tarikh Masuk</b></td>
        <td width="120"><b>Tarikh Keluar</b></td>
        <td width="100"><b>Hari</b></td>
        <td width="200"><b>Nama Pelanggan</b></td>
        <td width="100"><b>NO.Telefon</b></td>
        <td width="180"><b>Harga</b></td>
        <td width="180"><b>Jumlah</b></td>
    </tr>

<?php
$no=1;
$dataTempahan=mysqli_query($samb,"SELECT *FROM tempahan ORDER BY tarikh_masuk DESC");
$jumlah=0;
while ($Tempahan=mysqli_fetch_array($dataTempahan)){
    $dataBilik=mysqli_query($samb,"SELECT *FROM bilik WHERE id_bilik='$Tempahan[id_bilik]'");
    $Bilik=mysqli_fetch_array($dataBilik);

    $dataCat=mysqli_query($samb,"SELECT*FROM jenis WHERE idcat='$Bilik[idcat]'");
    $Cat=mysqli_fetch_array($dataCat);

    $dataPelanggan=mysqli_query($samb,"SELECT*FROM pelanggan WHERE ic_pelanggan='$Tempahan[ic_pelanggan]'");
    $Pelanggan=mysqli_fetch_array($dataPelanggan);

    $tarikh1=date_create($Tempahan['tarikh_masuk']);
    $tarikh2=date_create($Tempahan['tarikh_keluar']);
    $diff=date_diff($tarikh1,$tarikh2);
    $jumlah=$diff->format("%a");

    $Masuk=date("d-m-Y",strtotime($getTempahan['tarikh_masuk']));
    $Keluar=date("d-m-Y",strtotime($getTempahan['tarikh_keluar']));
?>
    <tr>
        <td><?php ehco $no; ?></td>
        <td><?php ehco $Tempahan['id_pekerja'];?></td>
        <td><?php ehco $Bilik['no_bilik'];?></td>
        <td><?php ehco $Masuk;?></td>
        <td><?php ehco $Keluar;?></td>
        <td><?php ehco $diff->format("%a days");?></td>
        <td><?php ehco $Pelanggan['nama_pelanggan'];?></td>
        <td><?php ehco $Pelanggan['no_telefon'];?></td>
        <td>RM<?php ehco number_format($Cat['harga'],2);?></td>
        <td>RM<?php ehco number_format($Cat['harga']*$jumlah);
        $jumlahharga+=($Tempahan['bayaran']*$jumlah);?></td>
    </tr>
    <?php $no++}?>

    <tr>
        <td colspan="9" align="right">
        Jumlah Harga</td>
        <td>RM<?php echo number_format($jumlahharga,2);?></td>
    </tr>
</table>
<hr/></div align="center" class="style15">*Laporan Tamat*<br/>Jumlah Rekod:<?php echo $no-1;?></div>
<center>
<br><br>
<a href="index2.php">MAIN UTAMA</a><br>
<a href="javascript:window.print()">Lapor</a>
</center><br>
<?php require('footer.php');?>
</body>
</html>