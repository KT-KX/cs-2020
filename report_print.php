<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Report</title>
</head>
<body>
<table width ="711" border="0">
    <td><p><strong>Monthly Report</strong></p>
<table width="1000" border="1" align="center">
    <tr>
        <td colspan="9">
            MONTHLY REPORT:<?php echo $hotelname;?><br>
                <div align="right" class="style15">Date Print :<?php echo date("d/m/Y") ;?> </div>
        </td>
    </tr>
    <tr>
        <td width="30"><b>Num.</b></td>
        <td width="100"><b>Room Num.</b></td>
        <td width="120"><b>Tarikh Masuk</b></td>
        <td width="120"><b>Tarikh Keluar</b></td>
        <td width="100"><b>Hari</b></td>
        <td width="200"><b>Nama Pelanggan</b></td>
        <td width="100"><b>No.telefon</b></td>
        <td width="180"><b>Harga</b></td>
        <td width="180"><b>Jumlah</b></td>
    </tr>
    <?php
        $no=1;
        $no_bilik=$_POST["no_bilik"];
        $bulan=$_POST["bulan"];
        $tahun=$_POST["tahun"];

        if($no_bilik=="-"&&$bulan=="-"&&$tahun=="-"){
            $data1=mysqli_query($samb,"SELECT *FROM tempahan ORDER BY id_bilik,tarikh_masuk");
        }
        elseif($no_bilik!="-"&&$bulan=="-"&&$tahun=="-"){
            $data1=mysqli_query($samb,"SELECT* FROM tempahan WHERE id_bilik='$no_bilik' ORDER BY id_bilik,tarikh_masuk");
        }elseif($no_bilik!="-"&&$bulan!="-"&&$tahun=="-"){
            $data1=mysqli_query($samb,"SELECT* FROM tempahan WHERE id_bilik='$no_bilik' and (BULAN(tarikh_masuk)='$bulan' OR BULAN(tarikh_keluar)='$bulan') ORDER BY id_bilik,tarikh_masuk");                
        }elseif($no_bilik!="-"&&$bulan!="-"&&$tahun!="-"){
            $data1=mysqli_query($samb,"SELECT* FROM tempahan WHERE id_bilik='$no_bilik' and ((BULAN(tarikh_masuk)='$bulan' OR (BULAN(tarikh_keluar)='$bulan') and TAHUN(tarikh_keluar)='$tahun)) ORDER BY id_bilik,tarikh_masuk");
        }elseif($no_bilik=="-"&&$bulan!="-"&&$tahun=="-"){
            $data1=mysqli_query($samb,"SELECT* FROM tempahan WHERE BULAN(tarikh_masuk='$bulan' OR BULAN(tarikh_keluar)='$bulan') ORDER BY id_bilik,tarikh_masuk"); 
        }elseif($no_bilik=="-"&&$bulan=="-"&&$tahun!="-"){
            $data1=mysqli_query($samb,"SELECT* FROM tempahan WHERE TAHUN(tarikh_masuk='$tahun' OR TAHUN(tarikh_keluar)='$tahun') ORDER BY id_bilik,tarikh_masuk");
        }elseif($no_bilik!="-"&&$bulan=="-"&&$tahun!="-"){
            $data1=mysqli_query($samb,"SELECT* FROM tempahan WHERE id_bilik='$id_bilik' and (TAHUN(tarikh_masuk)='$tahun' OR TAHUN(tarikh_keluar)='$tahun')ORDER BY id_bilik,tarikh_masuk");
        }

        $jumlah=0;
        $jumlah_rekod=mysqli_num_rows($data1);while ($info1=mysqli_fetch_array($data1)){
        
        $Bilik=mysqli_query($samb,"SELECT *FROM bilik WHERE id_bilik='$info1[id_bilik]'");
        $getBilik=mysqli_fetch_array($Bilik);

        $Pelanggan=mysqli_query($samb,"SELECT * FROM pelanggan WHERE ic_pelanggan='$info1[ic_pelanggan]'");
        $getPelanggan=mysqli_fetch_array($Pelanggan);

        $tarikh1=date_create($info1['tarikh_masuk']);
        $tarikh2=date_create($info1['tarikh_keluar']);
        $diff=date_diff($tarikh1,$tarikh2);
        $jumlah=$diff->format("%a");

        $Masuk=date("d/m/Y", strtotime($info1['tarikh_masuk']));
        $Keluar=date("d/m/Y",strtotime($info1['tarikh_keluar']));
        ?>

        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $getBilik['no_bilik'];?></td>
            <td><?php echo $Masuk;?></td>
            <td><?php echo $Keluar;?></td>
            <td><?php echo $diff->format("%a days");?></td>
            <td><?php echp $getPelanggan['nama'];?></td>
            <td><?php echo $getPelanggan['no_telefon'];?></td>
            <td>RM <?php echo number_format($info1['bayaran'],2);?></td>
            <td>RM <?php ehcp number_format($info1['bayaran']*$jumlah,2);
            $jumlah+=($info1['bayaran']*$jumlah);?></td>
        </tr>
            
        <?php $no++}?>
        
        <tr>
            <td colspan="8" align="right">
            JUMLAH HARGA
            </td>
            <td>RM <?php echo number_format($jumlah,2);?></td>
        </tr>
</table>
<hr/><div align="center" class="style15">*LAPORAN TAMAT* <br/> JUMLAH REKOD:<?php echo $jumlah_rekod;?></div>
<center><br><br>
<a href="index2.php">MAIN UTAMA</a><br>
<a href="javascript:window.print()">CETAK LAPORAN</a>
</center>
</body>
</html>