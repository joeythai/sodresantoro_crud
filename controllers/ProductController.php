<?php

class ProductController extends Controller

{
	public function index()
	{
		$category = new CategoryModel();
		$categories = $category->list();

		$datas = array(
			'categories' 	=> $categories		 		
		);

		$this->loadTemplate('product', $datas);
	}	

	public function create()
	{
		$productModel = new ProductModel();
		$products = array();

		if(isset($_POST['product']) && !empty($_POST['product']))
		{
			$products['name'] = addslashes($_POST['product']);
		}

		if(isset($_POST['category_id']) && !empty($_POST['category_id']))
		{
			$products['category_id'] = addslashes($_POST['category_id']);
		}

		$productModel->create($products);
	}
}