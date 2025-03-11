<?php
include "db.php";
$sql = "SELECT 
`agx`, `agy`, `agz`, `ax`, `ay`, `az`, `ai`, `gz`, `gx`, `gy`, `cnt`, `st`, `alpha`, `beta`, `gamma`, `lat`, `lng`, `acc`, `alt`, `altacc`, `hed`, `spe` 
FROM motion WHERE TOKEN='POT' LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {    
    $row = $result->fetch_assoc();
    
    $data = [
        "agx" => isset($row["agx"]) ? $row["agx"] : 0,
        "agy" => isset($row["agy"]) ? $row["agy"] : 0,
        "agz" => isset($row["agz"]) ? $row["agz"] : 0,
        "ax" => isset($row["ax"]) ? $row["ax"] : 0,
        "ay" => isset($row["ay"]) ? $row["ay"] : 0,
        "az" => isset($row["az"]) ? $row["az"] : 0,
        "ai" => isset($row["ai"]) ? $row["ai"] : 0,
        "gz" => isset($row["gz"]) ? $row["gz"] : 0,
        "gx" => isset($row["gx"]) ? $row["gx"] : 0,
        "gy" => isset($row["gy"]) ? $row["gy"] : 0,
        "cnt" => $row["cnt"],
        "alpha" => isset($row["alpha"]) ? $row["alpha"] : 0,
        "beta" => isset($row["beta"]) ? $row["beta"] : 0,
        "gamma" => isset($row["gamma"]) ? $row["gamma"] : 0,
        "lat" => isset($row["lat"]) ? $row["lat"] : 0,
        "lng" => isset($row["lng"]) ? $row["lng"] : 0,
        "acc" => isset($row["acc"]) ? $row["acc"] : 0,
        "alt" => isset($row["alt"]) ? $row["alt"] : 0,
        "altacc" => isset($row["altacc"]) ? $row["altacc"] : 0,
        "hed" => isset($row["hed"]) ? $row["hed"] : 0,
        "spe" => isset($row["spe"]) ? $row["spe"] : 0
    ];
    
    echo json_encode($data);
} else {
    echo json_encode(["error" => "No data found"]);
}
?>
