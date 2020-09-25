<!DOCTYPE html>
<html>
<head>
	<title>Category Page</title>

	<style type="text/css">
		.form{
			background-color: #fff;
			height: 600px;
			margin: 0 auto;
			width: 400px;
			padding: 15px;
		}

		.form form{
			padding: 10px;
			margin: 10px;
		}
	</style>
</head>
<body>
	
	<div class="form">
		<h2>New Category</h2>
		<form method="post" action="<?php echo BASE_URL.'category/create'; ?>">
			<label for="category">Category:</label><br>
			<input type="text" name="category" id="category">
				<br><br>
			<input type="submit" name="send" value="Send">
		</form>

		<table>
			<thead>
				<th>Category Name</th>
				<th>Delete</th>
				<th>Edit</th>
			</thead>
			<tbody>
				<?php foreach($categories as $category): ?>
					<tr>
						<td><?php echo $category['name']; ?></td>
						<td><a href="<?php echo BASE_URL.'category/delete/'.$category['id']; ?>">Delete</a></td>
						<td><a href="<?php echo BASE_URL.'category/edit/'.$category['id']; ?>">Edit</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		
	</div>
</body>
</html>