<?php

require_once "controller/classMasterController.php";
require_once "classes/classDatabase.php";


ini_set("DISPLAY_ERRORS", "1");
error_reporting(E_ALL);



$conn = Database::Instance();


$data = $conn->select("SELECT * FROM products");

echo '<pre>';
var_dump($conn);
echo '</pre>';
