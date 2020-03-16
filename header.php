<?php include "config.php" ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Management System</title>
</head>
<body>
<center>
<TABLE BORDER="0" cellpadding="0" cellspacing="0">
<TR>
<TD WIDTH="1000" HEIGHT="200" background="<?php echo $logo;?>" VALIGN="center" style="background-repeat:no-repeat;">
<FONT SIZE="+1" color ="black" font face="Arial">
<?php echo $sysname; ?></FONT></br>
<FONT SIZE="+4" color ="black" font face="Arial">
<?php echo $hotelname;?></FONT><br>
<FONT SIZE="+2" color ="blue" font face="Arial"><i>
<?php echo $moto;?></i></FONT>
</TD>
</P>
</TR>
</center>
</TABLE>
</body></center>
<?php include"zoom.php";?>
<?php include "color.php";?>
</html>