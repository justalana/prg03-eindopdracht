<?php
//Require functions for actions
require_once "includes/actions.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getBooks();
} else {
    $data = getBookDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
//header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');
echo json_encode($data);
exit;