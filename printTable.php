<?php
if (isset($_GET["data"])) {
	$data = urldecode($_GET["data"]);
	$rows = explode("\n", $data);
	echo "<table>";
	foreach ($rows as $row) {
		if (!empty($row)) {
			$cells = explode(" ", $row);
			echo "<tr>";
			foreach ($cells as $cell) {
				echo "<td>" . htmlspecialchars($cell) . "</td>";
			}
			echo "</tr>";
		}
	}
	echo "</table>";
}
?>

