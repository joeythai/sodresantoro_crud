<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>

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
		<h2>New Product</h2>
		<form method="post" action="<?php echo BASE_URL.'product/create'; ?>">
			<label for="category_id">Category:</label><br>
			<select name="category_id">
				<option value="0" selected="selected">Selecione</option>
				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
				<?php endforeach;?>
			</select><br>
			<label for="product">Product</label><br>
			<input type="text" name="product" id="product">
				<br><br>
			<input type="submit" name="send" value="Send">
		</form>
		
	</div>
</body>
</html>