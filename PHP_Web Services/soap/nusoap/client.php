<?php
require "lib/nusoap.php";
$client= new nusoap_client("http://localhost/workspace/2015/nusoap/service.php?wsdl");
$book="XML";
$price = $client->call("price",array("name"=>"$book"));
if(empty($price)){
	echo "No Result found for this Book" . "<br/>";
}
else{
	echo "The Book price is:" . $price . "<br/>";
}
$search = $client->call("search", array("uname"=>"jamil"));
if(empty($search)){
	echo "User Not found!";
}
else{
	echo "User found" . $search;
}
?>