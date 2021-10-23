<?php

$name = $_POST["name"];
$email = $_POST["email"];
$question = $_POST["question"];

$write_data = "{$name},{$email},{$question}\n";
$file = fopen('data/data.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:data_csv_input.php");
