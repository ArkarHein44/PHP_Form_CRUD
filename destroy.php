<?php

require_once "./db.php";
$db = new DB();

$db->destroy($_GET['id']);

?>