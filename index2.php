<?php
session_start();
include("security.php");
require('config.php');
require('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Menu</title>
</head>
<body>
<center><table width='70%' border=0>
<tr>
    <td><?php include("menu.php");?> </td>
</tr>
</table></center>
    
</body><br><br>
<? php require1('footer.php');?>
</html>