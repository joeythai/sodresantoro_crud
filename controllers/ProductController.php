<?php

class ProductController extends Controller

{
	public function index()
	{
		$category = new CategoryModel();
		$categories = $category->list();

		$product = new ProductModel();
		$products = $product->list();		

		$datas = array(
			'categories' 	=> $categories,
			'products' 		=> $products		 		
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

	public function edit($id)
	{

		$category = new CategoryModel();
		$categories = $category->list();

		$productModel = new ProductModel();
		$product = $productModel->showProduct($id);

		$data = array(
			'products' => $product,
			'categories' => $categories
		);

		$this->loadTemplate('edit_product', $data);
	}

	public function update()
	{
		$productModel = new ProductModel();
		$products = array();

		if(isset($_POST['product']) && !empty($_POST['product']))
		{

			$categoryId = addslashes($_POST['category_id']);
			$nameProduct = addslashes($_POST['product']);
			$id = addslashes($_POST['id']);
			

			$products['name'] = $nameProduct;
			$products['id'] = $id;
			$products['category_id'] = $categoryId;
				
			$productModel->update($products);			
				
			
		}
	}

	public function delete($id)
	{
		$productModel = new ProductModel();
		
		$id = addslashes($id);
		$productModel->delete($id);
	}
}