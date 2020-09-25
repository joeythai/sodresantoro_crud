<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			list-style: none;
		}
		body{
			font-family: arial, 'sans-serif';
			font-size: 14px;
			background-color: #f5f5f5;
		}
		header{
			background-color: #5ea8ca;
			height: 60px;
			width: 100%;
			margin-bottom: 10px;
		}
		header .menu-ul{
			font-size: 16px;
			float: right;			
			
		}

		header .menu-ul .menu-li{
			float: right;
			padding: 20px 15px;
			margin-right: 20px;
			display: inline;
		}

		.menu-ul .menu-li a:link{
			color: #ddd;
			text-decoration: none;
		}

		.menu-ul .menu-li a:hover{
			color: #ccefff;
		}
		
	</style>
</head>
<body>
	<header>
		<nav>			
			<ul class="menu-ul">
				<li class="menu-li"><a href="<?php echo BASE_URL.'category'; ?>">Category</a></li>
				<li class="menu-li"><a href="<?php echo BASE_URL.'product'; ?>">Product</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</main>
</body>
</html>