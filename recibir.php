<?php
include "db.php";
$sql = "SELECT 
`agx`, `agy`, `agz`, `ax`, `ay`, `az`, `ai`, `gz`, `gx`, `gy`, `cnt`, `st`, `alpha`, `beta`, `gamma` 
FROM  motion WHERE TOKEN='POT' LIMIT 1 ";
$result = $conn->query($sql);
//echo $sql."<br>".print_r($_REQUEST);
if ($result->num_rows > 0) {	
	$rows = array();
    while ($row = $result->fetch_assoc()){
		echo '[ 
			{"id":"accelerationIncludingGravity_X", "x":' . $row["cnt"] . ',"y":' . $row["agx"] . '},
			{"id":"accelerationIncludingGravity_Y", "x":' . $row["cnt"] . ',"y":' . $row["agy"] . '},
			{"id":"accelerationIncludingGravity_Z", "x":' . $row["cnt"] . ',"y":' . $row["agz"] . '},
			
			{"id":"Gravity_X", "x":' . $row["cnt"] . ',"y":' . $row["gx"] . '},
			{"id":"Gravity_Y", "x":' . $row["cnt"] . ',"y":' . $row["gy"] . '},
			{"id":"Gravity_Z", "x":' . $row["cnt"] . ',"y":' . $row["gz"] . '},
			
			{"id":"acceleration_X", "x":' . $row["cnt"] . ',"y":' . $row["ax"] . '},
			{"id":"acceleration_Y", "x":' . $row["cnt"] . ',"y":' . $row["ay"] . '},
			{"id":"acceleration_Z", "x":' . $row["cnt"] . ',"y":' . $row["az"] . '},
			
			{"id":"gamma", "x":' . $row["cnt"] . ',"y":' . $row["gamma"] . '},
			{"id":"beta", "x":' . $row["cnt"] . ',"y":' . $row["beta"] . '},
			{"id":"alpha", "x":' . $row["cnt"] . ',"y":' . $row["alpha"] . '}
			]';
	}
}
?>