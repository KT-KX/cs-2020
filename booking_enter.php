<?php
require('config.php');
if(isset($_POST['ic_pelanggan1'])){
    $ic=$_POST['ic_pelanggan1'];
    $masuk=$_POST['tarikh_masuk'];
    $keluar=$_POST['tarikh_keluar'];
    $bilik=$_POST['id_bilik'];
    $id_pekerja=$_POST['id_pekerja'];

$tarikh1=date_create($masuk);
$tarikh2=date_create($keluar);
$diff=date_diff($tarikh1,$tarikh2);
$jumlah=$diff->format("%a");

    $Bilik=mysqli_query($samb,"SELECT*FROM bilik WHERE id_bilik='$bilik'");
    $getroom=mysqli_fetch_array($Bilik);

    $bayar=mysqli_fetch_array($samb,"SELECT*FROM jenis WHERE idcat='$getroom[idcat'");
    $getcat=mysqli_fetch_array($bayar);

    $Bayar=$getcat['harga'];
    $mestibayar=$jumlah*$Bayar;

    $wujud=mysqli_query($samb,"SELECT*FROM tempahan WHERE id_bilik='$bilik' 
    AND (tarikh_masuk<='$masuk' AND tarikh_keluar>'$masuk')
    OR  (tarikh_masuk<'$keluar' AND tarikh_keluar>='$keluar')
    OR  (tarikh_masuk>='$masuk' AND tarikh_keluar<'$keluar')");

    $bil_rekod=mysqli_num_rows($wujud);
    if($bil_rekod==0&&$masuk!=$keluar){
        $rekod="INSERT INTO tempahan(id_tempahan ,tarikh_masuk,tarikh_keluar,id_bilik,ic_pelanggan,bayaran,id_pekerja)
        VALUES(NULL,'$masuk','$keluar' ,'$bilik','$ic','$mestibayar','$id_pekerja')";

        $hasil=mysqli_query($samb,$rekod);

        $id_terakhir=mysqli_insert_id($samb);
        echo"<script>alert('Tempahan Berjaya!');
        window.location='booking_receipt.php?id=$id_terakhir'</script>";
    }else{
        echo"<script>alert('Tempahan Gagal');
        window.location='booking.php'</script>";
    }
}
?>