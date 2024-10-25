<!DOCTYPE html>
<?php
	try {
		$size = intval($_GET["size"]);
		$sizeStr = strval($size);

		if($size < 1) {
			throw new Exception("The table's size cannot be less than 1!");
		}
	} catch (Exception $E) {
		echo "The form value for table size is not set or is not valid!";
		exit(1);
	}
?>
<html>
<head>
	<title><?php
		echo "{$sizeStr}x{$sizeStr} Multiplication Table";
	?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/generatedTable.css">
</head>
<body>
<table>

<?php
	for($i = 0; $i <= $size; $i++) {
		$header = $i == 0;
		echo "<tr>";
		for($j = 0; $j <= $size; $j++) {
			if($header) {
				echo "<th>";
				if($j > 0) {
					echo $j;
				}
				echo "</th>";
			} elseif ($j == 0) {
				echo "<th>";
				echo $i;
				echo "</th>";
			} else {
				echo "<td>";
				echo $i * $j;
				echo "</td>";
			}
		}
		echo "</tr>";
	}
?>

</table>
</body>
</html>