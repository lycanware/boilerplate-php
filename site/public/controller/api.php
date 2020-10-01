<?php
$name = $_POST['name'];

if (isset($name)) {
    $result = array(
        "status" => "OK",
        "message" => "your name is $name"
    );

    header('Content-Type: application/json', true, 200);
    echo json_encode($result);
    
} else {
    $result = array(
        "status" => "Error",
        "details" => "no name was provided"
    );

    header('Content-Type: application/json', true, 400);
    echo json_encode($result);
}

?>