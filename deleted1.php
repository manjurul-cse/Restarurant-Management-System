
<?php 
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2006 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$id = $_GET['id'];

$delete = "DELETE FROM contact  WHERE id = '$id' ";
mysql_query($delete);
mysql_close();
header('Location:'.$_SERVER['HTTP_REFERER']);


?>