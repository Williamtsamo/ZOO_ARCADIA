<?php

require_once 'config.php';
require_once 'pdo.php';

$id = $_GET['id'];


$query = $conn->query("SELECT * FROM poll_item ");
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result);
