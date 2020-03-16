<?php
if($_SESSION['tahap']=="ADMIN")
{
?>
MAIN MENU [ADMIN]
<br>
<li><a href="room.php">BILIK</a></li>
<li><a href="staff.php">PEKERJA</a></li>
<li><a href="import_staff.php">IMPORT PEKERJA BARU</a></li>
<li><a href="booking.php">PENEMPAHAN</a></li>
<li><a href="booking_list.php">PENEMPAHAN JADUAL</a></li>
<li><a href="report.php">LAPORAN</a></li>
<li><a href="signout.php">LOG KELUAR</a></li>
<?php
}
else
{
?>
MAIN MENU[pekerja]
<br>
<li><a href="booking.php">PENEMPAHAN</a></li>
<li><a href="booking_list.php">PENEMPAHAN JADUAL</a></li>
<li><a href="signout.php">LOG KELUAR</a></li>
<?php
}
?>