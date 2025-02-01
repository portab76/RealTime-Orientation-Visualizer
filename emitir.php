<?php
include "db.php";
$data = json_decode(file_get_contents("php://input"));
$sql = "UPDATE `motion` SET 
`agx`=$data->agx, 
`agy`=$data->agy, 
`agz`=$data->agz, 
`ax`=$data->ax, 
`ay`=$data->ay, 
`az`=$data->az, 
`ai`=$data->ai, 
`gz`=$data->gz, 
`gx`=$data->gx, 
`gy`=$data->gy, 
`cnt`=$data->cnt, 
`alpha`=$data->alpha, 
`beta`=$data->beta, 
`gamma`=$data->gamma,
`st`=NOW()
WHERE  token = 'POT'";
$result = $conn->query($sql);
?>
