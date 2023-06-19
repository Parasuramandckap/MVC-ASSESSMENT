<?php
require "router.php";
session_start();
$controller = new Router();

$controller->post("/","index");
$controller->post("/create","create");
$controller->post("/list","list");

$controller->route();