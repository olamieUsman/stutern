<html>
<body>
	<?php
		class Converter {
			public function converter1() {
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
			//var_dump($studentdata);
		}

		public function converter2() {
			$arraydata = array('name' => "Usman Olayinka", "matricno" => "179291", "dept" => "computer science");
			$arrayoutput = json_encode($arraydata, true)
			var_dump($arrayoutput);
		}
	}


	$stutern = new Converter;
	$stutern->converter1();
	$stutern->converter2();
?>
	</body>
</html>