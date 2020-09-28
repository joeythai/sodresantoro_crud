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
		#table{
			font: 100% sans-serif;
  			background-color: #ededed;
  			border-collapse: collapse;
  			empty-cells: show;
  			border: 1px solid #7a7;
  			width: 100%;

		}

		#table > thead{
			margin: 10px;
			padding: 10px;
		}

		#table > caption {
  			text-align: left;
  			font-weight: bold;
  			font-size: 200%;
  			border-bottom: .2em solid #4ca;
  			margin-bottom: .5em;
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

		<table id="table" cellspacing="10" cellpadding="10">
			<thead>
				<th align="left">Product Name</th>
				<th align="left">Category</th>
				<th align="left">Delete</th>
				<th align="left">Edit</th>
			</thead>
			<tbody>
				<?php foreach($products as $product): ?>
					<tr>
						<td><?php echo $product['name_product']; ?></td>
						<td><?php echo $product['name_category']; ?></td>
						<td><a href="<?php echo BASE_URL.'product/delete/'.$product['id']; ?>">Delete</a></td>
						<td><a href="<?php echo BASE_URL.'product/edit/'.$product['id']; ?>">Edit</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
	</div>
</body>
</html>