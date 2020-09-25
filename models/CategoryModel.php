<?php

class CategoryModel extends Model
{
	private $name;
	private $updated;
	private $created;

	
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setCreated($created)
	{
		$this->created = $created;
	}

	public function getCreated()
	{
		return $this->created;
	}

	public function setUpdated($updated)
	{
		$this->updated = $updated;
	}

	public function getUpdated()
	{
		return $this->updated;
	}

	public function create(Array $data)
	{
		
		$name = $data['name'];
		
		$sql = "INSERT INTO categories(name) VALUES (:name)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':name', $name);
		
		$sql->execute();
	}

	public function update(Array $data)
	{
		$name = $data['name'];
		$id = $data['id'];

		print_r($id, $data);
		$sql = "UPDATE categories SET name = :name WHERE id = :id";
		$sql = $this->pdo->prepare($sql); 
		$sql->bindValue(':name', $name);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	public function list()
	{
		$list = array();

		$sql = "SELECT * FROM categories";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0)
		{
			$list = $sql->fetchAll();
		}

		return $list;
	}

	public function delete($id)
	{
		//$sql = "DELETE FROM categories WHERE id"
		echo 'oi';
	}

	public function showCategory($id)
	{
		$show = array();

		$sql = "SELECT * FROM categories WHERE id = :id ";
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
			return 'Category not found';
		}
	}
}