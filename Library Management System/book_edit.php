<?php
include 'connection.php';
$id = $_REQUEST['id'];
$sql = "SELECT * from lms_add where id =" .$id;
$result = mysqli_query($conn, $sql);
if ($result) {
	$row = mysqli_fetch_assoc($result);
}
?>
<?php
if (isset($_POST['submit'])) {
	$id = $_REQUEST['id'];
	$bookname = $_POST['bookname'];
	$content = $_POST['content'];
	$page = $_POST['page'];
	$edition = $_POST['edition'];
	$authorname = $_POST['author'];
	$bookcategory = $_POST['bookcategory'];
	$publishername = $_POST['publishername'];

	$sql = "UPDATE lms_add set bookname = '$bookname', content = '$content', pages = '$page', edition = '$edition', authorname = '$authorname', bookcategory = 
	'$bookcategory', publishername ='$publishername' where id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("location: book.php");
	}
	else{
		header("location: book_edit.php".mysqli_error($conn));
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Insert Book</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<div>
			<h2>Book Update</h2>
		</div>
		<div class="border row col-10">
			<form action="" method="post" class="mt-3">
				<div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Book Name</label>
				    <div class="col-sm-10">
				     	<input type="text" class="form-control" id="inputEmail3" name="bookname" value="<?php echo $row['bookname'] ?>">
				    </div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="content" value="<?php echo $row['content'] ?>">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Pages</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="page" value="<?php echo $row['pages'] ?>">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Edition</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="edition" value="<?php echo $row['edition'] ?>">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Author Name</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="author" value="<?php echo $row['authorname'] ?>">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Book Category</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="bookcategory" value="<?php echo $row['bookcategory'] ?>">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Publisher Name</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="publishername" value="<?php echo $row['publishername'] ?>">
			   		</div>
			  	</div>
			  	<button type="submit" class="btn btn-primary mb-3" name="submit">Update</button>
			</form>
		</div>
		
	</div>
	
</body>
</html>