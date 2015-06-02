<?php
function get_price($name){
	$details=array(
		'Java'=>2000,
		'PHP'=>20
		);
	foreach ($details as $n => $p) {
		if($name==$n){
			return $p;
			break;
		}
	}
}

?>