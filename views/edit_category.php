<!DOCTYPE html>
<html>
<head>
	<title>Category Page</title>

	<style type="text/css">
		.form{
			background-color: #fff;
			height: 600px;
			margin: 0 auto;
			width: 600px;
			padding: 15px;
		}

		.form form{
			padding: 10px;
			margin: 10px;
			background-color: #ededed;			
		}
		input[type="text"]{
			width: 80%;
			margin: 0 auto;
			padding: 10px;
			border: none;
			margin-bottom: 10px;
			border-radius: 2px;
		}
		select{
			width: 80%;
			margin: 0 auto;
			padding: 10px;
			border: none;
			margin-bottom: 10px;
			border-radius: 2px;
		}	</style>
</head>
<body>
	
	<div class="form">
		<h2>Edit Category</h2>
		<form method="post" action="<?php echo BASE_URL.'category/update/' ?>">
			<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
			<label for="category">Category:</label><br>
			<input type="text" name="category" id="category" value="<?php echo $category['name']; ?>">
				<br><br>
			<input type="submit" name="send" value="Send">
		</form>

				
	</div>
</body>
</html>