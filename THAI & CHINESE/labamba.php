<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Restaurant Management System	</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="../css/all.css" />
	<!--[if lt IE 7]><style media="screen" type="text/css">@import "css/ie6.css";</style><![endif]-->
	
</head>
<body>
	<div id="page">
	  <div id="header">
			<div class="background">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li class="active"><a href="../manu.php">Content</a></li>
					
                    <li><a href="../Search.php">Search</a></li>
					<li ><a href="../contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div><br />
        <div id="content">
        <div id="back">
		<iframe width="940" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=La+Bamba+restaurant+dhaka&amp;aq=&amp;sll=23.763352,90.370789&amp;sspn=0.088137,0.169086&amp;ie=UTF8&amp;t=m&amp;ll=23.763352,90.370789&amp;spn=0.094264,0.32238&amp;z=12&amp;output=embed"></iframe><br />
		
        <div id="footer"><center>
        <H1 style="color:red; font-size:24px" align="center">Other Foods</h1><br /><br /><span>
       <a href="../BANGLA/labamba.php"> <input type="button" value="Bangla Foods" style="background-color:#0F0; color:red" size="50px" height="20px"/>  
         </a>
       <a href="../INDIAN/labamba.php"> 
       <input type="button" value="Indian Foods" style="background-color:#0F0" /> 
         </a>
      <a href="../fast_foods/labamba.php"> 
       <input type="button" value="Fast Foods" style="background-color:#0F0" /></a></span>
        </center>
        </div>
		<p><br />
		  </p>
		<div id="content">
	  <div id="leftcol">
            
				<div class="block">
					<div class="block-top"></div>
					<div class="block-content">
						
                         <?php
					include'../connect.php';
					
        			
					$num=0;
					
					$squ=mysql_query("select * from restaurant where Category='Thai & Chinis' and restaurent_name='La Bamba'");
					
					$result_count = mysql_num_rows($squ);
					if($result_count==0){
						echo '<h1>There is no Thai & Chinis Food of <b style="color:#0FF">La Bamba</b></h1>';
					}else{
						
						if((isset($_SESSION['username']) and $_SESSION['username']=="admin")|| (isset($_SESSION['username']) and $_SESSION['username']=="La Bamba")){
						echo'<table width="545" height="48" border="1PX" bgcolor="#808080" align="center" >
                    <tr>
                    <td align="center" style="font-size:18px" width="136.25px"><b>PRODUCT NAME</b></td>
                    <td align="center" style="font-size:18px" width="136.25px"><b>PRICE </b></td>
                    <TD align="center"  style="font-size:18px" width="136.25px"><b>IMAGE</b></TD>
					<TD align="center"  style="font-size:18px" width="136.25px"><b>Action</b></TD>
                    </tr>
                    </table>';

 					while($row=mysql_fetch_array($squ)){
                    $id=$row['id'];
                    $name=$row['product_name'];
					
                    $price=$row['price'];
                    $image=$row['image'];
					$num++;
					
                    if($num%2==0){
						$bgcolor='#FFFFCC';
					}else{
						$bgcolor='#CCFFCC';
					}
					
					
					
                    echo " 
					<table border='1px' width='545px'>
                     <tr height='100px' align='center'  bgcolor='$bgcolor' >
                     <td width='136.25px' align='center' style='font-size:14px; color:#00F'>$name</td>
                     <td width='136.25px' align='center' style='font-size:14px; color:#00F'>$price</td>
                     <td width='136.25'  align='center' style='font-size:9px; color:#00F'><img src='$image' width='70px' height='70px' /></td>
					 <td width='136.25px'  align='center' style='font-size:12px; color:#00F'>
					
					 <a href=\"../edit.php?id=$id\"><input type='submit' value='Edit'></a><br><br>
					 <a href=\"../deleted.php?id=$id\"><input type='submit' value='Delet'></a><br><br>
										 
					 </td>
                    </tr>
                    </table>";
					}
						}else{
							echo'<table width="545" height="48" border="1PX" bgcolor="#808080" align="center" >
                    <tr>
                    <td align="center" style="font-size:20px" width="33%"><b>PRODUCT NAME</b></td>
                    <td align="center" style="font-size:20px" width="33%"><b>PRICE </b></td>
                    <TD align="center"  style="font-size:20px" width="33%"><b>IMAGE</b></TD>
                    </tr>
                    </table>';

 					while($row=mysql_fetch_array($squ)){
                    $id=$row['id'];
                    $name=$row['product_name'];
					
                    $price=$row['price'];
                    $image=$row['image'];
					$num++;
					
                    if($num%2==0){
						$bgcolor='#FFFFCC';
					}else{
						$bgcolor='#CCFFCC';
					}
					
					
					
                    echo " 
					<table border='1px' width='545px'>
                     <tr height='100px' align='center' style='font-size:16px' bgcolor='$bgcolor'>
                     <td width=33.33% align='center' style='font-size:14px; color:#00F'>$name</td>
                     <td width=33.33% align='center' style='font-size:14px; color:#00F'>$price</td>
                     <td width=33.33%  align='center' style='font-size:12px; color:#00F'><img src='$image' width='70px' height='70px' /></td>
                    </tr>
                    </table>";
					}
						
					}
					
					}
					
					?>
                
					</div >
                   
					<div class="block-bottom"></div>
				</div>
		  </div>
			<div id="rightcol">
				<div class="block">
				  <div class="block-top"></div>
					<div class="block-content">
						<h3>Our <span>Specials!</span></h3><br />
                        <marquee  direction="up" scrollamount="4" scrolldelay="80" width="190"  height="100"  onMouseOver="this.stop()" onMouseOut="this.start()">
                        
                        
                        <?php
						$sql="select * from restaurant";
						$res=mysql_query($sql);
						$num=0;
						
						
						while($row=mysql_fetch_array($res)){
							
                   		
                   		 $name=$row['product_name'];
					
                    	$price=$row['price'];
						echo'<b style="color:red">',$name,'<br>',$price,'<hr></b>';
						}
			
			
			?></marquee>
			</marquee>
				</div>
					<div class="block-bottom"></div>
				</div>
                <div class="block">
					<div class="block-top"></div>
					
                     <div class="block-content">
                     <?php
					 
                    if(!isset($_SESSION['uid'])){
                    
					echo'<h3><span>Sign in</span></h3>
                        <div class="login">
					  <form  method="post" action="../login.php">
      
          <label>Username</label>
          <input type="text"  name="username" />
		  
          <br/>
          <label>
            Password</label>
          <input type="password"  name="password"/><br/>
         
<p>
  <input type="submit" value="Log In" name="Submit"><br></form>
        
		<a href="../signup.php" ><button>Sign Up</button></a>';

					}else{
						echo "<h3><span>Log In Info</span></h3>
                        <div class='login'><p style='color:#0F0; font-size:18px'>You Are Login As     <b style='color:red; font-size:30px; background-color:#FFF; font-family:Algerian'>".$_SESSION['username']    ."</b></span><hr><br>
						
						<a href='../update.php'><input type='submit' value='Update Product'></a><br><br>
						<a href='../logout.php'><input type='submit' value='Log Out'></a>";
}
						
					


?>
</form>
</div>
			  </div>
					<div class="block-bottom"></div>
		  </div>
	
	  </div>
</div>
		<div id="footer"> <center></center>
		  
		</div>
        
        
</div>

</body>
</html>