<?php
require_once __DIR__."/vendor/autoload.php";
use App\Database;

$db = new Database();

$db->destroy($_GET['id']);

?>