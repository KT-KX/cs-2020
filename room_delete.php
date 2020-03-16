<?php
require('config.php');
$id_bilik = $_GET['id_bilik'];
//Hapus rekod bilik
$result = mysqli_query($samb,"DELETE FROM bilik
WHERE id_bilik='$id_bilik'");
//Papar mesej jika berjaya hapus
echo "<script>alert('Hapus Bilik Berjaya');
window.location='room.php'</script>";
?>