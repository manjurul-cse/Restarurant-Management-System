<?php
session_start();
include'connect.php';
?>
<html>
<head>
<title>Restaurant Management System	</title>
	
	<style media="all" type="text/css">@import "css/all.css";</style>  
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
  
</head>


<body>
	<div id="page">
		<div id="header">
			<div class="background">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="manu.php">Content</a></li>
                   
                    <li><a href="Search.php">Search</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
					
				</ul>
			</div>
		</div>
		<div><div>
    

	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
        </div>
		<div id="content">
        
    
	  <div id="leftcol">
            
				<div class="block">
                
					<div class="block-top"></div>
					<div class="block-content">
						<h2>Welcome to the Restaurant Management System						</h2>
						<p>
						  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="540" height="200">
  <param name="movie" value="slide.swf" />
  <param name="quality" value="high" />
  <param name="allowFullScreen" value="false" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
  <embed src="slide.swf"
         quality="high"
         type="application/x-shockwave-flash"
         WMODE="transparent"
         width="540"
         height="200"
         allowFullScreen="false"
         pluginspage="http://www.macromedia.com/go/getflashplayer"
         allowScriptAccess="always" />
</object>A restaurant is an establishment that serves prepared food and   beverages to order, to be consumed on the premises. The term covers a   multiplicity of venues and a diversity of styles of cuisine.</p>
						<p>Restaurants are sometimes also a feature of a   larger complex, typically a hotel, where the dining amenities are   provided for the convenience of the residents and for the hotel to   maximise their potential revenue. Such restaurants are often also open   to non-residents.  </p>
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
		<div id="footer"> <center></center>
		  
		</div>
        </div>

    
</body>
</html>