<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "Jingyun_He";
$conn = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
$result_array = array();


if (mysqli_connect_errno()) {
	die("Database connection failed");
}

$condition_arr = array();
if (!empty($_GET["teatype"])) {
	array_push($condition_arr, "teaLeaf='" . $_GET["teatype"] . "'");
}

if (!empty($_GET["teafavor"])) {
	array_push($condition_arr, "teaFavor='" . $_GET["teafavor"] . "'");
}

// Connect array elements to a string with 'and'
if (count($condition_arr) > 0) {
	$condition_str = implode(" and ", $condition_arr);
	$sql = "SELECT * FROM product WHERE " . $condition_str;

	$result = mysqli_query($conn, $sql);
	$results_rows = mysqli_num_rows($result);
	if ($results_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($result_array, $row);
		}
	}

	echo json_encode($result_array);
}
?>