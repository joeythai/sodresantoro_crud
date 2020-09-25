<?php

class CategoryController extends Controller
{
	public function index()
	{
		$category = new CategoryModel();
		$categories = $category->list();

		$data = array(
			'categories'	=> $categories,
		);

		$this->loadTemplate('category', $data);
	}

	public function create()
	{
		$categoryModel = new CategoryModel();
		$categories = array();

		if(isset($_POST['category']) && !empty($_POST['category']))
		{
			$nameCategory = addslashes($_POST['category']);
			

			$categories['name'] = $nameCategory;
			
			$categoryModel->create($categories);
		}
	}

	public function edit($id)
	{

		$categoryModel = new CategoryModel();
		$category = $categoryModel->showCategory($id);
		
		$data = array(
			'category' => $category
		);

		$this->loadTemplate('edit_category', $data);
	}

	public function update($id)
	{
		echo 'to aqui';
	}

	public function delete($id)
	{
		echo 'ok dle';
	}

}