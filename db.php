<?php
$con = mysqli_connect("localhost","root","","hospital") or die(mysql_error());
// $con = mysqli_connect("localhost","viocenc4_sanjeevanihospital","SanjeevaniHospital@1234","viocenc4_hospital") or die(mysql_error());
if($con==false){
    dir('error : cannot connect');
}

?>