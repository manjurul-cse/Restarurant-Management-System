<?PHP
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Restaurant Management System	</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<style media="all" type="text/css">@import "css/all.css";</style>
	<!--[if lt IE 7]><style media="screen" type="text/css">@import "css/ie6.css";</style><![endif]-->
	
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
					  <p></p>
						<form id="contact-form" action="#" method="post">
							<fieldset>
								<ul>
									<li>
										<label>Manager Name <span>*</span></label>
										<input type="text"  name="manager_name"/>
									</li>
									<li>
										<label>Restaurant Name<span>*</span></label>
                                        <input type="text" name="username" />
										
									</li>
                                    <li>
                                    <label>Password<span>*</span></label>
                                    <input type="password" name="password"/>
                                    </li>
									<li>
										<label>Verify Password <span>*</span></label>
                                        <input type="password" name="re_password"/>
									</li>
                                    <li>
										<label>Email <span>*</span></label>
                                        <input type="text" name="email"/>
									</li>
                                    <li>
										<label>Web Site <span>*</span></label>
                                        <input type="text" name="web"/>
									</li>
                                    
                                    
									<li class="submit">
										<p><span>*</span> These are required fields</p>
										<input type="submit" value="Submit"/>
									</li>
								</ul>
							</fieldset>
						</form>
                        <?php
						include('connect.php');
		        // put your code here
        if (!empty ($_POST['username'])){
            $manager_name=$_POST['manager_name'];
            $restaurant_name=$_POST['username'];
            $password=$_POST['password'];
            $re_password=$_POST['re_password'];
            $email=$_POST['email'];
            $web=$_POST['web'];
            if ($password==$re_password){
            $sql="INSERT INTO users VALUES ('','".$manager_name."','".$restaurant_name."','".$password."','".$email."','".$web."')";
            
            mysql_query($sql);
            echo 'Regestation SuccessFully';
            }  else {
                echo 'Password Not Match';
            }
            }  
        
						
						?>
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