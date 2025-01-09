<?php
include "db.php";
$List = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($con,"UPDATE `tbltodo` SET `list`='$List' WHERE Id=$ID");
header("location:index.php");
?>