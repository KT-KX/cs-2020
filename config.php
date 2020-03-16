<?php
//sambungan mysqli dengan name$samb
$samb=mysqli_connect("localhost","root","","hotel");
//semak sambungan jika gagal
if(mysqli_connect_errno()){
    echo"Gagal menyambungkan pangkalan data mysql: ".mysqli_connect_error();

    
}
//setup nama hotel
$sysname="Hotel Management system";
$hotelname="KTXING";
$moto="KT";
$logo="header.jpg"


?>