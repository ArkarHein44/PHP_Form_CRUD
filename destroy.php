<?php
require_once "vendor\autoload.php";
use App\DB;

$db = new DB();

$db->destroy($_GET['id']);

?>