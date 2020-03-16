<?php
require('config.php');
if(isset($_POST["import"])){
    $namafail=$_FAIL["fail"]["tmp_name"];
    if($_FAIL["fail"]["size"]>0){
        $Fail=fopen($namafail,"r");
        while(($getData=fgetcsv($Fail,10000,","))!==FALSE){
            $save="INSERT INTO pekerja(id_pekerja,nama_pekerja,kata_laluan,tahap) values('".getData[0]."','".$getData[1]."','".getData[2]."','".getData[3]."')";
            $result=mysqli_query($samb,$save);
            if(!isset($result)){
                echo"<script type=\"text/javascript\">alert(\"FAIL CSV TIDAK DAPAT DIMUAT NAIK\");
                window.location=\"import_staff.php\"</script>";
            }else{
                echo"script type\"text/javascript\">alert(\"FAIL CSV BERJAYA DIMUAT NAIK\");
                window.location=\"staff.php\"</script>";
            }
        }
        fclose($Fail);
    }
}
?>