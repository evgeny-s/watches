<?php
include_once(__DIR__ . '/lib/Frontend.class.php');
include_once(__DIR__ . '/lib/JsonDecoder.class.php');
include_once(__DIR__ . '/lib/Search.class.php');
error_reporting(E_ERROR | E_PARSE);

$frontend = new Frontend();
$result = $frontend->processRequest();

include('/views/tpl.php');

?>
