<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Restaurant Management System	</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<style media="all" type="text/css">@import "css/all.css";</style>
	<!--[if lt IE 7]><style media="screen" type="text/css">@import "css/ie6.css";</style><![endif]-->
	<script defer type="text/javascript" src="pngfix.js"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div class="background">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="manu.php">Content</a></li>
					
                    <li><a href="Search.php">Search</a></li>
					<li class="active"><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="leftcol">
				<div class="block">
					<div class="block-top"></div>
					<div class="block-content">
                    
						<h2>Contact the <span>Restaurant Management System!</span></h2>
                        <?php
						if(!(isset($_SESSION['username']) and $_SESSION['username']=="admin")){
					  echo'<p></p>
						<form id="contact-form" action="CONTACT.PHP" method="post">
							<fieldset>
								<ul>
									<li>
										<label>Full Name <span>*</span></label>
										<input type="text"  name="full_name"/>
									</li>
                                    <li>
										<label>Email <span>*</span></label>
										<input type="text"  name="email"/>
									</li>
									<li>
										<label>Topic<span>*</span></label>
										<input type="text"  name="topic"/>
									</li>
									<li>
										<label>Your Message  <span>*</span></label>
										<textarea cols="50" rows="5" name="message"></textarea>
									</li>
									<li class="submit">
										<p><span>*</span> These are required fields</p>
										<input type="submit" value="Send Message"/>
									</li>
								</ul>
							</fieldset>
						</form>';
						}
						?>
                       
                         <?php
						include('connect.php');
						if(!empty($_POST['email'])){
							$f_name=$_POST['full_name'];
							$email=$_POST['email'];
							$topic=$_POST['topic'];
							$message=$_POST['message'];
							
							$sql="INSERT INTO contact VALUES ('','$f_name','$email','$topic','$message')";
							mysql_query($sql);
							echo"Message Send Successfully";
							
						}
						
						
						?>
					</div>
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
					  <form  method="post" action="login.php">
      
          <label>Username</label>
          <input type="text"  name="username" />
		  
          <br/>
          <label>
            Password</label>
          <input type="password"  name="password"/><br/>
         
<p>
  <input type="submit" value="Log In" name="Submit"><br></form>
        
		<a href="signup.php" ><button>Sign Up</button></a>';

					}else{
						echo "<h3><span>Log In Info</span></h3>
                        <div class='login'><p style='color:#0F0; font-size:18px'>You Are Login As     <b style='color:red; font-size:30px; background-color:#FFF; font-family:Algerian'>".$_SESSION['username']    ."</b></span><hr><br>
						
						<a href='update.php'><input type='submit' value='Update Product'></a><br><br>
						<a href='logout.php'><input type='submit' value='Log Out'></a>";
}
						
					


?>
</form>
</div>
					</div>
					<div class="block-bottom"></div>
				</div>
	
			</div>
		</div>
		<div id="footer"> <center>
        <?php
		
						if((isset($_SESSION['username']) and $_SESSION['username']=="admin")){
							
					
					$que1=mysql_query("SELECT * FROM contact");
				   $result_count = mysql_num_rows($que1);
				   $num=0;
					
					if($result_count==0){
						echo '<h1>There is no Message</h1>';
					}else{
						 
					
					echo'<table width="850px" height="48" border="1PX" bgcolor="#808080" align="center" >
                    <tr>
                    <td align="center" style="font-size:18px" width="170px"><b>Full Name</b></td>
                    <td align="center" style="font-size:18px" width="170px"><b>Email </b></td>
                    <TD align="center"  style="font-size:18px" width="170px"><b>topic</b></TD>
					<TD align="center"  style="font-size:18px" width="170px"><b>Message</b></TD>
					<TD align="center"  style="font-size:18px" width="170px"><b>Action</b></TD>
                    </tr>
                    </table>';
					
                  
				   while($row=mysql_fetch_array($que1)){
				   			$id=$row['id'];
					   		$name=$row['full_name'];
							$show_email=$row['email'];
							$show_topic=$row['topic'];
							$show_message=$row['message'];
							$num++;
							//echo"<p style='color:red; font-size:18px'>Full Name:</p>".$name."<br><p style='color:red; font-size:18px'>Email:</p>".$show_email."<br><p style='color:red; font-size:18px'>Topic:</p>".$show_topic."<br><p style='color:red; font-size:18px'>Message:</p>".$show_message."<hr><hr>";
							if($num%2==0){
						$bgcolor='#FFFFCC';
					}else{
						$bgcolor='#CCFFCC';
					}
							echo " 
					<table border='1px' width='850px'>
                     <tr height='100px' align='center'  bgcolor='$bgcolor' >
                     <td width='170px' align='center' style='font-size:14px; color:#00F'>$name</td>
                     <td width='170px' align='center' style='font-size:12px; color:#00F' >$show_email</td>
                     <td width='170px'  align='center' style='font-size:9px; color:#00F'>$show_topic</td>
					 <td width='170px'  align='center' style='font-size:9px; color:#00F'>$show_message</td>
					 <td width='170px'  align='center' style='font-size:12px; color:#00F'>
					
					 
					 <a href=\"deleted1.php?id=$id\"><input type='submit' value='Delet'></a><br><br>
					 
					 </td>
                    </tr>
                    </table>";
							
					}
						}
						
						}
						?>
		
		
        
        </center>
		  
		</div>
        
</div>

</body>
</html>