<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Restaurant Management System	</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/all.css" />
	<!--[if lt IE 7]><style media="screen" type="text/css">@import "css/ie6.css";</style><![endif]-->
    
  
	
</head>


<body>
	<div id="page">
		<div id="header">
			<div class="background">
				<ul>
					<li ><a href="index.php">Home</a></li>
					<li><a href="manu.php">Content</a></li>
					
                    <li class="active"><a href="Search.php">Search</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
					
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="leftcol">
				<div class="block">
					<div class="block-top"></div>
					<div class="block-content">
						<h2>Welcome to Restaurant Management System						</h2><br />
				     <div align="center"><h2 style="color:#0FF; font-family:Castellar; background-image:url(images/1325623457-examining-search-terms.jpg)"> <b>Search On Here</b></h2><br /><input align="middle" id="search" type="text" />
                     <script type="text/javascript" src="JS/jquery.js"></script> 
					<script type="text/javascript" src="js/search.js"></script>
				      <div id="search_results"></div>
                     
                      
                      </div>
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
						include'connect.php';
						$sql="select * from restaurant";
						$res=mysql_query($sql);
						
						
						
						while($row=mysql_fetch_array($res)){
							
                   		
                   		 $name=$row['product_name'];
					
                    	$price=$row['price'];
						echo'<b style="color:red">',$name,'<br>',$price,'<hr></b>';
						}
			
			
			?>
            </marquee>
			</marquee>
			
				</div>
					<div class="block-bottom"></div>
				</div>
                <div class="block">
					<div class="block-top"></div>
					<div class="block-content">
						 <?php
					 include'connect.php';
					 
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
		<div id="footer"> <center>Copyright By Ratul</center>
		  
		</div>
	</div>
    
</body>
</html>