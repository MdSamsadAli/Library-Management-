<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		/*body{
			margin: 0;
			padding: 0;
		}*/
		.navigation-part{
			display: flex;
			flex-wrap: wrap;
			background-color: #000000;
			justify-content: space-around;
			align-items: center;
		}
		.text h2{
			color: white;
			font-size: 20px;
			margin: 0;
		}
		.nav ul{
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			line-height: 1.2;
			margin: 10px 0;
		}
		.nav ul li{
			list-style: none;
			margin-left: 14px;
		}
		.nav ul li a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<div class="navigation-part">
			<div class="text">
				<h2>VEGA LMS</h2>
			</div>
			<div class="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="author.php">Author</a></li>
					<li><a href="publisher.php">Publisher</a></li>
					<li><a href="member.php">Member</a></li>
					<li><a href="book.php">Book</a></li>
					<li><a href="#issue_book.php">Issue Book</a></li>
					<li><a href="#return_book.php">Return Book</a></li>
				</ul>
			</div>
		</div>
	<div class="container">
		<div class="mt-3 mb-3">
			<h2>BOOK</h2>
		</div>
		<div class="row">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">SNo</th>
			      <th scope="col" rowspan="1">Book Name</th>
			      <th scope="col" rowspan="1">Content</th>
			      <th scope="col" rowspan="1">Pages</th>
			      <th scope="col" rowspan="1">Edition</th>
			      <th scope="col" rowspan="1">Author Name</th>
			      <th scope="col" rowspan="1">Book Category</th>
			      <th scope="col" rowspan="1">Publisher Name</th>
			    </tr>
			  </thead>
			  <tbody>
					  	<?php
					  	include 'connection.php';
					  	$id = 1;
					  	$sql = "SELECT * from lms_add ORDER BY id desc";
					  	$result = mysqli_query($conn,$sql);
					  	if($result) {
					  	while($row=mysqli_fetch_assoc($result)) {
					  	?>
			  			 <tr>
						    <td><?php echo $id; ?></td>
                            <td><?php echo $row['bookname']; ?></td>
                            <td><?php echo $row['content']; ?></td>
                            <td><?php echo $row['pages']; ?></td>
                            <td><?php echo $row['edition']; ?></td>
                            <td><?php echo $row['authorname']; ?></td>
                            <td><?php echo $row['bookcategory']; ?></td>
                            <td><?php echo $row['publishername']; ?></td>
                           <!--  <td>
                                <a href="book_edit.php?id=<?php echo $row['id']; ?>"title="View Record">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['id']; ?>"title="Record Delete">Delete</a>
                            </td>
						    <td><a href="details.php">Details</a></td> -->
					    </tr>
					    <?php $id++ ?>
				  		<?php }
					  	}
					  	?>
			  </tbody>
			</table>
		</div>
		<div class="footer">
			<hr>
			<p>&copy; 2021- VEGA Library Management System</p>
		</div>
	</div>
</body>
</html>