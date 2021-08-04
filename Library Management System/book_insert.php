<?php
include 'connection.php';

if (isset($_POST['submit'])) {
	$bookname = $_POST['bookname'];
	$content = $_POST['content'];
	$page = $_POST['page'];
	$edition = $_POST['edition'];
	$authorname = $_POST['author'];
	$bookcategory = $_POST['bookcategory'];
	$publishername = $_POST['pname'];

	$sql = "INSERT INTO lms_add(bookname, content, pages, edition, authorname, bookcategory, publishername) VALUES ('$bookname', '$content', '$page', '$edition', '$authorname', '$bookcategory', '$publishername')";

	$result = mysqli_query($conn,$sql);

	if ($result) {
		header("location: book.php");
	}
	else{
		header("location: book_insert.php".mysqli_error($conn));
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
			<h2>Book Insert</h2>
		</div>
		<div class="border row col-10">
			<form action="" method="post" class="mt-3">
				<div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Book Name</label>
				    <div class="col-sm-10">
				     	<input type="text" class="form-control" id="inputEmail3" name="bookname">
				    </div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="content">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Pages</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="page">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Edition</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="edition">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Author Name</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="author">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Book Category</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="bookcategory">
			   		</div>
			  	</div>
			  	<div class="row mb-3">
			    	<label for="inputPassword3" class="col-sm-2 col-form-label">Publisher Name</label>
			    	<div class="col-sm-10">
			      	<input type="text" class="form-control" id="inputPassword3" name="pname">
			   		</div>
			  	</div>
			  	<input type="submit" name="submit" value="Add" class="btn btn-primary mb-3">
			</form>
		</div>
		
	</div>
	
</body>
</html>