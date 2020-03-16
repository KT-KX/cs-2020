<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail template
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
<form name="searchForm" method="post" action="booking_start.php">
<table width="800" border="0" align="center" cellpadding="0">
    <tr>
        <td colspan="2" align="center">
        <h2>Maklumat Pelanggan</h2></td>
    </tr>

    <tr>
        <td align="right">Cari Nombor Kad Pengenalan:</td>
        <td><input type="text" name="ic_pelanggan" autofocus></td>
    </tr>

    <tr>
        <td colspan="2" align="center"><input type="submit" name ="SUBMIT" id="SUBMIT" value="Search Now" ></td>
    </tr>

    <tr>
        <td colspan="2" align="center" > OR</td>
    </tr>

    <tr>
        <td align="right" >Daftar Pelanggan Baru</td>
        <td> <a href="guest_register.php">Daftar Sini!</a></td>
    </tr>
</table>
</form>
<a href="index2.php">MAIN MENU</a><br>
</center>
<?php require('footer.php');?>
</body>
</html>