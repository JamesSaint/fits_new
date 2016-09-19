<?php 

function secure_data($dbc, $data) {
	$data = stripcslashes($data);
	$data = strip_tags($data);
	$data = mysqli_real_escape_string ($dbc, $data);
	return $data;
}
 ?>