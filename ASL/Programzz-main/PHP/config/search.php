<?php
include "config.php";
$search_value=$_POST["search"];
$query="SELECT * FROM `senior_citizens` WHERE CONCAT(`LastName`, `SCNum`) LIKE '%".$search_value."%' AND `Deleted` = '0'";
$result=mysqli_query($con,$query);
?>
