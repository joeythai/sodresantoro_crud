<?php

class ProductModel extends Model
{

	public function create(Array $data)
	{

		$name = $data['name'];
		$categoryId = $data['category_id'];

		$sql = "INSERT INTO products (name, category_id) VALUES (:name, :categoryId)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':name', $name);
		$sql->bindValue(':categoryId', $categoryId);
		$sql->execute();
		
	}

	public function update($id, Array $data)
	{

	}

	public function list()
	{

	}

	public function delete($id)
	{

	}
}