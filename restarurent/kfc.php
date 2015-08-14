<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Restaurant Management System</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="../css/all.css" />
	<!--[if lt IE 7]><style media="screen" type="text/css">@import "css/ie6.css";</style><![endif]-->
    <script defer type="text/javascript" src="../pngfix.js"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div class="background">
				<ul>
					<li ><a href="../index.html">Home</a></li>
					<li class="active"><a href="../manu.html">Content</a></li>
					<li><a href="#">Photos</a></li>
                    <li><a href="../Search.php">Search</a></li>
					<li><a href="../contact.html">Contact Us</a></li>
				</ul>
                
			</div>
		</div>
		<div id="content">
        <div id="back">
        <iframe style="margin:0 0 0" width="940" height="270" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=kfc+in+dhanmondi&amp;sll=37.0625,-95.677068&amp;sspn=51.974572,79.013672&amp;ie=UTF8&amp;hq=kfc&amp;hnear=Dhanmondi,+Dhaka,+Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=23.743643,90.374072&amp;spn=0.002652,0.009162&amp;z=17&amp;output=embed"></iframe><br />
        <div>
			<div id="leftcol">
            <style>
			#leftcol{
	           width:638px;
	           float: none ;
	           padding:0 0 0 14px;
	           margin-top: auto;
			   margin-left:150px;
			}
			</style>
				<div class="block">
					<div class="block-top"></div>
					<div class="block-content">
                    
                    <table width="545" height="48" border="1PX" bgcolor="#808080" align="center" >
                    <tr>
                    <td align="center" style="font-size:20px" width="33%"><b>PRODUCT ID</b></td>
                    <td align="center" style="font-size:20px" width="33%"><b>PRODUCT NAME</b></td>
                    <TD align="center"  style="font-size:20px" width="33%"><b>PRICE</b></TD>
                    </tr>
                    </table>
                    <?php
					$con=mysql_connect("localhost","root","");
        $db=  mysql_select_db("ffc");
        
					
					
					$squ=mysql_query("select * from fast_food");

 					while($row=mysql_fetch_array($squ)):
                    $id=$row['id'];
                    $name=$row['product_name'];
                    $price=$row['price'];
                    $image=$row['image'];
                    
                    echo " 
					<table border='1px' width='545px'>
                     <tr height='100px' align='center' style='font-size:25px'>
                     <td width=33.33% align='center' style='font-size:25px'><a href='#'>$id</a></td>
                     <td width=33.33% align='center' style='font-size:25px'><a href='#'>$name</a></td>
                     <td width=33.33%><a href='#'>$price</a></td>
                    </tr>
                    </table>";
                    endwhile;
					
					?>
						
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