<?php
session_start();
include'../connect.php';
?>
<html>
<head>
<title>Restaurant Management System	</title>
	
	<style media="all" type="text/css">@import "../css/all.css";</style>  
    <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
  
</head>


<body>
	<div id="page">
		<div id="header">
			<div class="background">
				<ul>
					<li class="active"><a href="../index.php">Home</a></li>
					<li><a href="../manu.php">Content</a></li>
                   
                    <li><a href="../Search.php">Search</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
					
				</ul>
			</div>
		</div>
		
		<div id="content">
        
    
	  <div id="leftcol">
            
				<div class="block">
                
					<div class="block-top"></div>
					<div class="block-content">
						<h1>RESTARUNT NAME</h1><hr color=green/><hr color="#FF0000"/><hr color=green/><br />
                      <div>
                      <a href="ffc.PHP" title="FFC, Dhanmondi, Dhaka"><img src="../db_image/ffc6.png" width="100" height="100" style="margin-left:30px"/></a>
                      <a href="kfc.php" title="KFC, Dhanmondi, Dhaka"><img src="../db_image/images.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="cfc.php" title="CFC, Dhanmondi, Dhaka" ><img src="../db_image/713002.jpeg" width="100" height="100"  style="margin-left:30px"/>
                      <hr width="80%" align="left" color=green/><hr  width="80%" color=red align="left"/><hr width="80%" align="left" color=green/><br />
                      <a href="bfc.php" title="BFC, Dhanmondi, Dhaka"><img src="../images/index.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="amrican_burger.php" title="American Burger, Dhanmondi, Dhaka"><img src="../images/index1.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="pizza_hut.php" title="Pizza hut, Dhanmondi, Dhaka"><img src="../images/index3.jpg" width="100" height="100"  style="margin-left:30px"/></a><hr width="80%" align="left" color=green/><hr width="80%" align="left" color=red />
                      <hr width="80%" align="left" color=green/>
                      <br />
                      <a href="Star_kabab.php" title="Star Kabab, Dhanmondi, Dhaka"><img src="../images/timthumb.php.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="boomers_cafe.php" title="Boomers Cafe, Dhanmondi, Dhaka"><img src="../db_image/boomers_cafe.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="nandus.php" title=" Nandus, Dhanmondi, Dhaka"><img src="../db_image/images2.jpg " width="100" height="100"  style="margin-left:30px"/></a><hr width="80%" align="left" color=green/><hr width="80%" align="left" color=red /><hr width="80%" align="left" color=green/><br />
                      <a href="korai_gos.php"title=" Korai Gos, Dhanmondi, Dhaka"><img src="../images/images1.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="labamba.php"title=" Labamba, Dhanmondi, Dhaka"><img src="../db_image/images3.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="albik.php"title="Albik, Dhanmondi, Dhaka"><img src="../db_image/images4.jpg" width="100" height="100"  style="margin-left:30px"/></a><hr width="80%" align="left" color=green/><hr width="80%" align="left" color=red /><hr width="80%" align="left" color=green/><br />
                      <a href="4season.php" title=" 4 Season, Dhanmondi, Dhaka"><img src="../db_image/timthum.jpg" width="100" height="100"  style="margin-left:30px"/></a>
                      <a href="olympia.php" title=" Olympia, Dhanmondi, Dhaka"><img src="../db_image/Inner_Upper.png" width="100" height="100"  style="margin-left:30px"/></a>
                      
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
					 include'../connect.php';
					 
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