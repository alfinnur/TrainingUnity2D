<?php
	include 'config.php';d
	
	if ( !empty($_POST['id_beacon']) ){
		$id_beacon = $_POST['id_beacon'];
		$sql = "select DISTINCT year from absensi where id_beacon = '$id_beacon' order by year desc";
		$result = $conn->query($sql);
		
		while($row = $result ->fetch_assoc()){
			$year[] = $row;
		}
		$json['year'] = $year;s
	}
	
	echo json_encode($year, JSON_PRETTY_PRINT);
?>