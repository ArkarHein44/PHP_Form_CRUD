<?php
require_once "vendor\autoload.php";
use App\DB;

$db = new DB();
$db->store($_POST);

?>