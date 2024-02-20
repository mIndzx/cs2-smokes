<?php
require_once 'Templates/Header.php';
$path = trim($_SERVER['REQUEST_URI'], "/");
$header = new Header($path);
$header->getHeader();