<?php
require('config.php');
$id_pekerja= $_GET['id_pekerja'];
$result=mysqli_query($samb,"DELETE FROM pekerja WHERE id_pekerja='$id_pekerja'");
    echo "<script>alert('MAKLUMAT DIHAPUSKAN');
    window.location='staff.php'</script>";
?>
