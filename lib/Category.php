<?php
class Category
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");

        $results = $this->db->resultSet();

        return $results;
    }


    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = $category_id");
        $row = $this->db->single();
        return $row;
    }
}
