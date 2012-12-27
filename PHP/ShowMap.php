<?php

$width = 40;
$height = 40;

function printMap($map) {
	echo "<table>";
	for ($i = 0; $i < $height; $i++) {
		echo "<tr id='" . $i . "'>";
		for ($j = 0; $j < $width; $j++) {
			echo "<td id='" . $j . "'>" . $map[$i][$j] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

function createMap() {
	for ($i = 0; $i < $height; $i++) {
		for ($j = 0; $j < $width; $j++) {
			$spot = "Null";
			if ($spot == "L") {
				$map[$i][$j] = "L";
			} else {
				$map[$i][$j] = "W";
			}
		}
	}
	return $map;
}

$watermap = createMap();
?>

<html>
    <head>
        <title> Boat Battles Map </title>
    </head>
    <body>
        <div id="left"></div>
        <div id="Main">
            <?php printMap($watermap); ?>
        </div>
        <div id="footer"></div>
    </body>
</html>