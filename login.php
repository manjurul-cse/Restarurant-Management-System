<?php
session_start();
include("connect.php");

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM users WHERE restaurant_name='".$username."' AND password='".$password."' LIMIT 1";
	$res=mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($res)==1){
		$row=mysql_fetch_array($res);
		$_SESSION['uid']=$row['id'];
		$_SESSION['username']=$row['username'];
		header('Location:'.$_SERVER['HTTP_REFERER']);
		exit();
	}else{
		echo("Invalid ID & Password");
		header('Location:'.$_SERVER['HTTP_REFERER']);
		exit();
	}
	
}
?>