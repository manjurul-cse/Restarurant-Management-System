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
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="leftcol">
				<div class="block">
					<div class="block-top"></div>
					<div class="block-content">
						<h2>Contact the <span>Restaurant Management System!</span></h2>
					  <p>liquam suscipit. <strong>Integer justo</strong> erat, bibendum sed, lacinia eu, tristique condimentum, magna. Aliquam augue dolor, tempus sit amet, pharetra nec, blandit elementum, diam. Proin pharetra odio eu lectus sollicitudin ultricies.</p>
						<form id="contact-form" action="update.php" method="post">
							<fieldset>
								<ul>
									<li>
										<label>Food Catagory <span>*</span></label>
										
                                        <select name="category" style="width:310px; color:#90AF94; background:#1C2B1E;">
                                        	<option value="">Select any one</option>
                                            <option value="fast food">Fast Food</option>
                                            <option value="Indian"> Indian</option>
                                            <option value="bangla">Bangla</option>
                                            <option value="Thai & chinis">Thai & chinis</option>
                                            </select>
									</li>
                                    
                                    <li>
										<label>Product Name <span>*</span></label>
										<input type="text" name="product"/>
									</li>
									<li>
                                    <li>
										<label>Price <span>*</span></label>
										<input type="text" name="price"/>
									</li>
                                    
									<li class="submit">
										<p><span>*</span> These are required fields</p>
										<input type="submit" value="Update"/>
									</li>
								</ul>
							</fieldset>
						</form>
                        <?php
						include('connect.php');
						if($_SESSION['username']==""){
						header("Location: index.php");
						}else{
						  if (!empty ($_POST['product'])){
            
            				$category=$_POST['category'];
           					 $product=$_POST['product'];
           					 $price=$_POST['price'];
            
            $sql="INSERT INTO restaurant VALUES ('','".$_SESSION['username']."','".$category."','".$product."','TK:".$price."', '../images/img-not.jpg')";
			
			 
            mysql_query($sql);
						  }
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
		<div id="footer">
			
		</div>
	</div>
</body>
</html>