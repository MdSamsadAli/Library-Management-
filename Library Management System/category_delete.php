<?php 
include 'connection.php';
$id = $_REQUEST['id'];
$sql = "DELETE from category_add where id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
	header("location: category.php");
}
else{
	echo "error occurred".mysqli_error($conn);
}
?>