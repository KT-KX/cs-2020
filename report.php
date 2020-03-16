<?php
require('config.php');
require('header.php');
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
<table width="711" border="0">
    <td><p><strong>Paparan Laporan Bulanan</strong></p>
        <form name="form1" method="post" action="report_print.php">
            <table width="600" border="1">
              <tr>
                <td width="200">Nombor Bilik</td>
                <td width="31">:</td>
                <td width="429"><label for="select"></label>
                    <select name="no.bilik">
<?php 
$bilik=mysqli_query($samb,"SELECT *FROM bilik");
echo"<option>-</option>";
while($getbilik=mysqli_fetch_array($bilik)){
    echo"<option value='$getbilik[id_bilik]'>$getbilik[no_bilik]</option>";
}
?>
</select></td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td>:</td>
                            <td><select name="bulan" id="bulan">
                                <option value="-">-</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mac</option>
                                <option value="4">Apr</option>
                                <option value="5">Mei</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Ogos</option>
                                <option value="9">Sept</option>
                                <option value="10">Okt</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td>:</td>
                            <td><select name="tahun" id="tahun">
                                <option value="-">-</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="submit" name="button" id="button" value="Cetak">
                            </td>
                        </tr>
                    </table>
                    </form>
                <p>&nbsp;</p>
                <hr /><div align="center" class="style15"></div>
                <center> <br><br>
                    <a href="index2.php">Main Utama</a><br>
                </center>
                </center>
    
</body>
</html>