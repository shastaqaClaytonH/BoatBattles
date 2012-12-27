<?php

function printMap($map) {
	echo "<table>";
	for ($i = 0; $i < count($map); $i++) {
		echo "<tr>";
		for ($j = 0; $j < count($map[i]); $j++) {
			echo "<td>" + $map[i][j] + "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

function createMap() {
	$width = 128;
	$height = 128;
	for ($i = 0; $i < $height; $i++) {
		for ($j = 0; $j < $width; $j++) {
			$spot = "Null";
			if ($spot == "L") {
				$map[i][j] = "L";
			} else {
				$map[i][j] = "W";
			}
		}
	}
	return $map;
}
?>