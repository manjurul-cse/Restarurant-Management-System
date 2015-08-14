<?php
					  $con=mysql_connect("localhost","root","");
        $db=  mysql_select_db("restaurent");
		
		
					  if(isset($_POST['search_term'])){
	$search_term=mysql_real_escape_string(HTMLENTITIES($_POST['search_term']));
	
	if(!empty($search_term)){
		$search=mysql_query("SELECT * FROM restaurant WHERE restaurent_name LIKE '%$search_term%' OR Category LIKE '%$search_term%' OR product_name LIKE '%$search_term%' OR price LIKE '%$search_term%'"); 
		$result_count = mysql_num_rows($search);
		$suffix=($result_count!= 1)? 's' : '';
		echo '<p>Your search for <strong>', $search_term,'</strong> returned <strong>', $result_count,'</strong> result', $suffix, '</p><hr><hr>';
		
		
		while($results_row=mysql_fetch_assoc($search)){
			
			 echo'<table border="1px" height="120px"><tr><td width=20% align="center"> <b style="color:red">Restaurent Name: </b><br>'. $results_row['restaurent_name']. '</td><td width=25% align="center"><b style="color:red">Product Name:</b><br>'.$results_row['product_name'].'</td><td  align="center" width="20%"><b style="color:red">Price:</b><br>'.$results_row['price'].'</td><td  width=35% align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="120" height="100">
  <param name="movie" value="', $results_row['image'],'" />
  <param name="quality" value="high" />
  <param name="allowFullScreen" value="false" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
  <embed src="restarurent/', $results_row['image'],'"
         quality="high"
         type="application/x-shockwave-flash"
         WMODE="transparent"
         width="120"
         height="100"
         allowFullScreen="false"
         pluginspage="http://www.macromedia.com/go/getflashplayer"
         allowScriptAccess="always"/>
</object>
			
			



</td></tr></table>';
			 
		 
		}
	}
	
}

					  
					  
					  ?>
					  
					  
					  
					
					  