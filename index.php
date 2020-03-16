<?php
//menghubungkan kepada pangkalan data
require('config.php');
//recall header file
require('header.php');
//Login(mula)
session_start();
//get post value
if(isset($_POST['id_pekerja'])) {
    //pass post value to variable
    $pekerja =$_POST['id_pekerja'];
    $kata_laluan=$_POST['kata_laluan'];
    // exe the sql statement
    $query=mysqli_query($samb,"SELECT* FROM pekerja WHERE id_pekerja ='$pekerja' AND kata_laluan='$kata_laluan'");
    $row=mysqli_fetch_assoc($query);

if (mysqli_num_rows($query)==0||$row['kata_laluan']!=$kata_laluan)
    {
        //msg if fail to login
        echo"<script>alert('ID PEKERJA ATAU KATA LALUAN SALAH'); window.location='index.php'</script>";
    }
    else{
        $_SESSION['id_pekerja']=$row['id_pekerja'];
        $_SESSION['tahap']=$row['tahap'];
        //create variable for login session
        $pekerja=$_SESSION['id_pekerja'];
        //open main menu
        header("Location:index2.php");
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href ="index.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<table width='70%' border=0>
<tr>
    <td width="400"><FONT SIZE="+2"><U>PEKERJA SAHAJA</U></td>
</tr>
    <td>
<form method="POST">
<p>PEKERJA</P>
<label>id_pekerja</label><br>
<input type="text" name="id_pekerja" placeholder="ID PEKERJA" required><br>
<label>kata_laluan</label><br>
<input type="text" name="kata_laluan" placeholder="KATA LALUAN" required><br>
<button type="submit">LOGIN</button><br>

</td>
<td width="400"><font size="6" face="Georgia,Arial" color="maroon">"Hotel Yang Cantik"
</td>
</tr>
</form>
</table></center>
</body><br><br>
<?php require('footer.php');?>
</html>