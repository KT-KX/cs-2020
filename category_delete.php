<?php
require('config.php');
$idcat=$_GET['idcat'];
$result=mysqli_query($samb, "DELETE FROM jenis WHERE idcat='$idcat'");
echo "<script>alert('Rekod dihapus');
window.location='catergory.php'</script>";
?>