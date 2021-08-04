<!DOCTYPE html>
<html>
<head>
	<title>vega_lms</title>
	<style>
		body{
			margin: 0;
			padding: 0;
		}
		.header{
			font-family: sans-serif;
		}
		.navigation-part{
			display: flex;
			flex-wrap: wrap;
			background-color: #000000;
			justify-content: space-around;
			align-items: center;
			width: 100%;
		}
		.text h2{
			color: white;
			font-size: 20px;
			margin: 0;
		}
		.nav ul{
			display: flex;
			flex-wrap: wrap;
		}
		.nav ul li{
			list-style: none;
			margin-left: 14px;
		}
		.nav ul li a{
			text-decoration: none;
			color: white;
		}

		.holder{
			background-color: #ffffff;
			align-items: center;
			margin: 100px 0;
		}
		.content{
			background: linear-gradient(to left, #ad8e34, #fbe30f);
			text-align: center;
			width: 50%;
			margin: 0 auto;
			padding: 50px;
			border-radius: 8px;
		}
		.footer {
			/*text-align: center;*/
			width: 60%;
			margin: 0 auto;
		}
		.footer hr{
			border: 0.1px solid #dce2dc;
		}

	</style>
</head>
<body>

	<header class="header">
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
		<main class="holder">
			<div class="content">
				<h2>Library Management System</h2>
			</div>
		</main>
		<div class="footer">
			<hr>
			<p>&copy; 2021- VEGA Library Management System</p>
		</div>
		
	</header>

</body>
</html>