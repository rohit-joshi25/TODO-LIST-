<?php
echo $List = $_GET['list'];
include "db.php";
mysqli_query($con, "INSERT INTO `tbltodo`(`list`) VALUES ('$List')");
header( "location:index.php"); 
?>