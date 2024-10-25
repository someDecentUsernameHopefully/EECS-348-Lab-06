<!DOCTYPE html>
<?php
	$size = $_GET["size"];
?>
<html>
<head>
	<title><?php
		$sizeStr = strval($size);
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