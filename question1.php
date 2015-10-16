<html>
<body>
	<?php
		class Converter {
			public function JSonToArray() {
				$jsondata = '[
					{"name": "Usman Olayinka","matricno": "179291","dept": "computer science"
					},
					{
						"name": "Afolabi Williams",
						"matricno": "179298",
						"dept": "Statistics"
					},
					{
						"name": "Bello Jumai",
						"matricno": "246823",
						"dept": "software engineering"
					}
				]';
			
			$studentdata = json_decode($jsondata, true);
			print_r(array($studentdata));
		}

		public function ArrayToJson() {
			$arraydata = array(
				"name" => "Usman Olayinka", 
				"matricno" => 179291, 
				"dept" => "computer science"
			);
			$arrayoutput = json_encode($arraydata)
			echo $arrayoutput;
		}
	}

	$stutern = new Converter;
	$stutern->JSonToArray();
	$stutern->ArrayToJson();
?>
	</body>
</html>
