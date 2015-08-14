<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $con=mysql_connect("localhost","root","");
        $db=  mysql_select_db("e")
        or die("Unable to connect to MySQL");
            echo "Connected to MySQL<br>";
            
            if (!empty ($_POST['roll'])&&!empty ($_POST['board'])&&(!empty ($_POST['code']))&&!empty ($_POST['cname'])&&!empty ($_POST['dis'])&&!empty ($_POST['cNo'])&&!empty ($_POST['Email'])){
                $roll=$_POST['roll'];
                $board=$_POST['board'];
                $cod=$_POST['code'];
                $cname=$_POST['cname'];
                $dis=$_POST['dis'];
                $cno=$_POST['cNo'];
                $email=$_POST['Email'];
                
                $data="INSERT INTO info VALUES('$roll','$board','$cod','$cname','$dis','$cno','$email')";
                $dara1=mysql_query($data);
             echo 'reg sucess';
            }
            else{
                echo 'insert valid value';
            }
              
        ?>
        <form  action="index.php" method="POST"> 
        <table>
            
            <tr>
                <td>Roll :</td>
                <td><input type="text" name="roll"></td>
            </tr>
            
            <tr>
                <td>
                    Board :
                </td>
                <td >
                    <select name="board">
                        <option value ="">(Select Any Board)</option>
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
                <td>
                    college code :
                </td>
                <td>
                    <input type="text" name="code">
                </td>
            </tr>
            <tr>
                <td>
                    College name :
                </td>
                <td>
                    <input type="text" name="cname">
                </td>
            </tr>
            <tr>
                <td>
                    Districts :
                </td>
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
                <td>
                    Contact no :
                </td>
                <td>
                    <input type="text" name="cNo">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="Email"></td>
            </tr>
            
            <tr>
                <td>
                     
                </td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
            
            
        </table>
            </form>
        <?php
         
      
        
        
        
            echo "<table border=1px width=50% >
                    <tr>
                        <td width=16.6%>#<td> 
                        <td width=16.6%>Roll<td>
                        <td width=16.6%>Doard<td>
                        <td width=16.6%>College Code<td>
                        <td width=16.6%>College Name<td>
                        <td width=16.6%>District<td>
                        <td width=16.6%>Contact No<td>
                        <td width=16.67%>Email Address<td>
                     <tr>
                   </table>";
            
            
            $squ=mysql_query( "select * from info");
            while($row=mysql_fetch_array($squ)):
                    $roll=$row['roll'];
                    $board=$row['board'];
                    $cod=$row['c_code'];
                    $cname=$row['c_name'];
                    $dis=$row['districts'];
                    $cno=$row['contact_no'];
                    $email=$row['email'];
                   echo " <table border=1px width=50% >
                               <tr>
                                    <td width=16.67%>$roll</td>
                                    <td width=16.67%>$board </td>
                                    <td width=16.67%> $cod<?td>
                                    <td width=16.67%> $cname</td>
                                     <td width=16.67%>$dis</td>
                                    <td width=16.67%>$cno</td>
                                    <td width=16.67%>$email</td>
                                     
                    
                                 </tr>
                                 
                           </table>";
                           
                    endwhile;
            
        
        
       
		
?>


        
       
    </body>
</html>
