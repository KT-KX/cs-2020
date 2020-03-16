<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail template
require('header.php');
$guest2=$_POST['ic_pelanggan'];
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
<h2>Maklukmat Pelanggan</h2>
<table witdh="800" border="1" align="center">
    <tr>
        <td width="20"><b>NOMBOR</b></td>
        <td width="200"><b>NAMA</b></td>
        <td width="50"><b>NO. TELEFON</b></td>
        <td width="100"><b>Tindak</b></td>
    </tr>

<?php
$found="SELECT* FROM pelanggan WHERE ic_pelanggan like '%$guest2%'";
$result= mysqli_query($samb,$found);
$no=1;
while ($data=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $data=['nama'];?> </td>
        <td><?php echo $data['no_telefon'];?></td>
        <td><a href="booking_form.php?id_pelanggan=<?php echo $data['ic_pelanggan'];?>">TEMPAH</a>
    </tr>

    <?php
    $no++;
}
?>
</table>
<a href ="index2.php"> KE MAIN UTAMA</a><br>
</center>
<?php require('footer.php');?>                        
</body>
</html>