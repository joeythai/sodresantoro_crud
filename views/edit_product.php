<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>

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
		}
	</style>
</head>
<body>
	
	<div class="form">
		<h2>Edit Product</h2>
		<form method="post" action="<?php echo BASE_URL.'product/update'; ?>">
			<input type="hidden" name="id" value="<?php echo $products['id'];?>">
			<label for="category_id">Category:</label><br>
			<select name="category_id">				
				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category['id']; ?>" <?php echo ($products['category_id']) == $category['id'] ? "selected=selected" : ""; ?>  ><?php echo $category['name']; ?></option>
				<?php endforeach; ?>
			</select><br>


			<label for="product">Product</label><br>
			<input type="text" name="product" id="product" value="<?php echo $products['name_product']; ?>">
				<br><br>
			<input type="submit" name="send" value="Send">
		</form>
		
	</div>
</body>
</html>