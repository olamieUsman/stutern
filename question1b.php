<html>

<body>

<?php	
	
	$arrayvalue = array(
					"name"=>"Usman Olayinka", 
					"matricno"=>179291, 
					"dept"=>"computer science"
				);
	$output = json_encode($arrayvalue);
	echo $output;
?>

</body>
</html>