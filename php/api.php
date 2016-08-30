<?php
// This is the API, 2 possibilities: show the app list or show a specific app by id.
// This would normally be pulled from a database but for demo purposes, I will be hardcoding the return values.


$data = json_decode(file_get_contents('php://input'), true);


print_r($data);
echo $data["repository"];


?>
