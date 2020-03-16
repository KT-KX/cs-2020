<?php
if(!(isset($_SESSION['id_pekerja'])))
{
session_destroy();
header("location:index.php");
}
?>