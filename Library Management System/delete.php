<?php 
include 'connection.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM lms_add where id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
	header("location: book.php");
}
else{
	echo "error occurred".myslqi_error($conn);
}

?>