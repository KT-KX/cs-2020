<?php
require('config.php');
require('header.php');
if(isset($_POST['no_bilik'])) {
    $no_bilik=$_POST['no_bilik'];
    $idcat=$_POST['idcat'];
    //add record to table
    $result = mysqli_query($samb, "INSERT INTO bilik (no_bilik,idcat) VALUES ('$no_bilik','$idcat')");
    echo "<script>alert('Penambahan rekod bilik telah dibuat');
    window.location='bilik.php'</script>";
}
?>
<html>
<center>
<body>
    <h2>Tambah Bilik Baru</h2>
    <form name="form1" action="room_add.php" method="POST">
    <table width ="900" border="0" align="center">
    <tr>
        <td width="100">NOMBOR BILIK </td>
        <td width="300"><input size="20" type ="text" name="no_bilik" id="no_bilik" required/><td>
    </tr>

    <tr>
        <td width="100">JENIS BILIK</td>
        <td width="300">
        <select name ="idcat">
        <?php
        $dataCat=mysqli_query($samb,"SELECT *FROM jenis");
        while ($infoCat=mysqli_fetch_array($dataCat))
        {
            echo "<option hidden selected>--PILIH JENIS BILIK--</option>"; 
            echo "<option value=$infoCat[idcat]'?$infoCat[jenis]</option>";
        }
        ?>
        </select>
        </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="add" value="Tambah Bilik"/>
            </td>
        </tr>
    </table>
    </form>
    <a href ="room.php">JADUAL BILIK</a><br>

</center>
</html>