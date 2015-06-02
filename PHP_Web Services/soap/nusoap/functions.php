<?php
function price($name){
	$details = array(
		'Java' => 1000,
		'PHP' => 20,
		'XML' => 400
		);
	foreach($details as $n => $p){
		if($name==$n){
			$price = $p;
		}
	}
	return $price;
}
function search($uname){
	mysql_connect("localhost","root","");
	mysql_select_db("cms");
	$query=mysql_query("SELECT * FROM members WHERE login='$uname'");
	if($query){
		$row=mysql_fetch_array($query);
	}
	return $row['firstname'] . $row['lastname'];
}


?>