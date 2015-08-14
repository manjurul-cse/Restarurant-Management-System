<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php

include('connect.php');
 if (!empty ($_POST['fname'])){
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$email=$_POST['Email'];
$u_name=$_POST['uname'];
$psw=$_POST['psw'];
$cpsw=$_POST['cpsw'];
$coun=$_POST['coun'];
$contact=$_POST['cNo'];
 

$data="INSERT INTO info VALUES ('$fname','$lname','$email','$u_name','$psw','$cpsw','$coun','contact')";

$query=  mysql_query($data);

echo 'insert successfully';
 }
?>
</p>
<p>Register </p>
<form  action="../../../Users/RATUL/Desktop/RATUL/input.php" method="POST"> 
        <table>
            
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="roll"></td>
            </tr>
            
            <tr>
                <td>Last Name</td>
                <td >
                    <input type="text" name="roll">
                </td>
            </tr>
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="text" name="code">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="cname">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="cNo">
                </td>
            </tr>
            <tr>
                <td>Confram Password</td>
                <td>
                    <input type="text" name="cNo">
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="dis">
                        <option value ="">(Select One District)</option>
                        <option value ="Dhaka">Dhaka</option>
                        <option value ="Rajshahi">Rajshahi</option>
                        <option value ="Comilla">Comilla</option>
                        <option value ="Jessore">Jessore</option>
                        <option value ="Chittagong">Chittagong</option>
                        <option value ="Barisal">Barisal</option>
                        <option value ="Sylhet">Sylhet</option>
                        <option value ="Dinajpur">Dinajpur</option>
                        <option value="other">Others</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Contact No.</td>
                <td><input type="text" name="Email"></td>
            </tr>
            
            <tr>
                <td>
                     
                </td>
                <td>
                    <input type="submit" value="CREATE">
                </td>
            </tr>
            
            
  </table>
</form>
			
</body>
</html>
<?php
echo "<a href='view.php'>go to view page</a>";

?>
