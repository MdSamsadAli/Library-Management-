<?php
include 'connection.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM category_add WHERE id =" .$id;
$result = mysqli_query($conn, $sql);
if ($result) {
	$row = mysqli_fetch_assoc($result);
}
?>
<?php
if (isset($_POST['submit'])) {
	$bookcategory = $_POST['bookcategory'];
	$status = $_POST['status'];
	$sql = "UPDATE category_add set bookcategory = '$bookcategory', status = '$status' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("location: category.php");
	}
	else{
		echo "not inserted".mysqli_error($conn);
	}
}


?>

<!DOCTYPE html> 
<html>
<head>
	<title>Insert Category</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<div>
			<h2>Category Insert</h2>
		</div>
		<div class="border row col-10">
			<form action="" method="post" class="mt-3">
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Book Category</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="bookcategory" value="<?php echo $row['bookcategory'] ?>">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
			    	<div class="col-sm-10">
			    		<select class="form-select" aria-label="Default select example" name="status" value = "<?php echo $row['status'] ?>" >
						  <option selected>Select One</option>
						  <option value="Yes">Yes</option>
						  <option value="No">No</option>
						</select>
			      	<!-- <input type="text" class="form-control" id="inputPassword3" name="status"> -->
			   		</div>
			  	</div>
			  	<input type="submit" name="submit" value="Update" class="btn btn-primary mb-3">
			</form>
		</div>
		
	</div>
	
</body>
</html>