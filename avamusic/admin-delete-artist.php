<?php
include "database.php";
$singer_id=$_GET["singer-id"];
$db->query("DELETE FROM singers WHERE id =$singer_id");
header("location:singers-admin.php");
?>
