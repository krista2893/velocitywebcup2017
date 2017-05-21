<?php

	include("conn.php");
	
	$sql = "SELECT * FROM tbl_poll";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		$i = 0;
	    // output data of each row
	    echo '<div id="container">';
	    while($row = $result->fetch_assoc()) 
	    {
	    	$i++;
	    	$id = $row["id"];
	        
			echo '
				<div><span>0</span><a href="">Vote</a>' .$row["attract_name"] . '</div>
			   

			';
	    }
	    echo '</div>';
	} 
	else {
	    echo "0 results";
	}





?>


	
	


		