<?php

include('db_connection.php');

	$query = "
		SELECT * FROM sofas WHERE id > 0
	";

	if(isset($_GET["minimum_price"], $_GET["maximum_price"]) && !empty($_GET["minimum_price"]) && !empty($_GET["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_GET["minimum_price"]."' AND '".$_GET["maximum_price"]."'
		";
	}

	if(isset($_GET["color"])) {
		$color_filter = implode("','", $_GET["color"]);
		$query .= "
		 AND color IN('".$color_filter."')
		";
	}

	if(isset($_GET["material"])) {
		$material_filter = implode("','", $_GET["material"]);
		$query .= "
		 AND material IN('".$material_filter."')
		";
	}

	if(isset($_GET["country"])) {
		$country_filter = implode("','", $_GET["country"]);
		$query .= "
		 AND country IN('".$country_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();

	if ($total_row > 0) {
		$output = '';
			foreach($result as $row)
			{
				$output .= '
				<div class="col-sm-4 col-lg-3 col-md-3">
					<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:280px;">
						<p align="center"><strong><a href="#">'. $row['name'] .'</a></strong></p>
						<h4 style="text-align:center;" class="text-danger" >'. $row['price'] .'</h4>
						<p>Цвет : '. $row['color'].'<br />
						Материал : '. $row['material'].' <br />
						Страна-производитель : '. $row['country'].'<br />
					</div>
				</div>
				';
			} 
	} else {
		$output = '<h3>Товар не найден</h3>';
	}
	echo $output;