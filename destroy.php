<?php
require_once __DIR__."/vendor/autoload.php";
use App\Database;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$db = new Database();

$db->destroy($request->query->get('id'));

?>