<?php
require_once "./db.php";

$db = new DB();
$db->store($_POST);

?>