<?php
require_once __DIR__."/vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

// dd($request->getPathInfo());
// /StudentsRegister/httpfoundation.php/store
// "/store"

// use get('attribute') for specific & use all() for all datas 

// => query for get method 
// dd($request->query->get('name'));
// "aung aung"

// dd($request->query->all());
// httpfoundation.php?name=aung%20aung&id=1&age=18
// array:3 [▼
// "name" => "aung aung"
// "id" => "1"
// "age" => "18"
// ]



// => Notes
// Accessing Request Data
// A Request object holds information about the client request. This information can be accessed via several public properties:
// request: equivalent of $_POST;
// query: equivalent of $_GET ($request->query->get('name'));
// cookies: equivalent of $_COOKIE;
// attributes: no equivalent - used by your app to store other data (see below);
// files: equivalent of $_FILES;
// server: equivalent of $_SERVER;
// headers: mostly equivalent to a subset of $_SERVER ($request->headers->get('User-Agent')).

// Each property is a ParameterBag instance (or a subclass of), which is a data holder class:
// request: ParameterBag or InputBag if the data is coming from $_POST parameters;
// query: InputBag;
// cookies: InputBag;
// attributes: ParameterBag;
// files: FileBag;
// server: ServerBag;
// headers: HeaderBag.
?>