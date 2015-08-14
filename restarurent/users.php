<?php 

mysql_connect("localhost", "root", "")or die(mysql_error());
mysql_select_db("restaurent")or die(mysql_error());

$userPart = mysql_real_escape_string(addslashes($_POST['userPart']));
$result = mysql_query("SELECT product_name FROM Fast_food WHERE product_name LIKE '%".$userPart."%'  or 	restaurent_name LIKE '%".$userPart."%' ")or die (mysql_error());

while ($row = mysql_fetch_assoc($result)) {
	echo "<div id='link' onClick='addText(\"".$row['product_name']."\");'>" .$row['product_name'] or $row['	restaurent_name']  ."</div>";	
}

?>