<html>
<body>

<?php

		$postdata = http_build_query(
		    array(
		        'var1' => 'some content goes here',
		        'var2' => 'ok now'
		    )
		);

		$postcontent = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);

		$context = stream_context_create($postcontent);

		$output = file_get_contents('http://www.cardboardfish.com/products', false, $context);

		echo $output;

?>

</html>
</body>