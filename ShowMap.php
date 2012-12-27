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

function createMap(){
	
}

?>