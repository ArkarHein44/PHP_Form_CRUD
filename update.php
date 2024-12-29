<?php
require_once "vendor\autoload.php";
use App\DB;

$db = new DB();
$db->update($_POST);

?>