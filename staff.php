<?php
require('config.php');
require('header.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<h2>JADUAL PEKERJA</h2>
<table width="800" border="1" align="center">
    <tr>
        <td colspan="5" valign="middle" align="right"><b>
        <a href="staff_add.php">[+] REGISTER PEKERJA BARU</a></b></td>
    </tr>

    <tr>
        <td width="40"><b>NO.</b></td>
        <td width="300"><b>NAMA PEKERJA</b></td>
        <td width="100"><b>NAMA PENGGUNA</b></td>
        <td width="50"><b>PASSWORD</b></td>
        <td width="150"><b>TINDAKAN</b></td>
    </tr>
<?php
    $data1=mysqli_query($samb,"SELECT * FROM pekerja");
        $no=1;
    while($info1=mysqli_fetch_array($data1))
    {
?>

    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $info1['nama_pekerja'];?></td>
        <td><?php echo $info1['id_pekerja'];?></td>
        <td><?php echo $info1['kata_laluan'];?></td>
        <td><a href="staff_update.php?staffid=<?php echo $info1['id_pekerja'];?>">KEMAS KINI</a> |
        <?php
        if ($info1['tahap']!="ADMIN")
        {
        ?>
        <a href="staff_delete.php?staffid=<?php echo $info1['id_pekerja'];?>">DELETE</a>
        <?php
        }
        ?>
        </td>
        </tr>
        <?php $no++;}?>
        </table>
        <a href="index2.php">MAIN MENU</a><br>
        </center>

        
    
</body>
</html>