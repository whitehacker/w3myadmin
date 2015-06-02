<?php
require "lib/nusoap.php";
require "functions.php";
$server = new nusoap_server();
$server->configureWSDL("rahnama","urn:rahnama");
$server->register(
			"price",
			array("name"=>"xsd:string"),
			array("return"=>"xsd:string")
			);
$server->register(
			"search",
			array("uname"=>"xsd:string"),
			array("return"=>"xsd:string")
			);
$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

?>