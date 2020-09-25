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

	public function update(Array $data)
	{
		$name = $data['name'];
		$id = $data['id'];
		$categoryId =$data['category_id'];

		
		$sql = "UPDATE products SET name = :name, category_id = :categoryId WHERE id = :id";
		$sql = $this->pdo->prepare($sql); 
		$sql->bindValue(':name', $name);
		$sql->bindValue('categoryId', $categoryId);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	public function list()
	{
		$list = array();

		$sql = "SELECT * FROM products";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0)
		{
			$list = $sql->fetchAll();
		}

		return $list;
	}

	public function delete($id)
	{

	}

	public function showProduct($id)
	{
		$show = array();

		$sql = "SELECT * FROM products WHERE id = :id ";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0)
		{
			$show = $sql->fetch(PDO::FETCH_ASSOC);

			return $show;
		}
		else
		{
			return 'Product not found';
		}
	}
}